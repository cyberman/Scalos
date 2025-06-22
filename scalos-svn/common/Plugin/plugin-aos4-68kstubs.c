// plugin-aos4-68kstubs.c
// $Date: 2009-02-17 21:22:13 +0100 (Di, 17. Feb 2009) $
// $Revision: 5 $

#include "plugin.h"

#if PLUGIN_TYPE == OOP
#include "scalosplugin-aos4-68kstubs.c"
#elif PLUGIN_TYPE == FILETYPE
#include "scalosfiletypeplugin-aos4-68kstubs.c"
#elif PLUGIN_TYPE == PREVIEW
#include "scalospreviewplugin-aos4-68kstubs.c"
#elif PLUGIN_TYPE == PREFS
#include "scalosprefsplugin-aos4-68kstubs.c"
#else
#error Unsupported plugin type
#endif

