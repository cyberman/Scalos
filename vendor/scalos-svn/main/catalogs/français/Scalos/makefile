# makefile for Scalos (translated Texts français)
# $Date: 2010-05-15 13:58:58 +0200 (Sa, 15. Mai 2010) $
# $Revision: 617 $

.SUFFIXES: .ct .catalog

all: scalos.catalog

scalos.catalog : scalos.ct ../../../scalos.cd
	@printf '\033[32mMake catalog: \033[31m\033[1mFrançais \033[0m\n'
	CatComp ///scalos.cd scalos.ct CATALOG $@ VB=2
	@avail flush
