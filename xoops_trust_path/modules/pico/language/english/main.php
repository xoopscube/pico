<?php

//
// CHECK THE FUNCTION IN THE BOTTOM OF THIS FILE (for multibyte languages)
//
const _MD_PICO_NUM = 'Items per page';
const _MD_PICO_TOP = 'TOP';
const _MD_PICO_ALLCONTENTS = 'All contents';
const _MD_PICO_DELETEDCONTENTS = 'Deleted contents';
const _MD_PICO_MENU = 'MENU';
const _MD_PICO_CREATED = 'Created';
const _MD_PICO_MODIFIED = 'Modified';
const _MD_PICO_EXPIRING = 'Expiring';
const _MD_PICO_BYTE = 'byte';
const _MD_PICO_HISTORY = 'History';
const _MD_PICO_DIFF2NOW = 'diff to now';
const _MD_PICO_DIFFFROMPREV = 'diff from previous';
const _MD_PICO_REFERIT = 'Refer it';
const _MD_PICO_DOWNLOADIT = 'Download it';
const _MD_PICO_VIEWED = 'Views';
const _MD_PICO_NEXT = 'Next';
const _MD_PICO_PREV = 'Prev';
const _MD_PICO_CATEGORYINDEX = 'top of the category';
const _MD_PICO_NOSUBJECT = '(no subject)';
const _MD_PICO_FMT_PUBLIC = 'Public';
const _MD_PICO_FMT_PRIVATE = 'Private';
const _MD_PICO_FMT_PUBLICCOUNT = 'Public: %s items';
const _MD_PICO_FMT_PRIVATECOUNT = 'Private: %s items';
const _MD_PICO_WAITINGRELEASE = 'waiting release';
const _MD_PICO_EXPIRED = 'Expired';
const _MD_PICO_INVISIBLE = 'Invisible';
const _MD_PICO_WAITINGAPPROVAL = 'waiting approval';
const _MD_PICO_WAITINGREGISTER = 'waiting new';
const _MD_PICO_WAITINGUPDATE = 'waiting update';
const _MD_PICO_REGISTERED_AUTOMATICALLY = 'AUTOMATIC';
const _MD_PICO_ONOFF = 'ON/OFF';

const _MD_PICO_CATEGORY = 'Category';
const _MD_PICO_CATEGORIES = 'Categories';
const _MD_PICO_SUBCATEGORY = 'Subcategory';
const _MD_PICO_SUBCATEGORIES = 'Subcategories';
const _MD_PICO_CONTENT = 'Content';
const _MD_PICO_CONTENTS = 'Contents';

const _MD_PICO_LINK_MAKECATEGORY = 'New category';
const _MD_PICO_LINK_MAKESUBCATEGORY = 'New subcategory';
const _MD_PICO_LINK_MAKECONTENT = 'New content';
const _MD_PICO_LINK_EDITCATEGORY = 'Edit category';
const _MD_PICO_LINK_EDITCONTENT = 'Edit content';
const _MD_PICO_LINK_CATEGORYPERMISSIONS = 'Permissions';
const _MD_PICO_LINK_BATCHCONTENTS = 'Batch';
const _MD_PICO_LINK_PUBLICCATEGORYINDEX = 'Public index';

const _MD_PICO_LINK_PRINTERFRIENDLY = 'Printer-friendly';
const _MD_PICO_LINK_TELLAFRIEND = 'Tell a friend';
const _MD_PICO_FMT_TELLAFRIENDSUBJECT = 'Article found in %s';
const _MD_PICO_FMT_TELLAFRIENDBODY = "I've just found an interesting article\nSubject:%s";
const _MD_PICO_JUMPTOTOPOFPICOBODY = 'Jump to the top';
const _MD_PICO_CSVENCODING = 'UTF-8';


const _MD_PICO_ERR_SQL = 'SQL Error Occurred in: ';
const _MD_PICO_ERR_DUPLICATEDVPATH = 'The virtual path is duplicated';
const _MD_PICO_ERR_PIDLOOP = 'parent/child loop error';

const _MD_PICO_MSG_UPDATED = 'Updated successfully';

const _MD_PICO_ERR_READCATEGORY = 'You cannot access the specified category';
const _MD_PICO_ERR_CREATECATEGORY = 'You cannot create a category';
const _MD_PICO_ERR_CATEGORYMANAGEMENT = 'You are not a manager of the category';
const _MD_PICO_ERR_READCONTENT = 'You cannot access the specified content';
const _MD_PICO_ERR_CREATECONTENT = 'You cannot create new content';
const _MD_PICO_ERR_LOCKEDCONTENT = 'The content is locked';
const _MD_PICO_ERR_EDITCONTENT = 'You cannot edit the content';
const _MD_PICO_ERR_DELETECONTENT = 'You cannot delete the content';
const _MD_PICO_ERR_PERMREADFULL = 'You cannot read the full content';
const _MD_PICO_ERR_LOGINTOREADFULL = 'Login as a member to read the full content';
const _MD_PICO_ERR_COMPILEERROR = 'The content is not processed due to Smarty compilation errors. Try to edit and submit again.';

