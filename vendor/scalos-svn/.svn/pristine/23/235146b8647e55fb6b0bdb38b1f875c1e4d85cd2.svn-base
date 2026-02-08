#ifndef _PPCINLINE_SCALOSMENUPLUGIN_H
#define _PPCINLINE_SCALOSMENUPLUGIN_H

#ifndef CLIB_SCALOSMENUPLUGIN_PROTOS_H
#define CLIB_SCALOSMENUPLUGIN_PROTOS_H
#endif

#ifndef __PPCINLINE_MACROS_H
#include <ppcinline/macros.h>
#endif

#ifndef  SCALOS_SCALOS_H
#include <scalos/scalos.h>
#endif

#ifndef SCALOSMENUPLUGIN_BASE_NAME
#define SCALOSMENUPLUGIN_BASE_NAME ScalosMenuPluginBase
#endif

#define SCAMenuFunction(wt, in) \
	LP2NR(0x1e, SCAMenuFunction, struct ScaWindowTask *, wt, a0, struct ScaIconNode *, in, a1, \
	, SCALOSMENUPLUGIN_BASE_NAME, IF_CACHEFLUSHALL, NULL, 0, IF_CACHEFLUSHALL, NULL, 0)

#endif /*  _PPCINLINE_SCALOSMENUPLUGIN_H  */
