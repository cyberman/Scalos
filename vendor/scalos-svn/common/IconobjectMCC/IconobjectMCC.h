// IconobjectMCC.h
// $Date: 2011-07-12 02:12:04 +0200 (Di, 12. Jul 2011) $
// $Revision: 772 $


#ifndef ICONOBJECT_MCC_H
#define	ICONOBJECT_MCC_H

/* ------------------------------------------------------------------------- */

struct MUI_CustomClass *InitIconobjectClass(void);
void CleanupIconobjectClass(struct MUI_CustomClass *mcc);

/* ------------------------------------------------------------------------- */

#ifdef __AROS__
#define IconobjectMCCObject BOOPSIOBJMACRO_START(IconobjectClass->mcc_Class)
#else
#define IconobjectMCCObject NewObject(IconobjectClass->mcc_Class, 0
#endif

/* ------------------------------------------------------------------------- */

#define MUIA_Iconobj_Object			0x80429876 	/* I.. Object * */

/* ------------------------------------------------------------------------- */

#endif /* ICONOBJECT_MCC_H */
