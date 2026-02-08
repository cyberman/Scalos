// SelectMarkSampleClass.h
// $Date: 2009-09-15 13:13:46 +0200 (Di, 15. Sep 2009) $
// $Revision: 234 $


#ifndef SELECTMARK_SAMPLECLASS_H
#define SELECTMARK_SAMPLECLASS_H

//----------------------------------------------------------------------------

#include <defs.h>

//----------------------------------------------------------------------------

struct MUI_CustomClass *InitSelectMarkSampleClass(void);
void CleanupSelectMarkSampleClass(struct MUI_CustomClass *mcc);

//----------------------------------------------------------------------------

extern struct MUI_CustomClass *SelectMarkSampleClass;

//----------------------------------------------------------------------------

#define	TIH_TagBase        	(TAG_USER + 0x91c70)

#define	TIHA_BaseColor		(TIH_TagBase + 1)  	// [ISG] (const struct ARGB *) Base color for ARGB highlight
#define TIHA_Radius             (TIH_TagBase + 2)	// [ISG] (ULONG) Radius of highlight corners
#define TIHA_Transparency       (TIH_TagBase + 3)	// [ISG] (ULONG) Transparency for selection marker
#define TIHA_DemoString         (TIH_TagBase + 4)	// [ISG] (CONST_STRPTR) sample string

//----------------------------------------------------------------------------

#endif /* SELECTMARK_SAMPLECLASS_H */
