// ScalosMcpGfx.c
// $Date: 2009-02-17 21:22:13 +0100 (Di, 17. Feb 2009) $
// $Revision: 5 $


#ifndef SCALOS_MCPGFX_H
#define	SCALOS_MCPGFX_H

#include <libraries/mcpgfx.h>

/* ------------------------------------------------------------------------- */

void McpGfxRectFill(struct RastPort *rp,
	UWORD MinX, WORD MinY, WORD MaxX, WORD MaxY, ULONG FirstTag, ...);
void McpGfxDrawFrame(struct RastPort *rp,
	UWORD MinX, WORD MinY, WORD MaxX, WORD MaxY, ULONG FirstTag, ...);
const struct FrameSize *McpGetFrameSize(UWORD frameType);

/* ------------------------------------------------------------------------- */

#endif /* SCALOS_MCPGFX_H */
