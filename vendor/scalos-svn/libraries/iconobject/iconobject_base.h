// iconobject_base.h
// $Date: 2010-04-11 14:29:26 +0200 (So, 11. Apr 2010) $
// $Revision: 553 $


#ifndef ICONOBJBASE_H
#define	ICONOBJBASE_H

#include <exec/types.h>
#include <exec/lists.h>
#include <exec/libraries.h>
#include <exec/semaphores.h>

struct IconObjectBase
{
	struct Library iob_LibNode;

	struct SegList *iob_SegList;

	APTR iob_AmigaIcon;
	struct SignalSemaphore  iob_Semaphore;

	struct List iob_ClassList;

	BPTR iob_dtPathLock;

	UWORD iob_pad;
};

#endif /* ICONOBJBASE_H */
