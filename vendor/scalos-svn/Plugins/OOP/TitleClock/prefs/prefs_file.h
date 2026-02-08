/*
 *  prefs_file.h
 *
 * $Date: 2009-02-17 21:22:13 +0100 (Di, 17. Feb 2009) $
 * $Revision: 5 $
 *
 *  20010716 DM Created. Will be used by prefs and plugin programs.
 *              Headers for functions to read and write prefs files.
 *
 */

#ifndef PREFS_FILE_H
#define PREFS_FILE_H

#include <exec/types.h>

#define SAVENAME "ENVARC:Scalos/title_clock.prefs"
#define USENAME "ENV:Scalos/title_clock.prefs"

LONG ReadPrefsFile(CONST_STRPTR file, STRPTR datefmt, ULONG datelen, STRPTR timefmt, ULONG timelen);
LONG WritePrefsFile(CONST_STRPTR file, CONST_STRPTR datefmt, CONST_STRPTR timefmt);

LONG LoadPrefs(STRPTR datefmt, ULONG datelen, STRPTR timefmt, ULONG timelen);
LONG SavePrefs(CONST_STRPTR datefmt, CONST_STRPTR timefmt);
LONG UsePrefs(CONST_STRPTR datefmt, CONST_STRPTR timefmt);

BOOL StartPrefsNotify(struct NotifyRequest *notify);
void EndPrefsNotify(struct NotifyRequest *notify);

#endif /* PREFS_FILE_H */

