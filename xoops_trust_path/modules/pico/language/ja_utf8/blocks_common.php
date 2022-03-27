<?php
// Syntax replace define with const v2.3.0 2021/05/15 @gigamaster XCL-PHP7

// definitions for editing blocks
const _MB_PICO_CATLIMIT = 'カテゴリーを指定する';
const _MB_PICO_CATLIMITDSC = '※複数指定する時はカテゴリー番号をカンマ(,)で区切る。サブカテゴリーは含まないことに注意（必要なら、各サブカテゴリーを明示的に指定すること）。0はトップカテゴリーを意味する。カテゴリーを指定しない時は空欄にする。';
const _MB_PICO_PARENTCAT = '親カテゴリー';
const _MB_PICO_PARENTCATDSC = 'ここで指定された親カテゴリー直下のカテゴリーのみが表示される。親カテゴリーを複数指定する時はカテゴリー番号をカンマ(,)で区切る。';
const _MB_PICO_SELECTORDER = '表示順';
const _MB_PICO_CONTENTSNUM = '表示件数';
const _MB_PICO_THISTEMPLATE = 'このブロックのテンプレート';
const _MB_PICO_DISPLAYBODY = '本文表示する';
const _MB_PICO_CONTENT_ID = 'コンテンツ番号';
const _MB_PICO_PROCESSBODY = '本文を動的生成する';
const _MB_PICO_TAGSNUM = 'タグ表示数';
const _MB_PICO_TAGSLISTORDER = 'タグ表示順';
const _MB_PICO_TAGSSQLORDER = 'タグ抽出順';

// LTR or RTL
if ( defined( '_ADM_USE_RTL' ) ) {
    @define( '_ALIGN_START', _ADM_USE_RTL ? 'right' : 'left' );
    @define( '_ALIGN_END', _ADM_USE_RTL ? 'left' : 'right' );
} else {
    @define( '_ALIGN_START', 'left' ); // change it right for RTL
    @define( '_ALIGN_END', 'right' );  // change it left for RTL
}
