// plugin_data.h
// $Date: 2010-01-01 23:47:18 +0100 (Fr, 01. Jan 2010) $
// $Revision: 419 $

#ifndef PLUGIN_DATA_H_INCLUDED
#define PLUGIN_DATA_H_INCLUDED

#include <defs.h>
#include <Year.h>

#define PLUGIN_TYPE	PREFS

#define	LIB_VERSION	40
#define	LIB_REVISION	2

#define LIB_NAME	"PopupMenu.prefsplugin"
#define LIB_VERSTRING   "$VER: " LIB_NAME " " \
			STR(LIB_VERSION) "." STR(LIB_REVISION)  \
			" " __DATE__ " " \
			COMPILER_STRING " ©2006" CURRENTYEAR \
			" The Scalos Team"

//----------------------------------------------------------------------------
// code and includes to define the structs and functions used above

#endif /* PLUGUN_DATA_H_INCLUDED */

