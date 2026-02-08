# makefile für Scalos IconObject library (C-Version)
# $Date: 2009-02-17 21:22:13 +0100 (Di, 17. Feb 2009) $
# $Revision: 5 $
# $Id: makefile 5 2009-02-17 20:22:13Z jlachmann $

#############################################################

SUBDIRS =	preferences 	\
		sqlite		\
		scalosgfx 	\
                iconobject 	\
                popupmenu	\

#############################################################

.PHONY: All install clean

#############################################################

define build_subdir
$(MAKE) -s --directory=$(1);
endef

define install_subdir
$(MAKE) -s install --directory=$(1);
endef

define clean_subdir
$(MAKE) -s clean --directory=$(1);
endef

#############################################################

all:
	@$(foreach subdir,$(SUBDIRS),$(call build_subdir,$(subdir)))

#############################################################

install:
	@$(foreach subdir,$(SUBDIRS),$(call install_subdir,$(subdir)))

#############################################################

clean:
	@$(foreach subdir,$(SUBDIRS),$(call clean_subdir,$(subdir)))

#############################################################
