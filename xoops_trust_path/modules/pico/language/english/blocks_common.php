<?php
// Syntax replace define with const v2.3.0 2021/05/15 @gigamaster XCL-PHP7

// definitions for editing blocks
const _MB_PICO_CATLIMIT = 'Specify the category(ies)';
const _MB_PICO_CATLIMITDSC = 'blank means all categories. 0 means the TOP category. you can specify categories multiply by numbers separated with comma.';
const _MB_PICO_PARENTCAT = 'Parent category';
const _MB_PICO_PARENTCATDSC = 'Subcategories directly belonging to this parent category will be displayed. you can specify parent categories multiply by numbers separated with comma.';
const _MB_PICO_SELECTORDER = 'Order by';
const _MB_PICO_CONTENTSNUM = 'Number of items to be displayed';
const _MB_PICO_THISTEMPLATE = 'Template(resource) of the block';
const _MB_PICO_DISPLAYBODY = 'Display content body also';
const _MB_PICO_CONTENT_ID = 'Content ID';
const _MB_PICO_PROCESSBODY = 'Process body of the content dynamically';
const _MB_PICO_TAGSNUM = 'Display';
const _MB_PICO_TAGSLISTORDER = 'Order for displaying';
const _MB_PICO_TAGSSQLORDER = 'Order for extracting';

// LTR or RTL
if ( defined( '_ADM_USE_RTL' ) ) {
    @define( '_ALIGN_START', _ADM_USE_RTL ? 'right' : 'left' );
    @define( '_ALIGN_END', _ADM_USE_RTL ? 'left' : 'right' );
} else {
    @define( '_ALIGN_START', 'left' ); // change it right for RTL
    @define( '_ALIGN_END', 'right' );  // change it left for RTL
}
