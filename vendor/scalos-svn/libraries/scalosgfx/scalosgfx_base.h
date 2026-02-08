// scalosgfx_base.h
// $Date: 2009-02-17 21:22:13 +0100 (Di, 17. Feb 2009) $
// $Revision: 5 $


#ifndef SCALOSGFXBASE_H
#define	SCALOSGFXBASE_H

#include <exec/types.h>
#include <exec/lists.h>
#include <exec/libraries.h>


struct ScalosGfxBase
{
	struct Library sgb_LibNode;

	struct SegList *sgb_SegList;

	BOOL sgb_Initialized;

	struct SignalSemaphore sgb_MemPoolSemaphore;
	APTR sgb_MemPool;

	struct SignalSemaphore sgb_PrefsListSem;
	struct List sgb_PrefsList;
};

//----------------------------------------------------------------------------

#endif /* SCALOSGFXBASE_H */
