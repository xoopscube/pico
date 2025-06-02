<?php
/**
 * Pico content management D3 module for XCL
 *
 * @package    Pico
 * @version    XCL 2.5.0
 * @author     Other authors Gigamaster, 2020 XCL PHP7
 * @author     Gijoe (Peak)
 * @copyright  (c) 2005-2025 Authors
 * @license    GPL v2.0
 */

require_once dirname( __DIR__ ) . '/include/common_functions.php';

// singleton
class PicoPermission {
	public $db = null;  // Database instance
	public $uid = 0; // intval
	public $permissions = []; // [dirname][permission_id] or [dirname]['is_module_admin']

	public function __construct() {
		global $xoopsUser;

		$this->db  = XoopsDatabaseFactory::getDatabaseConnection();
		$this->uid = is_object( @$xoopsUser ) ? $xoopsUser->getVar( 'uid' ) : 0;
	}

	public static function &getInstance(): \PicoPermission {
		static $instance;
		if ( ! isset( $instance ) ) {
			$instance = new PicoPermission();
		}

		return $instance;
	}

	public function getPermissions( $mydirname ) {
		if ( empty( $this->permissions[ $mydirname ] ) ) {
			$this->permissions[ $mydirname ] = $this->queryPermissions( $mydirname );
		}

		return @$this->permissions[ $mydirname ];
	}

	public function queryPermissions( $mydirname ): ?array {
		$user = null;
  $ret = [];

		if ( $this->uid > 0 ) {
			$user_handler = &xoops_gethandler( 'user' );
			$user         = &$user_handler->get( $this->uid );
		}

		$is_module_admin = false;
		if ( is_object( @$user ) ) {
			// is_module_admin
			$module_handler = &xoops_gethandler( 'module' );
			$moduleObj      = &$module_handler->getByDirname( $mydirname );
			if ( is_object( $moduleObj ) && $user->isAdmin( $moduleObj->getVar( 'mid' ) ) ) {
				$is_module_admin = true;
			}
		}

		if ( is_object( @$user ) ) {
			$groups = $user->getGroups();
			if ( ! empty( $groups ) ) {
				$whr = "`uid`=$this->uid || `groupid` IN (" . implode( ',', $groups ) . ')';
			} else {
				$whr = "`uid`=$this->uid";
			}
		} else {
			$whr = '`groupid`=' . (int) XOOPS_GROUP_ANONYMOUS;
		}

		$sql    = 'SELECT cat_id,permissions FROM ' . $this->db->prefix( $mydirname . '_category_permissions' ) . " WHERE ($whr)";
		$result = $this->db->query( $sql );
/* 		if ( $result ) {
			while ( [$cat_id, $serialized_permissions] = $this->db->fetchRow( $result ) ) {
				$permissions = pico_common_unserialize( $serialized_permissions );
				if ( is_array( @$ret[ $cat_id ] ) ) {
					foreach ( $permissions as $perm_name => $value ) {
						@$ret[ $cat_id ][ $perm_name ] |= $value;
					}
				} else {
					$ret[ $cat_id ] = $permissions;
				}
			}
		} */
	
// TODO START TEST THIS
		if ( $result ) {
			while ( [$cat_id, $serialized_permissions] = $this->db->fetchRow( $result ) ) {
				$permissions = pico_common_unserialize( $serialized_permissions );

				// Add a sanity check for $permissions
				if (!is_array($permissions)) {
				    error_log("PICO (Permission.class.php): Serialized permissions for cat_id $cat_id did not unserialize to an array. Data: " . htmlspecialchars($serialized_permissions));
				    continue; // Skip this problematic record
				}

				// Ensure $ret[$cat_id] is initialized as an array if it's the first time for this cat_id
				if ( !isset($ret[ $cat_id ]) || !is_array($ret[ $cat_id ]) ) {
					$ret[ $cat_id ] = [];
				}

				foreach ( $permissions as $perm_name => $value ) {
				    // Process only if $perm_name is a string (typical for permission names)
				    if (is_string($perm_name)) {
				        $intValue = (int)$value; // Ensure value is an integer for bitwise OR
                        if (isset($ret[ $cat_id ][ $perm_name ])) {
                            $ret[ $cat_id ][ $perm_name ] |= $intValue;
                        } else {
                            // If the permission name doesn't exist yet in $ret[$cat_id], initialize it
                            $ret[ $cat_id ][ $perm_name ] = $intValue;
                        }
				    } else {
				        // Log or handle non-string permission names if they are unexpected
				        error_log("PICO (Permission.class.php): Encountered non-string permission name '".var_export($perm_name, true)."' with value '".var_export($value, true)."' for cat_id $cat_id. Skipping this specific permission item.");
				    }
				}
			}
		}
// TODO END TEST THIS

		if ( empty( $ret ) ) {
			return [ 0 => [], 'is_module_admin' => $is_module_admin ];
		}

		return $ret + [ 'is_module_admin' => $is_module_admin ];
	}

	public function getUidsFromCatid( $mydirname, $cat_id, $permission_type = '' ): array {
		// prepare $type
		$whr_type = $permission_type ? "permissions LIKE '%" . $permission_type . "\";i:1%'" : '1';

		// get permission_id
		$cat_id = (int) $cat_id;
		$sql    = 'SELECT cat_permission_id FROM ' . $this->db->prefix( $mydirname . '_categories' ) . " WHERE cat_id=$cat_id";
		[ $permission_id ] = $this->db->fetchRow( $this->db->query( $sql ) );

		// uid
		$uids   = [];
		$sql    = 'SELECT uid FROM ' . $this->db->prefix( $mydirname . '_category_permissions' ) . " WHERE cat_id=$permission_id AND uid IS NOT NULL AND ($whr_type)";
		$result = $this->db->query( $sql );
		while ( [$uid] = $this->db->fetchRow( $result ) ) {
			$uids[] = $uid;
		}

		// groupid * groups_users_link
		$sql    = 'SELECT distinct g.uid FROM ' . $this->db->prefix( $mydirname . '_category_permissions' ) . ' x , ' . $this->db->prefix( 'groups_users_link' ) . " g WHERE x.groupid=g.groupid AND x.cat_id=$permission_id AND x.groupid IS NOT NULL AND ($whr_type)";
		$result = $this->db->query( $sql );
		while ( [$uid] = $this->db->fetchRow( $result ) ) {
			$uids[] = $uid;
		}
		$uids = array_unique( $uids );

		return $uids;
	}
}
