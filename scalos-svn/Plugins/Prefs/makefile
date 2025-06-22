# makefile for Scalos prefs plugins
# $Date: 2006-11-26 16:13:59 +0200 (So, 26 Nov 2006) $
# $Revision: 2043 $

#############################################################

SUBDIRS =	FileTypes \
		Palette \
		Pattern \
		Menu \
		Popupmenu \

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

All:
	@$(foreach subdir,$(SUBDIRS),$(call build_subdir,$(subdir)))

#############################################################

install:
	@$(foreach subdir,$(SUBDIRS),$(call install_subdir,$(subdir)))

#############################################################

clean:
	@$(foreach subdir,$(SUBDIRS),$(call clean_subdir,$(subdir)))

#############################################################
