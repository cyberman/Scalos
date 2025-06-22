/*
 *  misc.h - routines for misc stuff
 *
 * $Date: 2012-08-10 13:47:28 +0200 (Fr, 10. Aug 2012) $
 * $Revision: 915 $
 *
 *  0.1
 *  20010718 DM Created. Added routines for calculating length of a string in a given font (ignoring underscores) and the longest in an array of values
 *
 */

#ifndef MISC_H
#define MISC_H

WORD USTextLength(CONST_STRPTR string, struct TextFont *tf);
WORD MaxLen(int count, ...);

extern int KPrintF(CONST_STRPTR fmt, ...);

#define	d1(x)		;
#define	d2(x)		x;

#endif /* MISC_H */

