// Pattern.c
// $Date: 2011-08-06 19:37:48 +0200 (Sa, 06. Aug 2011) $
// $Revision: 823 $

//----------------------------------------------------------------------------

#undef	d1
#undef	d2

#define	d1(x)	;
#define	d2(x)	x;

// from debug.lib
extern int kprintf(const char *fmt, ...);
extern int KPrintF(const char *fmt, ...);

struct ScalosPattern_LocaleInfo
{
	APTR li_LocaleBase;
	APTR li_Catalog;
	struct LocaleIFace *li_ILocale;
};

//----------------------------------------------------------------------------