const _MD_PICO_MSG_CATEGORYMADE = 'The category has been created successfully';
const _MD_PICO_MSG_CATEGORYUPDATED = 'The category has been modified successfully';
const _MD_PICO_MSG_CATEGORYDELETED = 'The category has been deleted successfully';
const _MD_PICO_MSG_CONTENTMADE = 'The content has been created successfully';
const _MD_PICO_MSG_CONTENTWAITINGREGISTER = 'The content has been submitted for approval';
const _MD_PICO_MSG_CONTENTUPDATED = 'The content has been modified successfully';
const _MD_PICO_MSG_CONTENTWAITINGUPDATE = 'The content has been submitted for update';
const _MD_PICO_MSG_CONTENTDELETED = 'The content has been deleted successfully';

const _MD_PICO_CATEGORYMANAGER = 'Category manager';
const _MD_PICO_CONTENTMANAGER = 'Content manager';
const _MD_PICO_TH_VIRTUALPATH = 'Virtual path';
const _MD_PICO_TH_SUBJECT = 'Subject';
const _MD_PICO_TH_SUBJECT_WAITING = 'Waiting subject';
const _MD_PICO_TH_HTMLHEADER = 'HTML headers';
const _MD_PICO_TH_HTMLHEADER_WAITING = 'Waiting HTML headers';
const _MD_PICO_TH_BODY = 'body';
const _MD_PICO_TH_BODY_WAITING = 'Waiting body';
const _MD_PICO_TH_FILTERS = 'filters';
const _MD_PICO_TH_TAGS = 'Tags';
const _MD_PICO_TH_TAGSDSC = 'multiple tags separated by spaces';
const _MD_PICO_TH_WEIGHT = 'weight';
const _MD_PICO_TH_CONTENTOPTIONS = 'options';
const _MD_PICO_LABEL_USECACHE = 'use cache';
const _MD_PICO_NOTE_USECACHEDSC = 'Enable only for static content';
const _MD_PICO_LABEL_LOCKED = 'Lock (only moderators can edit/delete)';
const _MD_PICO_LABEL_SPECIFY_DATETIME = 'Specify datetime';
const _MD_PICO_LABEL_VISIBLE = 'Visible';
const _MD_PICO_LABEL_SHOWINNAVI = 'Show in navigation';
const _MD_PICO_LABEL_SHOWINMENU = 'Show in menu';
const _MD_PICO_LABEL_ALLOWCOMMENT = 'Allow comments';
const _MD_PICO_TH_CATEGORYTITLE = 'Title';
const _MD_PICO_TH_CATEGORYDESC = 'Description';
const _MD_PICO_TH_CATEGORYPARENT = 'Parent';
const _MD_PICO_TH_CATEGORYWEIGHT = 'Weight';
const _MD_PICO_TH_CATEGORYOPTIONS = 'Options';
const _MD_PICO_CONTENTS_TOTAL = 'Total content';
const _MD_PICO_SUBCATEGORIES_TOTAL = 'Total subcategories';
const _MD_PICO_SUBCATEGORY_COUNT = 'Number of subcategories';
const _MD_PICO_MSG_CONFIRMDELETECATEGORY = 'All content of the category will be removed. Please confirm?';
const _MD_PICO_MSG_CONFIRMDELETECONTENT = 'Are you sure you want to delete?';
const _MD_PICO_MSG_CONFIRMSAVEASCONTENT = 'Are you sure you want to save as...?';
//define('_MD_PICO_MSG_GOTOPREFERENCE4EDITTOP','The TOP category is the special. You can change the settings of the TOP in module preferences.');
const _MD_PICO_LABEL_HTMLHEADERONOFF = 'Display the textarea';
const _MD_PICO_LABEL_HTMLHEADERCONFIGALERT = '(HTML header for each content is disabled in preferences)';
const _MD_PICO_LABEL_INPUTHELPER = 'Helper ON/OFF';
const _MD_PICO_BTN_SUBMITEDITING = 'Save';
const _MD_PICO_BTN_SUBMITSAVEAS = 'Save as...';
const _MD_PICO_BTN_COPYFROMWAITING = 'Save waiting content';
const _MD_PICO_MSG_CONFIRMCOPYFROMWAITING = ' If you do not save the waiting content, the data will be lost. Please confirm?';
const _MD_PICO_HOWTO_OVERRIDEOPTIONS = 'Override preferences by writing a line e.g.:<br>(option name):(option value)<br>Example: show_breadcrumbs:1<br><b>Overridable options current values</b>';


