// int64types.h
// $Date: 2010-01-16 21:36:06 +0100 (Sa, 16. Jan 2010) $
// $Revision: 448 $

#ifndef SCALOS_INT64TYPES_H
#define SCALOS_INT64TYPES_H

#include <exec/types.h>
#include <exec/ports.h>
#include <dos/dos.h>
#include <dos/dosextens.h>
#include <dos/exall.h>
#include <libraries/locale.h>

#ifdef __GNUC__

typedef	unsigned long long ULONG64;
typedef	signed long long SLONG64;

// Macros to acccess one of the longs of an ULONG64
#define	ULONG64_LOW(long64)	((ULONG) ((long64) & 0xffffffff))
#define	ULONG64_HIGH(long64)	((ULONG) (((long64) >> 32) & 0xffffffff))

#define	SLONG64_LOW(long64)	((SLONG) ((long64) & 0xffffffff))
#define	SLONG64_HIGH(long64)	((SLONG) (((long64) >> 32) & 0xffffffff))

#else /* __GNUC__ */

typedef	struct { ULONG High, Low; } ULONG64;
typedef	struct { LONG High; ULONG Low; } SLONG64;


// Macros to acccess one of the longs of an ULONG64
#define	ULONG64_LOW(long64)	((long64).Low)
#define	ULONG64_HIGH(long64)	((long64).High)

#define	SLONG64_LOW(long64)	((long64).Low)
#define	SLONG64_HIGH(long64)	((long64).High)

#endif /* __GNUC__ */

#endif	// SCALOS_INT64TYPES_H
