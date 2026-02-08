// DrawerContents.h
// $Date: 2009-02-17 21:22:13 +0100 (Di, 17. Feb 2009) $
// $Revision: 5 $

#ifndef __DRAWERCONTENTS_BASE_H
#define __DRAWERCONTENTS_BASE_H

#include <libraries/locale.h>

#include "plugin.h"

struct DrawerContentsBase
{
	struct PluginBase dcb_LibNode;

	struct	Locale *dcb_Locale;
	struct	Catalog *dcb_Catalog;
};

#endif // __DRAWERCONTENTS_BASE_H

