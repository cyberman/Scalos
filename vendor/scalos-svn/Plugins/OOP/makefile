# makefile for Scalos OOP plugins
# $Date: 2009-02-17 21:22:13 +0100 (Di, 17. Feb 2009) $
# $Revision: 5 $

#############################################################

SUBDIRS =	DeviceFilter \
		TitleClock \
		title_freepens \
		title_envvar \
		title_test \
		wb39_plugin \
		XTWindows \

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
