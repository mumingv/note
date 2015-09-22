#COMAKE2 edit-mode: -*- Makefile -*-
####################64Bit Mode####################
ifeq ($(shell uname -m),x86_64)
CC=gcc
CXX=g++
CXXFLAGS=-g \
  -pipe \
  -W \
  -Wall \
  -fPIC
CFLAGS=-g \
  -pipe \
  -W \
  -Wall \
  -fPIC
CPPFLAGS=-D_GNU_SOURCE \
  -D__STDC_LIMIT_MACROS \
  -DVERSION=\"1.9.8.7\"
INCPATH=-I. \
  -I./src \
  -I./src/function \
  -I./src/test \
  -I./src/unsorted
DEP_INCPATH=

#============ CCP vars ============
CCHECK=@ccheck.py
CCHECK_FLAGS=
PCLINT=@pclint
PCLINT_FLAGS=
CCP=@ccp.py
CCP_FLAGS=


#COMAKE UUID
COMAKE_MD5=9ccea08d4a49cffc71620148c45a0bda  COMAKE


.PHONY:all
all:comake2_makefile_check repo 
	@echo "[[1;32;40mCOMAKE:BUILD[0m][Target:'[1;32;40mall[0m']"
	@echo "make all done"

.PHONY:comake2_makefile_check
comake2_makefile_check:
	@echo "[[1;32;40mCOMAKE:BUILD[0m][Target:'[1;32;40mcomake2_makefile_check[0m']"
	#in case of error, update 'Makefile' by 'comake2'
	@echo "$(COMAKE_MD5)">comake2.md5
	@md5sum -c --status comake2.md5
	@rm -f comake2.md5

.PHONY:ccpclean
ccpclean:
	@echo "[[1;32;40mCOMAKE:BUILD[0m][Target:'[1;32;40mccpclean[0m']"
	@echo "make ccpclean done"

.PHONY:clean
clean:ccpclean
	@echo "[[1;32;40mCOMAKE:BUILD[0m][Target:'[1;32;40mclean[0m']"
	rm -rf repo
	rm -rf ./repo
	rm -rf src/repo_main.o
	rm -rf src/function/repo_stat.o
	rm -rf src/test/repo_vector_2d.o
	rm -rf src/unsorted/repo_m_data_dict.o

.PHONY:dist
dist:
	@echo "[[1;32;40mCOMAKE:BUILD[0m][Target:'[1;32;40mdist[0m']"
	tar czvf output.tar.gz output
	@echo "make dist done"

.PHONY:distclean
distclean:clean
	@echo "[[1;32;40mCOMAKE:BUILD[0m][Target:'[1;32;40mdistclean[0m']"
	rm -f output.tar.gz
	@echo "make distclean done"

.PHONY:love
love:
	@echo "[[1;32;40mCOMAKE:BUILD[0m][Target:'[1;32;40mlove[0m']"
	@echo "make love done"

repo:src/repo_main.o \
  src/function/repo_stat.o \
  src/test/repo_vector_2d.o \
  src/unsorted/repo_m_data_dict.o
	@echo "[[1;32;40mCOMAKE:BUILD[0m][Target:'[1;32;40mrepo[0m']"
	$(CXX) src/repo_main.o \
  src/function/repo_stat.o \
  src/test/repo_vector_2d.o \
  src/unsorted/repo_m_data_dict.o -Xlinker "-("   -lpthread \
  -lcrypto \
  -lrt -Xlinker "-)" -o repo
	mkdir -p ./
	cp -f --link repo ./

src/repo_main.o:src/main.cpp \
  src/unsorted/m_data_dict.h
	@echo "[[1;32;40mCOMAKE:BUILD[0m][Target:'[1;32;40msrc/repo_main.o[0m']"
	$(CXX) -c $(INCPATH) $(DEP_INCPATH) $(CPPFLAGS) $(CXXFLAGS)  -o src/repo_main.o src/main.cpp

src/function/repo_stat.o:src/function/stat.cpp
	@echo "[[1;32;40mCOMAKE:BUILD[0m][Target:'[1;32;40msrc/function/repo_stat.o[0m']"
	$(CXX) -c $(INCPATH) $(DEP_INCPATH) $(CPPFLAGS) $(CXXFLAGS)  -o src/function/repo_stat.o src/function/stat.cpp

src/test/repo_vector_2d.o:src/test/vector_2d.cpp
	@echo "[[1;32;40mCOMAKE:BUILD[0m][Target:'[1;32;40msrc/test/repo_vector_2d.o[0m']"
	$(CXX) -c $(INCPATH) $(DEP_INCPATH) $(CPPFLAGS) $(CXXFLAGS)  -o src/test/repo_vector_2d.o src/test/vector_2d.cpp

src/unsorted/repo_m_data_dict.o:src/unsorted/m_data_dict.cpp \
  src/unsorted/m_data_dict.h
	@echo "[[1;32;40mCOMAKE:BUILD[0m][Target:'[1;32;40msrc/unsorted/repo_m_data_dict.o[0m']"
	$(CXX) -c $(INCPATH) $(DEP_INCPATH) $(CPPFLAGS) $(CXXFLAGS)  -o src/unsorted/repo_m_data_dict.o src/unsorted/m_data_dict.cpp

endif #ifeq ($(shell uname -m),x86_64)


