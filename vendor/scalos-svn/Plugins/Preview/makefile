# makefile for Scalos FileTypes plugins
# $Date: 2010-04-16 22:49:51 +0200 (Fr, 16. Apr 2010) $
# $Revision: 572 $

#############################################################

SUBDIRS =	DefPicture \
		JpegPicture \
		PNGPicture \
                Video \

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
