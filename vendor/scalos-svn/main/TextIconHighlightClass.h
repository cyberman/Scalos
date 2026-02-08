// TextIconHighlightClass.h
// $Date: 2009-09-15 13:13:46 +0200 (Di, 15. Sep 2009) $
// $Revision: 234 $


#ifndef	TEXTICONHIGHLIGHTCLASS_H
#define	TEXTICONHIGHLIGHTCLASS_H

//----------------------------------------------------------------------------

#define	TIH_TagBase        	(TAG_USER + 0x91c70)

#define	TIHA_BaseColor		(TIH_TagBase + 1)  	// [ISG] (const struct ARGB *) Base color for ARGB highlight
#define TIHA_Radius             (TIH_TagBase + 2)	// [ISG] (ULONG) Radius of highlight corners
#define TIHA_Transparency       (TIH_TagBase + 3)	// [ISG] (ULONG) Transparency for selection marker

//----------------------------------------------------------------------------

#endif	/* TEXTICONHIGHLIGHTCLASS_H */
