// NSD_64bit.c
// $Date: 2009-02-17 21:22:13 +0100 (Di, 17. Feb 2009) $
// $Revision: 5 $
// $Id: NSD_64bit.c 5 2009-02-17 20:22:13Z jlachmann $


#include <exec/exec.h>
#include <devices/newstyle.h>
#include <proto/exec.h>

BOOL checkfor64bitcommandset(struct IOStdReq *io)
{
	// struct IOStdReq io = { };

	struct NSDeviceQueryResult nsdqr; 	// +jmc+ { } ??;
	LONG error;				// +jmc+ = 0
	// BOOL newstyle = FALSE;
	BOOL does64bit = FALSE;
	UWORD *cmdcheck;

	// newstyle = FALSE;
	nsdqr.SizeAvailable  = 0;
	nsdqr.DevQueryFormat = 0;

	io->io_Command = NSCMD_DEVICEQUERY;
	io->io_Length  = sizeof(nsdqr);
	io->io_Data    = (APTR)&nsdqr;
	error = DoIO((struct IORequest *)io);
	if ((!error) && (io->io_Actual >= 16) &&
		(nsdqr.SizeAvailable == io->io_Actual) &&
		(nsdqr.DeviceType == NSDEVTYPE_TRACKDISK))
		{
		// Ok, this must be a new style trackdisk device
		// newstyle = TRUE;

		// Is it safe to use 64 bits with this driver? We can reject
		// bad mounts pretty easily via this check!

		for(cmdcheck = nsdqr.SupportedCommands; *cmdcheck; cmdcheck++)
		if(*cmdcheck == NSCMD_TD_READ64)
			does64bit = TRUE;
			// This trackdisk style device supports the complete
			// 64 bit command set without returning IOERR_NOCMD!
		}
	return(does64bit);
}