// vote to post
const _MD_PICO_ERR_VOTEPERM = 'You cannot vote';
const _MD_PICO_ERR_VOTEINVALID = 'Invalid vote';
const _MD_PICO_MSG_VOTEDOUBLE = 'You can vote once per content';
const _MD_PICO_MSG_VOTEACCEPTED = 'Thank you for voting!';
const _MD_PICO_MSG_VOTEDISABLED = 'You cannot vote for this item';
const _MD_PICO_VOTECOUNT = 'Votes';
const _MD_PICO_VOTEPOINTAVG = 'Average';
const _MD_PICO_VOTEPOINTDSCBEST = 'Useful';
const _MD_PICO_VOTEPOINTDSCWORST = 'Useless';

// query contents
const _MD_PICO_FMT_QUERYTAGTITLE = 'Tag: %s';
const _MD_PICO_FMT_QUERYTAGDESC = 'Content tagged %s';
const _MD_PICO_ERR_NOCONTENTMATCHED = 'No content';

// filters
const _MD_PICO_FILTERS_EVALTITLE = 'php code';
const _MD_PICO_FILTERS_EVALDESC = 'It will be the parameter of eval() function';
const _MD_PICO_FILTERS_HTMLSPECIALCHARSTITLE = 'HTML special character escape';
const _MD_PICO_FILTERS_HTMLSPECIALCHARSDESC = 'If you want to use BBCode etc. also, set it the first place.';
const _MD_PICO_FILTERS_TEXTWIKITITLE = 'PEAR TextWiki <a href="https://wiki.ciaweb.net/yawiki/index.php?area=Text_Wiki&amp;page=SamplePage" target="_blank">Sample</a>';
const _MD_PICO_FILTERS_TEXTWIKIDESC = 'Rendered by TextWiki rule';
const _MD_PICO_FILTERS_XOOPSTPLTITLE = 'Smarty(XoopsTpl)';
const _MD_PICO_FILTERS_XOOPSTPLDESC = 'Rendered as a Smarty template';
const _MD_PICO_FILTERS_NL2BRTITLE = 'Auto new line';
const _MD_PICO_FILTERS_NL2BRDESC = 'LF will be replaced into &lt;br /&gt;';
const _MD_PICO_FILTERS_SMILEYTITLE = 'Smiley';
const _MD_PICO_FILTERS_SMILEYDESC = ':-) :-D etc.';
const _MD_PICO_FILTERS_XCODETITLE = 'BBCode';
const _MD_PICO_FILTERS_XCODEDESC = 'Auto link and BBCode will be enabled';
const _MD_PICO_FILTERS_WRAPSTITLE = 'Page wraps (note: displays the file specified in the virtual path)';
const _MD_PICO_FILTERS_WRAPSDESC = 'The target file is XOOPS_TRUST_PATH/wraps/(dirname)/file (same as wraps)';
const _MD_PICO_FILTERS_XOOPSTSTITLE = 'Editor default filter (smiley, xcode , img, br)';
const _MD_PICO_FILTERS_XOOPSTSDESC = 'Use default text filter, enabled smiley, xcode , img & br';


// permissions
const _MD_PICO_PERMS_CAN_READ = 'Read';
const _MD_PICO_PERMS_CAN_READFULL = 'Read Full';
const _MD_PICO_PERMS_CAN_POST = 'Post';
const _MD_PICO_PERMS_CAN_EDIT = 'Edit';
const _MD_PICO_PERMS_CAN_DELETE = 'Delete';
const _MD_PICO_PERMS_POST_AUTO_APPROVED = 'Auto Approved';
const _MD_PICO_PERMS_IS_MODERATOR = 'Moderate';
const _MD_PICO_PERMS_CAN_MAKESUBCATEGORY = 'Create a Subcategory';


// LTR or RTL
if ( defined( '_ADM_USE_RTL' ) ) {
    @define( '_ALIGN_START', _ADM_USE_RTL ? 'right' : 'left' );
    @define( '_ALIGN_END', _ADM_USE_RTL ? 'left' : 'right' );
} else {
    @define( '_ALIGN_START', 'left' ); // change it right for RTL
    @define( '_ALIGN_END', 'right' );  // change it left for RTL
}


if ( ! defined( 'FOR_XOOPS_LANG_CHECKER' ) && ! function_exists( 'pico_convert_encoding_to_ie' ) ) {
    function pico_convert_encoding_to_ie( $str ) {
        return $str;
    }
}
