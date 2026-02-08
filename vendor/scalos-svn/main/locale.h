// locale.h
// $Date: 2011-07-23 21:49:40 +0200 (Sa, 23. Jul 2011) $
// $Revision: 803 $

#ifndef LOCALE_H
#define LOCALE_H

struct Scalos_LocaleInfo
{
	APTR li_LocaleBase;
	APTR li_Catalog;
	struct LocaleIFace *li_ILocale;
};

CONST_STRPTR      GetLocString(LONG lStrnum);

#define	Scalos_NUMBERS
#include STR(SCALOSLOCALE)


#endif

