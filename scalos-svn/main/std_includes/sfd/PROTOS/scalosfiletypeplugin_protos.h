#ifndef  CLIB_SCALOSFILETYPEPLUGIN_PROTOS_H
#define  CLIB_SCALOSFILETYPEPLUGIN_PROTOS_H

/*
**	$Id: scalosfiletypeplugin_protos.h 1.3 2006/04/26 19:03:48 juergen Exp $
**
**	C prototypes. For use with 32 bit integers only.
**
**	Copyright © 2001 Amiga, Inc.
**	    All Rights Reserved
*/

#ifdef __cplusplus
extern "C" {
#endif /* __cplusplus */

#ifndef  SCALOS_SCALOS_H
#include <scalos/scalos.h>
#endif
STRPTR SCAToolTipInfoString( struct ScaToolTipInfoHookData *ttshd, CONST_STRPTR args );

#ifdef __cplusplus
}
#endif /* __cplusplus */

#endif   /* CLIB_SCALOSFILETYPEPLUGIN_PROTOS_H */
