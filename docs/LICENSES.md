# Licenses (Scalos323 workspace)

This repository is a *multi-license* workspace. Licensing is defined per component.

Primary upstream license reference:
- `vendor/scalos-svn/LEGAL`

## Scalos (majority)
- License: BSD 2-Clause
- Source: `vendor/scalos-svn/LEGAL` (top section)

## Components with different licenses

### Modules/Delete.MUI
- License: GNU GPL v3
- Sources:
  - `vendor/scalos-svn/LEGAL`
  - `vendor/scalos-svn/gpl-3.0.txt`

### Plugins/Preview/Video
- License: GNU LGPL v3 (plugin component)
- Notes: The plugin links against LGPL libraries (libavcodec/libavformat/libavutil).
- Sources:
  - `vendor/scalos-svn/LEGAL`
  - `vendor/scalos-svn/lgpl-3.0.txt`
  - `vendor/scalos-svn/Plugins/Preview/Video/COPYING`

### popupmenu.library
- License status: included by permission of the original author (Henrik Isaksson).
- Source:
  - `vendor/scalos-svn/LEGAL`
  - `vendor/scalos-svn/libraries/popupmenu/LICENSE`

## Third-party notices referenced by Scalos LEGAL

### libppm dithering code
- License: permissive (permission to use/copy/modify/distribute with notice).
- Source: `vendor/scalos-svn/LEGAL` (libppm section)

### libcurl (Updater.module)
- License: permissive (as quoted in LEGAL).
- Source: `vendor/scalos-svn/LEGAL` (libCURL section)

### AmiSSL / OpenSSL / SSLeay
- License: AmiSSL stated as freeware; OpenSSL + SSLeay license texts are included.
- Source: `vendor/scalos-svn/LEGAL` (AmiSSL/OpenSSL/SSLeay sections)

## Notices found in shipped headers

### SQLite header
- License: Public Domain / copyright disclaimer (per header comment).
- Source: `vendor/scalos-svn/include/sqlite3.h`

### openurl.library proto header
- License: Public Domain (per header comment).
- Source: `vendor/scalos-svn/include/proto/openurl.h`

### IJG JPEG header
- Notice: header refers to an accompanying IJG README for distribution/use conditions, but no such README is shipped in this tree.
- Source: `vendor/scalos-svn/include/jpeglib.h`
