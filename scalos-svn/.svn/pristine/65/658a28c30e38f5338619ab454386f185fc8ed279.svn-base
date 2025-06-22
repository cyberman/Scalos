#ifndef _PPCINLINE_ICONOBJECT_H
#define _PPCINLINE_ICONOBJECT_H

#ifndef CLIB_ICONOBJECT_PROTOS_H
#define CLIB_ICONOBJECT_PROTOS_H
#endif

#ifndef __PPCINLINE_MACROS_H
#include <ppcinline/macros.h>
#endif

#ifndef  INTUITION_CLASSUSR_H
#include <intuition/classusr.h>
#endif
#ifndef  WORKBENCH_WORKBENCH_H
#include <workbench/workbench.h>
#endif

#ifndef ICONOBJECT_BASE_NAME
#define ICONOBJECT_BASE_NAME IconobjectBase
#endif

#define NewIconObject(name, tagList) \
	LP2(0x1e, Object *, NewIconObject, CONST_STRPTR, name, a0, CONST struct TagItem *, tagList, a1, \
	, ICONOBJECT_BASE_NAME, IF_CACHEFLUSHALL, NULL, 0, IF_CACHEFLUSHALL, NULL, 0)

#ifndef NO_PPCINLINE_STDARG
#define NewIconObjectTags(name, tags...) \
	({ULONG _tags[] = {tags}; NewIconObject((name), (CONST struct TagItem *) _tags);})
#endif

#define DisposeIconObject(iconObject) \
	LP1NR(0x24, DisposeIconObject, Object *, iconObject, a0, \
	, ICONOBJECT_BASE_NAME, IF_CACHEFLUSHALL, NULL, 0, IF_CACHEFLUSHALL, NULL, 0)

#define GetDefIconObject(iconType, tagList) \
	LP2(0x2a, Object *, GetDefIconObject, ULONG, iconType, d0, CONST struct TagItem *, tagList, a0, \
	, ICONOBJECT_BASE_NAME, IF_CACHEFLUSHALL, NULL, 0, IF_CACHEFLUSHALL, NULL, 0)

#ifndef NO_PPCINLINE_STDARG
#define GetDefIconObjectTags(iconType, tags...) \
	({ULONG _tags[] = {tags}; GetDefIconObject((iconType), (CONST struct TagItem *) _tags);})
#endif

#define PutIconObject(iconObject, path, tagList) \
	LP3(0x30, LONG, PutIconObject, Object *, iconObject, a0, CONST_STRPTR, path, a1, CONST struct TagItem *, tagList, a2, \
	, ICONOBJECT_BASE_NAME, IF_CACHEFLUSHALL, NULL, 0, IF_CACHEFLUSHALL, NULL, 0)

#ifndef NO_PPCINLINE_STDARG
#define PutIconObjectTags(iconObject, path, tags...) \
	({ULONG _tags[] = {tags}; PutIconObject((iconObject), (path), (CONST struct TagItem *) _tags);})
#endif

#define IsIconName(fileName) \
	LP1(0x36, ULONG, IsIconName, CONST_STRPTR, fileName, a0, \
	, ICONOBJECT_BASE_NAME, IF_CACHEFLUSHALL, NULL, 0, IF_CACHEFLUSHALL, NULL, 0)

#define Convert2IconObject(diskObject) \
	LP1(0x3c, Object *, Convert2IconObject, struct DiskObject *, diskObject, a0, \
	, ICONOBJECT_BASE_NAME, IF_CACHEFLUSHALL, NULL, 0, IF_CACHEFLUSHALL, NULL, 0)

#define Convert2IconObjectA(diskObject, tagList) \
	LP2(0x42, Object *, Convert2IconObjectA, struct DiskObject *, diskObject, a0, CONST struct TagItem *, tagList, a1, \
	, ICONOBJECT_BASE_NAME, IF_CACHEFLUSHALL, NULL, 0, IF_CACHEFLUSHALL, NULL, 0)

#ifndef NO_PPCINLINE_STDARG
#define Convert2IconObjectTags(diskObject, tags...) \
	({ULONG _tags[] = {tags}; Convert2IconObjectA((diskObject), (CONST struct TagItem *) _tags);})
#endif

#endif /*  _PPCINLINE_ICONOBJECT_H  */
