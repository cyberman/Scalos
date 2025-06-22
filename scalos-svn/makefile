# makefile for all Scalos components
# $Date: 2009-03-12 21:29:22 +0100 (Do, 12. Mär 2009) $
# $Revision: 95 $
# $Id: makefile 95 2009-03-12 20:29:22Z jlachmann $
#############################################################
 
SUBDIRS =	main \
		Prefs \
		Plugins \
		datatypes \
		libraries \
		modules \

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
