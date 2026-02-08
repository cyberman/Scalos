// HiddenDevices.h
// $Date: 2009-02-17 21:22:13 +0100 (Di, 17. Feb 2009) $
// $Revision: 5 $


#ifndef HIDDENDEVICES_H
#define HIDDENDEVICES_H

//-----------------------------------------------------------------

#include "ScalosPrefs.h"

//-----------------------------------------------------------------

BOOL HiddenDevicesInit(void);
void HiddenDevicesCleanup(void);
void FillHiddenDevicesList(struct SCAModule *app);
BOOL ReadWorkbenchPrefs(CONST_STRPTR filename);
LONG WriteWorkbenchPrefs(CONST_STRPTR filename);
BOOL AddHiddenDevice(CONST_STRPTR Name);
BOOL RemoveHiddenDevice(CONST_STRPTR Name);

//-----------------------------------------------------------------

#define getv(o,a) mui_getv(o,a)

//-----------------------------------------------------------------

#endif /* HIDDENDEVICES_H */
