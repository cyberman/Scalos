// ExifPicture_base.h
// $Date: 2009-02-17 21:22:13 +0100 (Di, 17. Feb 2009) $
// $Revision: 5 $

#ifndef __EXIFPICTURE_BASE
#define __EXIFPICTURE_BASE

#include <libraries/locale.h>

#include "plugin.h"

struct ExifPictureBase
{
	struct PluginBase pdb_PluginBase;

	struct	Locale *pdb_Locale;
	struct	Catalog *pdb_Catalog;
};

#endif //__EXIFPICTURE_BASE

