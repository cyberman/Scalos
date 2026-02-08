# makefile for Scalos_Prefs (translated Texts : français)
# $Date: 2009-02-21 19:11:56 +0100 (Sa, 21. Feb 2009) $

.SUFFIXES: .ct .catalog

.ct.catalog :
	@printf '\033[32mMake catalog: \033[31m\033[1mfrançais\033[0m\n'
	CatComp ///$*.cd $*.ct CATALOG $*.catalog VB=2
	avail flush

Scalos_Prefs.catalog : Scalos_Prefs.ct ../../../Scalos_Prefs.cd

All: Scalos_Prefs.catalog
