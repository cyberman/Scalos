#ifndef _PPCINLINE_SCALOSPREVIEWPLUGIN_H
#define _PPCINLINE_SCALOSPREVIEWPLUGIN_H

#ifndef CLIB_SCALOSPREVIEWPLUGIN_PROTOS_H
#define CLIB_SCALOSPREVIEWPLUGIN_PROTOS_H
#endif

#ifndef __PPCINLINE_MACROS_H
#include <ppcinline/macros.h>
#endif

#ifndef  SCALOS_SCALOS_H
#include <scalos/scalos.h>
#endif
#ifndef  UTILITY_TAGITEM_H
#include <utility/tagitem.h>
#endif

#ifndef SCALOSPREVIEWPLUGIN_BASE_NAME
#define SCALOSPREVIEWPLUGIN_BASE_NAME ScalosPreviewPluginBase
#endif

#define SCAPreviewGenerate(wt, dirLock, iconName, tagList) \
	LP4(0x1e, LONG, SCAPreviewGenerate, struct ScaWindowTask *, wt, a0, BPTR, dirLock, a1, CONST_STRPTR, iconName, a2, struct TagItem *, tagList, a3, \
	, SCALOSPREVIEWPLUGIN_BASE_NAME, IF_CACHEFLUSHALL, NULL, 0, IF_CACHEFLUSHALL, NULL, 0)

#ifndef NO_PPCINLINE_STDARG
#define SCAPreviewGenerateTags(wt, dirLock, iconName, tags...) \
	({ULONG _tags[] = {tags}; SCAPreviewGenerate((wt), (dirLock), (iconName), (struct TagItem *) _tags);})
#endif

#endif /*  _PPCINLINE_SCALOSPREVIEWPLUGIN_H  */
