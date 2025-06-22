// scalos/PictureDimensions.h
// $Date: 2009-02-17 21:22:13 +0100 (Di, 17. Feb 2009) $
// $Revision: 5 $

#ifndef __PICTUREDIMENSIONS_BASE_H
#define __PICTUREDIMENSIONS_BASE_H

#include <libraries/locale.h>

#include "plugin.h"

struct PictureDimensionsBase
{
	struct PluginBase pdb_PluginBase;

	struct	Locale *pdb_Locale;
	struct	Catalog *pdb_Catalog;
};

#endif // __PICTUREDIMENSIONS_BASE_H

