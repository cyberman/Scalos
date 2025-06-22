// loaddt.h
// $Date: 2009-02-17 21:22:13 +0100 (Di, 17. Feb 2009) $
// $Revision: 5 $

//--------------------------------------------------------------------------------

extern struct Library *DataTypesBase;

//--------------------------------------------------------------------------------

struct ScalosBitMapAndColor *DoLoadDT(STRPTR source, struct RastPort *rast,
	ULONG ScaledWidth, ULONG ScaledHeight,
	struct Screen *screen);
void ShowError(const char *str, ...);

//--------------------------------------------------------------------------------

extern int KPrintF(const char *fmt, ...);

//--------------------------------------------------------------------------------

