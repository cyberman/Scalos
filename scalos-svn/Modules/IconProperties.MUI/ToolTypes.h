// ToolTypes.h
// $Date: 2009-12-17 18:38:20 +0100 (Do, 17. Dez 2009) $
// $Revision: 381 $


#ifndef TOOLTYPES_H
#define	TOOLTYPES_H

//----------------------------------------------------------------------------

LONG SetToolType(Object *iconObj, CONST_STRPTR ToolTypeName, CONST_STRPTR ToolTypeValue);
LONG RemoveToolType(Object *iconObj, CONST_STRPTR ToolTypeName);
STRPTR *CloneToolTypeArray(CONST_STRPTR *ToolTypeArray, ULONG AdditionalEntries);
LONG CmpToolTypeArrays(CONST_STRPTR *ToolTypeArray1, CONST_STRPTR *ToolTypeArray2);

//----------------------------------------------------------------------------

#endif /* TOOLTYPES_H */
