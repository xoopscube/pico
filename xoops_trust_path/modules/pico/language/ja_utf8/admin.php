<?php
// Syntax replace define with const v2.3.0 2021/05/15 @gigamaster XCL-PHP7

// Altsys admin menu and breadcrumbs
const _MD_A_MYMENU_MYTPLSADMIN = 'Templates' );
const _MD_A_MYMENU_MYBLOCKSADMIN = 'Blocks Permissions' );
const _MD_A_MYMENU_MYPREFERENCES = 'Preferences' );

// contents list admin
const _MD_A_PICO_H2_CONTENTS = 'コンテンツ一括管理' );
const _MD_A_PICO_TH_CONTENTSID = '記事番号' );
const _MD_A_PICO_TH_CONTENTSSUBJECT = '表題' );
const _MD_A_PICO_TH_CONTENTSWEIGHT = '表示順' );
const _MD_A_PICO_TH_CONTENTSVISIBLE = '表示' );
const _MD_A_PICO_TH_CONTENTSSHOWINNAVI = 'Navi' );
const _MD_A_PICO_TH_CONTENTSSHOWINMENU = 'Menu' );
const _MD_A_PICO_TH_CONTENTSALLOWCOMMENT = 'Com' );
const _MD_A_PICO_TH_CONTENTSFILTERS = 'フィルター' );
const _MD_A_PICO_TH_CONTENTSACTIONS = 'アクション' );
const _MD_A_PICO_LEGEND_CONTENTSTHS = '表示:表示する &nbsp; Navi:ページナビに表示する &nbsp; Menu:メニューに表示する &nbsp; Com:コメント可能' );
const _MD_A_PICO_BTN_MOVE = '移動' );
const _MD_A_PICO_LABEL_CONTENTSRIGHTCHECKED = '右端がチェックされた記事を:' );
const _MD_A_PICO_MSG_CONTENTSMOVED = '移動しました' );
const _MD_A_PICO_LABEL_MAINDISP = '表示' );
const _MD_A_PICO_BTN_DELETE = '削除' );
const _MD_A_PICO_CONFIRM_DELETE = '本当に削除してよろしいですか？' );
const _MD_A_PICO_MSG_CONTENTSDELETED = '削除しました' );
const _MD_A_PICO_BTN_EXPORT = '他のpicoへのコピー' );
const _MD_A_PICO_CONFIRM_EXPORT = '対象モジュールのトップコンテンツとしてエクスポート（移動ではなくコピー）します。コメントはコピーされません。よろしいですか？' );
const _MD_A_PICO_MSG_CONTENTSEXPORTED = 'エクスポートしました' );
const _MD_A_PICO_MSG_FMT_DUPLICATEDVPATH = '仮想パスの重複などの原因で、いくつかのコンテンツは更新されませんでした ID: %s' );

// category_access
const _MD_A_PICO_LABEL_SELECTCATEGORY = 'カテゴリーを選択' );
const _MD_A_PICO_H2_INDEPENDENTPERMISSION = '独立パーミッション設定' );
const _MD_A_PICO_LABEL_INDEPENDENTPERMISSION = 'このカテゴリー独自のパーミッションを設定する' );
const _MD_A_PICO_LINK_CATPERMISSIONID = '親権限を確認する' );
const _MD_A_PICO_H2_GROUPPERMS = 'グループ毎の権限' );
const _MD_A_PICO_H2_USERPERMS = 'ユーザー毎の権限' );
const _MD_A_PICO_TH_UID = 'ユーザID' );
const _MD_A_PICO_TH_UNAME = 'ユーザ名' );
const _MD_A_PICO_TH_GROUPNAME = 'グループ名' );
const _MD_A_PICO_NOTICE_ADDUSERS = '※ユーザを個別に新規追加する場合、ユーザID（数字）かユーザ名のいずれかを直接入力してください。<br>閲覧権限を外せば、そのユーザはこのリストからも消えます。' );

// import
const _MD_A_PICO_H2_IMPORTFROM = 'インポート' );
const _MD_A_PICO_LABEL_SELECTMODULE = 'モジュール選択' );
const _MD_A_PICO_BTN_DOIMPORT = 'インポート実行' );
const _MD_A_PICO_CONFIRM_DOIMPORT = '本当にインポートを実行してよろしいですか？' );
const _MD_A_PICO_MSG_IMPORTDONE = 'インポート完了しました' );
const _MD_A_PICO_ERR_INVALIDMID = '指定されたモジュールからはインポートできません' );
const _MD_A_PICO_ERR_SQLONIMPORT = 'インポートに失敗しました。インポート元とインポート先で、テーブル構造が違う可能性があります。両方とも最新版にアップデートしているか確認してください' );
const _MD_A_PICO_HELP_IMPORTFROM = 'インポート可能なのは、pico・TinyDです。可能な限りオリジナル情報を損なわない形でインポートしますが、完全な再現はできません。各種権限・モデレータについてチェックしてください。なおインポートの成功・不成功にかかわらず、現在のモジュール内の情報は全削除されます。' );
const _MD_A_PICO_H2_SYNCALL = '冗長情報の同期' );
const _MD_A_PICO_BTN_DOSYNCALL = '同期実行' );
const _MD_A_PICO_MSG_SYNCALLDONE = '同期完了しました' );
const _MD_A_PICO_HELP_SYNCALL = 'カテゴリーのツリー構造・コンテンツにおける投票数など、速度をかせぐために持たせている冗長情報がおかしくなった時に実行してください' );
const _MD_A_PICO_H2_CLEARBODYCACHE = '本文キャッシュのクリア' );
const _MD_A_PICO_BTN_DOCLEARBODYCACHE = 'クリア実行' );
const _MD_A_PICO_MSG_CLEARBODYCACHEDONE = '全コンテンツの本文キャッシュをクリアしました' );
const _MD_A_PICO_HELP_CLEARBODYCACHE = 'サイトを移動するなどして、コンテンツ本文の表示や検索結果がおかしくなっている時にだけ実行してください。正常な時に実行すると、パフォーマンスの低下や検索ミスなどの原因になります。' );

// extras
const _MD_A_PICO_H2_EXTRAS = '拡張機能' );
const _MD_A_PICO_TH_ID = 'ID' );
const _MD_A_PICO_TH_TYPE = 'TYPE' );
const _MD_A_PICO_TH_SUMMARY = 'サマリ' );
const _MD_A_PICO_LINK_DETAIL = '詳細' );
const _MD_A_PICO_LINK_EXTRACT = '絞込' );
const _MD_A_PICO_LABEL_SEARCHBYPHRASE = '文字列検索' );
const _MD_A_PICO_TH_EXTRASACTIONS = 'アクション' );
const _MD_A_PICO_LABEL_EXTRASRIGHTCHECKED = '右端がチェックされた項目を:' );
const _MD_A_PICO_BTN_CSVOUTPUT = 'CSV出力' );
const _MD_A_PICO_MSG_DELETED = '削除しました' );

// tags
const _MD_A_PICO_H2_TAGS = 'タグ管理' );
const _MD_A_PICO_TH_TAG = 'タグ' );
const _MD_A_PICO_TH_USED = '利用数' );
const _MD_A_PICO_LABEL_ORDER = '並び順' );
