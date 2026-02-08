//
// pmtypes.h
//
// OS independent exec/types.h equivalent
//
// $Date: 2009-12-10 19:30:54 +0100 (Do, 10. Dez 2009) $
// $Revision: 371 $
//

#ifndef PM_TYPES_H
#define PM_TYPES_H

#define AMIGA 1

#ifdef AMIGA

#include <exec/types.h>

#else

typedef unsigned long ULONG;
typedef long LONG;

typedef unsigned short UWORD;
typedef short WORD;

typedef unsigned char UBYTE;
typedef char BYTE;

typedef char BOOL;

typedef char * STRPTR;

#define TRUE	1
#define FALSE	0

#endif

#endif /* PM_TYPES_H */
