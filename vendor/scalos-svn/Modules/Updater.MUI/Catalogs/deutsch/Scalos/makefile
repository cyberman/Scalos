# makefile for Updater.module (translated Texts : deutsch)
# $Date: 2009-11-13 17:27:08 +0100 (Fr, 13. Nov 2009) $

.SUFFIXES: .ct .catalog

.ct.catalog :
	@printf '\033[32mMake catalog: \033[31m\033[1mdeutsch\033[0m\n'
	CatComp ///$*.cd $*.ct CATALOG $*.catalog VB=2
	avail flush

Updater.catalog : Updater.ct ../../../Updater.cd

All: Updater.catalog
