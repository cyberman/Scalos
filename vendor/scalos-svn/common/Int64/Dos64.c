// Dos64.c
// $Date: 2010-01-23 16:14:51 +0100 (Sa, 23. Jan 2010) $

/***********************************************************************
*
* Function:
*        64-bit File operations
*
***********************************************************************/

#include <exec/types.h>
#include <dos/exall.h>
#include <dos/dosextens.h>
#include <stdio.h>
#include <string.h>
#include <stdlib.h>

#define	__USE_SYSBASE

#include <proto/dos.h>

#include "int64.h"

/***********************************************************************
*        Public Routines
***********************************************************************/

ULONG64 ScalosExAllSize64(const struct ExAllData *ead, ULONG edType)
{
#if defined(__MORPHOS__) && defined(ACTION_EXAMINE_NEXT64)
	if (DOSBase->dl_lib.lib_Version >= 51 && edType >= ED_SIZE64)
		return ead->ed_Size64;
#endif /* __MORPHOS__ */

	return MakeU64(ead->ed_Size);
}


