// plugin_data.h
// $Date: 2009-12-19 13:35:37 +0100 (Sa, 19. Dez 2009) $
// $Revision: 386 $

#ifndef PLUGIN_DATA_H_INCLUDED
#define PLUGIN_DATA_H_INCLUDED

#include <defs.h>
#include <Year.h>

#define PLUGIN_TYPE	PREFS

#define	LIB_VERSION	40
#define	LIB_REVISION	21

#define LIB_NAME	"Pattern.prefsplugin"
#define LIB_VERSTRING   "$VER: " LIB_NAME " " \
			STR(LIB_VERSION) "." STR(LIB_REVISION)  \
			" " __DATE__  \
			COMPILER_STRING " ©2003" CURRENTYEAR \
			" The Scalos Team"

//----------------------------------------------------------------------------
// code and includes to define the structs and functions used above

#endif /* PLUGUN_DATA_H_INCLUDED */

