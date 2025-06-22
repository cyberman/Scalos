# makefile for FormatDisk.ct (translated Texts : français)
# $Date: 2009-02-17 21:22:13 +0100 (Di, 17. Feb 2009) $
# $Revision: 5 $
# $Id: makefile 5 2009-02-17 20:22:13Z jlachmann $

.SUFFIXES: .ct .catalog

.ct.catalog :
	@printf '\033[32mMake catalog: \033[31m\033[1mfrançais\033[0m\n'
	CatComp ///$*.cd $*.ct CATALOG $*.catalog VB=2
	avail flush

FormatDisk.catalog : FormatDisk.ct ../../../FormatDisk.cd

All: FormatDisk.catalog 
