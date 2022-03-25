[![Project Status: Active – The project has reached a stable, usable state and is being actively developed.](https://www.repostatus.org/badges/2.0.0/active.svg)](https://github.com/xoopscube/xcl)
![License GPL](https://img.shields.io/badge/License-GPL-green)
![X-Updare Store](https://img.shields.io/badge/X--Update%20Store-Pending-red)

## ///// — Pico :: Content Management Module

![alt text](https://repository-images.githubusercontent.com/347963527/8c04d798-5562-4443-8e55-656298649231)


MODULE | Pico
------------ | -------------
Description | Pico content management module for XCL
Render Engine | Smarty v2 and XCube Layout
Version | 2.3.1
Author | Original by Gijoe (https://peak.ne.jp/)
Update | Update @gigamaster XCL PHP7
Copyright | 2005-2022 Authors
License | GPL


##### :computer: The Minimum Requirements



          Apache, Nginx, etc. PHP 7.2.x
          MySQL 5.6, MariaDB  InnoDB utf8 / utf8mb4
          XCL version 2.3.+



-----

### Features

**Pico** is a module for content management based on Duplicatable and directory-free V3 (D3).

Though Pico functionally looks like a successor to TinyD, the Pico module is completely coded from scratch.

TinyD has become a deprecated module since the Pico module has reached a stable release.
Of course, you can update your content from TinyD to Pico very easily from the administration dashboard.


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
