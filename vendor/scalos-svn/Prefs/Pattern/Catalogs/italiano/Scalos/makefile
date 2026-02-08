# makefile for Scalos (translated Texts : italiano)
# $Date: 2009-02-17 21:22:13 +0100 (Di, 17. Feb 2009) $

.SUFFIXES: .ct .catalog

.ct.catalog :
	@printf '\033[32mMake catalog: \033[31m\033[1mitaliano\033[0m\n'
	CatComp ///$*.cd $*.ct CATALOG $*.catalog VB=2
	avail flush

ScalosPattern.catalog : ScalosPattern.ct ../../../ScalosPattern.cd

All: ScalosPattern.catalog
