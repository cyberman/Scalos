// Execute_Command.h
// $Date: 2011-07-23 21:49:40 +0200 (Sa, 23. Jul 2011) $
// $Revision: 803 $


#ifndef EXECUTE_COMMAND_H
#define	EXECUTE_COMMAND_H

#define d1(x)		;
#define d2(x)		x;


extern int kprintf(CONST_STRPTR, ...);
extern int KPrintF(CONST_STRPTR, ...);

struct Execute_Command_LocaleInfo
{
	APTR li_LocaleBase;
	APTR li_Catalog;
	struct LocaleIFace *li_ILocale;
};

#endif	/* EXECUTE_COMMAND_H */
