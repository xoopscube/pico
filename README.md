![X-Updare Store](https://img.shields.io/website?down_color=red&down_message=Offline&label=X-Update%20Store&style=for-the-badge&up_color=308311&up_message=online&url=https%3A%2F%2Fxoopscube.xyz%2Fuploads%2Fxupdatemaster%2Fstores_json_V1.txt)
[![XOOPSCube powered-by-electricity](https://img.shields.io/badge/Powered%20by-Electricity-face74?style=for-the-badge&labelColor=203244&logo=data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxZW0iIGhlaWdodD0iMWVtIiB2aWV3Qm94PSIwIDAgMjQgMjQiPjxwYXRoIGZpbGw9IiNmYWNlNzQiIGQ9Ik0xNC42OSAyLjIxTDQuMzMgMTEuNDljLS42NC41OC0uMjggMS42NS41OCAxLjczTDEzIDE0bC00Ljg1IDYuNzZjLS4yMi4zMS0uMTkuNzQuMDggMS4wMWMuMy4zLjc3LjMxIDEuMDguMDJsMTAuMzYtOS4yOGMuNjQtLjU4LjI4LTEuNjUtLjU4LTEuNzNMMTEgMTBsNC44NS02Ljc2Yy4yMi0uMzEuMTktLjc0LS4wOC0xLjAxYS43Ny43NyAwIDAgMC0xLjA4LS4wMnoiLz48L3N2Zz4=)](https://github.com/xoopscube)
[![XCL](https://img.shields.io/badge/XCL-Made%20with%20passion-b0201d?style=for-the-badge&labelColor=991015&logo=data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxZW0iIGhlaWdodD0iMWVtIiB2aWV3Qm94PSIwIDAgMjQgMjQiPjxwYXRoIGZpbGw9IndoaXRlIiBkPSJtMTIgMjEuMzVsLTEuNDUtMS4zMkM1LjQgMTUuMzYgMiAxMi4yNyAyIDguNUMyIDUuNDEgNC40MiAzIDcuNSAzYzEuNzQgMCAzLjQxLjgxIDQuNSAyLjA4QzEzLjA5IDMuODEgMTQuNzYgMyAxNi41IDNDMTkuNTggMyAyMiA1LjQxIDIyIDguNWMwIDMuNzctMy40IDYuODYtOC41NSAxMS41M0wxMiAyMS4zNVoiLz48L3N2Zz4=)](https://github.com/xoopscube)

[![Project Status: Active – The project has reached a stable, usable state and is being actively developed.](https://www.repostatus.org/badges/2.0.0/active.svg)](https://github.com/xoopscube/pico)
![License GPL](https://img.shields.io/badge/License-GPL-green)
![X-Updare Store](https://img.shields.io/badge/XOOPSCube%20Package-XCL-blue)

## ///// — Pico :: Content Management Module


MODULE | Pico
------------ | -------------
Description | Pico content management module for XCL
Render Engine | Smarty v2 and XCube Layout
Version | 2.50.0
Author | Nobuhiro Yasutomi @nbuy XCL PHP8  
Author | Nuno Luciano @gigamaster XCL PHP7 
Author | Original by Gijoe (https://peak.ne.jp/)
Copyright | 2005-2025 Authors
License | GPL


##### :computer: The Minimum Requirements



          Apache, Nginx, etc. PHP 8.2.x
          MySQL 8.x.x, MariaDB  InnoDB utf8 / utf8mb4
          XCL version 2.5.0



-----

#### Usage

Pico is a duplicatable module, which means the public folder can be cloned and renamed to create a new instance with its own parameters, blocks and templates fully customizable (aka directory-free V3), otherwise known as D3 modules, e.g. D3Forum. 

Pico features frontend content creation and editing with CKEditor4 connected to X-elFinder the file manager for the web with cloud storage possibilities.
Each content can have its own header (css and javascript) and embed content, or forms, from other instances of the module.

### Activity Overview

<img src="https://repository-images.githubusercontent.com/466252342/a3708b13-2832-463c-8981-dcf0dfbdc88c" width="100%" height="auto" alt="Pico's actibity overview">

### Features

- category hierarchy
- breadcrumbs
- page navigation
- XOOPS_TRUST_PATH/wraps/(dirname) manually page content-wrapping
- XOOPS_TRUST_PATH/wraps/(dirname) automatically page content-wrapping and transfer
- static URI (same as wraps)
- overridable options at each categories
- body filter system (smarty, wiki, php etc.)
- content preview
- content cache
- tell a friend link (tellafriend module supported natively)
- printer friendly view
- singlecontent view
- custom html header by module/categories
- custom html header by content
- search (with context)
- count views
- list block (duplicatable)
- menu block (duplicatable)
- content block (duplicatable)
- content controller for admin
- dynamic submenu
- native d3forum comment-integration
- Wysiwyg Editor (CKEditor)
- import from TinyD module
- import from pico module
- import from pico content
- plugin for sitemap module
- vote
- automated menu page
- approval system for creating contents
- approval system for modifying contents
- event notification for waiting approval
- plugin for waiting module
- RSS (both entire module and each categories)
- auto-registering wrapped files into DB
- xoops_breadcrumbs
- static URI by mod_rewrite (both wraps mode and normal mode)
- refer histories of contents
- language constants override system
- Xmobile plugin
- any number of extra fields or images as you like
- tag
- hierarchical permission system (succeeding or independent as you like)
- waiting/expiring contents

## Pico Module Filters Feature

The filters feature in the Pico module is a powerful content processing system that transforms raw content into formatted output. Let's explore how it works:

## What are Filters in Pico?

Filters are processing functions that take raw content and transform it in some way before displaying it to users. They're essentially content processors that can:

1. Convert markup to HTML
2. Apply formatting rules
3. Execute code within content
4. Process templates
5. Apply security measures

## Types of Filters in Pico

Looking at the codebase, Pico includes several built-in filters:

1. **pico_xcode** - Processes BBCode and XOOPS codes
2. **pico_textwiki** - Processes Wiki-style markup
3. **pico_xoopstpl** - Processes Smarty templates within content
4. **pico_xoopsts** - Uses XOOPS TextSanitizer for processing
5. **pico_eval** - Evaluates PHP code (admin/moderator only)
6. **pico_wraps** - Processes content from external files
7. **pico_xpwiki** - Integration with xpWiki (currently disabled)

## Filter Configuration

Filters can be configured at three levels:

1. **Global level** - Set in module configuration
2. **Category level** - Set in category options (what you're seeing in the form)
3. **Content level** - Set for individual content items

The category form allows administrators to override global filter settings for a specific category.  
This is done through the category options section where you can specify:

- `filters` - Filters to be applied
- `filters_forced` - Filters that must be applied regardless of content settings
- `filters_prohibited` - Filters that cannot be used in this category

## Filter Processing

When content is displayed, the system:

1. Determines which filters should be applied based on the configuration
2. Sorts filters by their weight (defined by constants like `_MD_PICO_FILTERS_XCODEINITWEIGHT`)
3. Applies each filter in sequence
4. Returns the transformed content

## Security Considerations

> [!CAUTION]
> Filters available only to administrators or moderators.

Some filters are marked as insecure (like `pico_eval` and `pico_xoopstpl`) and can only be used by administrators or moderators.  
This is controlled by constants like `_MD_PICO_FILTERS_EVALISINSECURE`.

## Editor Integration

Each filter defines which editor should be used when creating content with that filter through constants like `_MD_PICO_FILTERS_XCODEEDITOR`.  
This ensures the editing interface matches the expected input format.

The category options in the form allow administrators to customize these filter settings for all content within a specific category,  
providing a flexible way to control content processing.


