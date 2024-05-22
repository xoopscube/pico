![X-Updare Store](https://img.shields.io/website?down_color=red&down_message=Offline&label=X-Update%20Store&style=for-the-badge&up_color=308311&up_message=online&url=https%3A%2F%2Fxoopscube.xyz%2Fuploads%2Fxupdatemaster%2Fstores_json_V1.txt)
[![XOOPSCube powered-by-electricity](https://img.shields.io/badge/Powered%20by-Electricity-face74?style=for-the-badge&labelColor=203244&logo=data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxZW0iIGhlaWdodD0iMWVtIiB2aWV3Qm94PSIwIDAgMjQgMjQiPjxwYXRoIGZpbGw9IiNmYWNlNzQiIGQ9Ik0xNC42OSAyLjIxTDQuMzMgMTEuNDljLS42NC41OC0uMjggMS42NS41OCAxLjczTDEzIDE0bC00Ljg1IDYuNzZjLS4yMi4zMS0uMTkuNzQuMDggMS4wMWMuMy4zLjc3LjMxIDEuMDguMDJsMTAuMzYtOS4yOGMuNjQtLjU4LjI4LTEuNjUtLjU4LTEuNzNMMTEgMTBsNC44NS02Ljc2Yy4yMi0uMzEuMTktLjc0LS4wOC0xLjAxYS43Ny43NyAwIDAgMC0xLjA4LS4wMnoiLz48L3N2Zz4=)](https://github.com/xoopscube)
[![XCL](https://img.shields.io/badge/XCL-Made%20with%20passion-b0201d?style=for-the-badge&labelColor=991015&logo=data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxZW0iIGhlaWdodD0iMWVtIiB2aWV3Qm94PSIwIDAgMjQgMjQiPjxwYXRoIGZpbGw9IndoaXRlIiBkPSJtMTIgMjEuMzVsLTEuNDUtMS4zMkM1LjQgMTUuMzYgMiAxMi4yNyAyIDguNUMyIDUuNDEgNC40MiAzIDcuNSAzYzEuNzQgMCAzLjQxLjgxIDQuNSAyLjA4QzEzLjA5IDMuODEgMTQuNzYgMyAxNi41IDNDMTkuNTggMyAyMiA1LjQxIDIyIDguNWMwIDMuNzctMy40IDYuODYtOC41NSAxMS41M0wxMiAyMS4zNVoiLz48L3N2Zz4=)](https://github.com/xoopscube)

[![Project Status: Active – The project has reached a stable, usable state and is being actively developed.](https://www.repostatus.org/badges/2.0.0/active.svg)](https://github.com/xoopscube/pico)
![License GPL](https://img.shields.io/badge/License-GPL-green)
![X-Updare Store](https://img.shields.io/badge/XOOPSCube%20Package-XCL-blue)

## ///// — Pico :: Content Management Module

![alt text](https://repository-images.githubusercontent.com/347963527/8c04d798-5562-4443-8e55-656298649231)


MODULE | Pico
------------ | -------------
Description | Pico content management module for XCL
Render Engine | Smarty v2 and XCube Layout
Version | 2.45.0
Author | Nobuhiro Yasutomi @nbuy XCL PHP8  
Author | Nuno Luciano @gigamaster XCL PHP7 
Author | Original by Gijoe (https://peak.ne.jp/)
Copyright | 2005-2024 Authors
License | GPL


##### :computer: The Minimum Requirements



          Apache, Nginx, etc. PHP 8.x.x
          MySQL 5.7.x, MariaDB  InnoDB utf8 / utf8mb4
          XCL version 2.4.0



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
