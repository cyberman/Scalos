// Scalos_rev.h
// $Date: 2010-03-17 20:26:03 +0100 (Mi, 17. MÃ¤r 2010) $
// $Revision: 533 $

#ifndef	SCALOSREV_H
#define SCALOSREV_H


#include <Year.h>

#define VERSION			41
#define REVISION		8
#define	VERS_REV_STR            STR(VERSION) "." STR(REVISION)
#define	RELEASE			"1.9"
#define	BUILDNR			STR(SVN_VERSION)
#define DATE			"17.03.2010"
#define VERSTAG			"\00$VER: Scalos " VERS_REV_STR " release " RELEASE " (" DATE ") " "build " BUILDNR " " COMPILER_STRING
#define	COPYRIGHT		"\n © 1999" CURRENTYEAR " The Scalos Team\n"

#endif /* SCALOSREV_H */

