// HistoryGadgetClass.h
// $Date: 2009-02-17 21:22:13 +0100 (Di, 17. Feb 2009) $
// $Revision: 5 $

#ifndef HISTORYGADGETCLASS_H
#define HISTORYGADGETCLASS_H


/* Tags for History Gadget class */

#define	SCAHISTORY_TagBase	(TAG_USER + 0x91c00)

#define	SCAHISTORY_Active	(SCAHISTORY_TagBase + 1)  // [ISG] (struct Node *) Node of active label
#define	SCAHISTORY_Labels	(SCAHISTORY_TagBase + 2)  // [I..] (struct List *) List label nodes

#endif /* HISTORYGADGETCLASS_H */

