<?php
// Syntax replace define with const v2.3.0 2021/05/15 @gigamaster XCL-PHP7

// ## XOOPS Cube Legacy - Tradução para o Português
// ## Por............: Mikhail Miguel
// ## E-mail.........: mikhail@underpop.com
// ## Website........: http://xoopscube.com.br

// Appended by Xoops Language Checker -GIJOE- in 2008-09-17 13:09:57
const _MB_PICO_PROCESSBODY = 'Process body of the content dynamically';

// Appended by Xoops Language Checker -GIJOE- in 2008-04-23 04:51:13
const _MB_PICO_TAGSNUM = 'Display';
const _MB_PICO_TAGSLISTORDER = 'Order for displaying';
const _MB_PICO_TAGSSQLORDER = 'Order for extracting';

const _MB_PICO_CATLIMIT = "Especifique as categorias";
const _MB_PICO_CATLIMITDSC = "Em branco significa todas as categorias, e 0 (zero) significa a categoria principal. Você pode especificar categorias com números separados por vírgulas.";
const _MB_PICO_CONTENTSNUM = "Número de itens a serem mostrados";
const _MB_PICO_CONTENT_ID = "Número do artigo";
const _MB_PICO_DISPLAYBODY = "Também mostrar o corpo do artigo";
const _MB_PICO_PARENTCAT = "Categoria anterior";
const _MB_PICO_PARENTCATDSC = "Serão mostradas todas as subcategorias desta categoria principal. Você pode especificar as categorias principais escrevendo os seus respectivos números separados com vírgula.";
const _MB_PICO_SELECTORDER = "Ordenar por";
const _MB_PICO_THISTEMPLATE = "Modelo do bloco";

// LTR or RTL
if ( defined( '_ADM_USE_RTL' ) ) {
    @define( '_ALIGN_START', _ADM_USE_RTL ? 'right' : 'left' );
    @define( '_ALIGN_END', _ADM_USE_RTL ? 'left' : 'right' );
} else {
    @define( '_ALIGN_START', 'left' ); // change it right for RTL
    @define( '_ALIGN_END', 'right' );  // change it left for RTL
}
