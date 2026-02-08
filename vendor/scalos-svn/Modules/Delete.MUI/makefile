# makefile for Scalos delete.MUI module
# $Date: 2009-02-17 21:22:13 +0100 (Di, 17. Feb 2009) $

#############################################################

SUBDIRS =	Source \

#############################################################

.PHONY: All install clean

#############################################################

All:
	@for name in $(SUBDIRS) ; do \
		$(MAKE) -s --directory=$$name; \
	done

#############################################################

install:
	@for name in $(SUBDIRS) ; do \
		$(MAKE) -s install --directory=$$name; \
	done

#############################################################

clean:
	@for name in $(SUBDIRS) ; do \
		$(MAKE) -s clean --directory=$$name; \
	done

#############################################################
