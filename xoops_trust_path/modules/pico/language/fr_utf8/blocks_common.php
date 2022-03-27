<?php
// Syntax replace define with const v2.3.0 2021/05/15 @gigamaster XCL-PHP7

// definitions for editing blocks
const _MB_PICO_PROCESSBODY = 'Traiter le contenu de manière dynamique';
const _MB_PICO_TAGSNUM = 'Afficher';
const _MB_PICO_TAGSLISTORDER = 'Ordre d\'affichage';
const _MB_PICO_TAGSSQLORDER = 'Ordre pour extraction';
const _MB_PICO_PARENTCAT = 'Catégorie Parent';
const _MB_PICO_PARENTCATDSC = 'Les sous-catégories de chaque catégorie Parent seront affichées. Afficher de multiples catégories Parent avec leurs id séparés par une virgule.';
const _MB_PICO_DISPLAYBODY = 'Afficher également le document (body)';
const _MB_PICO_CATLIMIT = 'Indiquez la(es) catégorie(s)';
const _MB_PICO_CATLIMITDSC = 'laisser en blanc pour toutes les catégories. 0 pour la catégorie Index (TOP). Afficher de multiples catégories avec leus id séparés par une virgule.';
const _MB_PICO_SELECTORDER = 'Classer par';
const _MB_PICO_CONTENTSNUM = 'Nombre d\'articles';
const _MB_PICO_THISTEMPLATE = 'Template(resource) du block';
const _MB_PICO_CONTENT_ID = 'ID Contenu';

// LTR or RTL
if ( defined( '_ADM_USE_RTL' ) ) {
    @define( '_ALIGN_START', _ADM_USE_RTL ? 'right' : 'left' );
    @define( '_ALIGN_END', _ADM_USE_RTL ? 'left' : 'right' );
} else {
    @define( '_ALIGN_START', 'left' ); // change it right for RTL
    @define( '_ALIGN_END', 'right' );  // change it left for RTL
}
