# makefile for FormatDisk.module (translated Texts : français)
# $Date: 2008-10-03 13:54:39 +0200 (Fr, 03 Okt 2008) $
# $Revision: 2886 $

.SUFFIXES: .ct .catalog

.ct.catalog :
	@printf '\033[32mMake catalog: \033[31m\033[1mfrançais\033[0m\n'
	CatComp ///$*.cd $*.ct CATALOG $*.catalog VB=2
	avail flush

FormatDiskMUI.catalog : FormatDiskMUI.ct ../../../FormatDisk.cd

All: FormatDiskMUI.catalog
