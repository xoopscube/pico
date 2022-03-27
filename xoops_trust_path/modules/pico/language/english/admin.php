<?php
// Syntax replace define with const v2.3.0 2021/05/15 @gigamaster XCL-PHP7

// Altsys admin menu and breadcrumbs
const _MD_A_MYMENU_MYTPLSADMIN = 'Templates';
const _MD_A_MYMENU_MYBLOCKSADMIN = 'Blocks ';
const _MD_A_MYMENU_MYPREFERENCES = 'Preferences';

// contents list admin
const _MD_A_PICO_H2_CONTENTS = 'Content list';
const _MD_A_PICO_TH_CONTENTSID = 'ID';
const _MD_A_PICO_TH_CONTENTSSUBJECT = 'Subject';
const _MD_A_PICO_TH_CONTENTSWEIGHT = 'weight';
const _MD_A_PICO_TH_CONTENTSVISIBLE = 'VIS';
const _MD_A_PICO_TH_CONTENTSSHOWINNAVI = 'NAVI';
const _MD_A_PICO_TH_CONTENTSSHOWINMENU = 'MENU';
const _MD_A_PICO_TH_CONTENTSALLOWCOMMENT = 'COM';
const _MD_A_PICO_TH_CONTENTSFILTERS = 'Filters';
const _MD_A_PICO_TH_CONTENTSACTIONS = 'Actions';
const _MD_A_PICO_LEGEND_CONTENTSTHS = 'VIS: visible &nbsp; NAVI:show in page navigation &nbsp; MENU:show in menu &nbsp; COM:commentable';
const _MD_A_PICO_BTN_MOVE = 'Moved';
const _MD_A_PICO_LABEL_CONTENTSRIGHTCHECKED = 'Checked items will be:';
const _MD_A_PICO_MSG_CONTENTSMOVED = 'Contents have been moved';
const _MD_A_PICO_LABEL_MAINDISP = 'View';
const _MD_A_PICO_BTN_DELETE = 'delete';
const _MD_A_PICO_CONFIRM_DELETE = 'Are you sure to delete them?';
const _MD_A_PICO_MSG_CONTENTSDELETED = 'Deleted successfully';
const _MD_A_PICO_BTN_EXPORT = 'Export';
const _MD_A_PICO_CONFIRM_EXPORT = 'Selected items are exported as the top contents of the module. Comments will not be copied. Please confirm to export the data';
const _MD_A_PICO_MSG_CONTENTSEXPORTED = 'Exported successfully';
const _MD_A_PICO_MSG_FMT_DUPLICATEDVPATH = 'Some contents have not been updated because of duplicated vpath (ID: %s)';

// category_access
const _MD_A_PICO_LABEL_SELECTCATEGORY = 'Select a category';
const _MD_A_PICO_H2_INDEPENDENTPERMISSION = 'Create unique permissions';
const _MD_A_PICO_LABEL_INDEPENDENTPERMISSION = 'This item is currently inheriting permissions from the parent. You can check to customize unique permissions for this category.';
const _MD_A_PICO_LINK_CATPERMISSIONID = 'Verify inherited permissions from parent category.';
const _MD_A_PICO_H2_GROUPPERMS = 'Group Permissions';
const _MD_A_PICO_H2_USERPERMS = 'User Permissions';
const _MD_A_PICO_TH_UID = 'uid';
const _MD_A_PICO_TH_UNAME = 'uname';
const _MD_A_PICO_TH_GROUPNAME = 'Group name';
const _MD_A_PICO_NOTICE_ADDUSERS = 'You can grant or deny permissions to specific users.<br>Add the <b>uid</b> or <b>uname</b> of the user, and then assign permissions.';

// import
const _MD_A_PICO_H2_IMPORTFROM = 'Import';
const _MD_A_PICO_LABEL_SELECTMODULE = 'Select a module';
const _MD_A_PICO_BTN_DOIMPORT = 'Do import';
const _MD_A_PICO_CONFIRM_DOIMPORT = 'Are you OK?';
const _MD_A_PICO_MSG_IMPORTDONE = 'Imported successfully';
const _MD_A_PICO_ERR_INVALIDMID = 'You\'ve specified wrong module to be imported';
const _MD_A_PICO_ERR_SQLONIMPORT = 'Faild to import. You have to check the versions of each modules';
const _MD_A_PICO_HELP_IMPORTFROM = 'You can import from pico and TinyD instances. And you should know this is not a perfect copy. Especially you should check permissions. You also have to know all data in this module will be lost when you execute to import.';
const _MD_A_PICO_H2_SYNCALL = 'Synchronize redundant informations';
const _MD_A_PICO_BTN_DOSYNCALL = 'Do synchronize';
const _MD_A_PICO_MSG_SYNCALLDONE = 'Synchronized successfully';
const _MD_A_PICO_HELP_SYNCALL = 'Execute it if your categories or contents display contradictory data.';
const _MD_A_PICO_H2_CLEARBODYCACHE = 'Clear body cache';
const _MD_A_PICO_BTN_DOCLEARBODYCACHE = 'clear';
const _MD_A_PICO_MSG_CLEARBODYCACHEDONE = 'all caches for contents have just been cleared';
const _MD_A_PICO_HELP_CLEARBODYCACHE = 'Just execute it when some caching troubles are occurred eg) after moving site.';

// extras
const _MD_A_PICO_H2_EXTRAS = 'Extras';
const _MD_A_PICO_TH_ID = 'ID';
const _MD_A_PICO_TH_TYPE = 'Type';
const _MD_A_PICO_TH_SUMMARY = 'Summary';
const _MD_A_PICO_LINK_DETAIL = 'Detail';
const _MD_A_PICO_LINK_EXTRACT = 'Extract';
const _MD_A_PICO_LABEL_SEARCHBYPHRASE = 'Search by phrase';
const _MD_A_PICO_TH_EXTRASACTIONS = 'Actions';
const _MD_A_PICO_LABEL_EXTRASRIGHTCHECKED = 'selected items will be:';
const _MD_A_PICO_BTN_CSVOUTPUT = 'CSV output';
const _MD_A_PICO_MSG_DELETED = 'Deleted successfully';

// tags
const _MD_A_PICO_H2_TAGS = 'Tag Manager';
const _MD_A_PICO_TH_TAG = 'Tag';
const _MD_A_PICO_TH_USED = 'Used';
const _MD_A_PICO_LABEL_ORDER = 'Order';
