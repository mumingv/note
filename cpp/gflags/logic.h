#ifndef _LOGIC_H
#define _LOGIC_H

#include <stdio.h>
#include <iostream>
#include <gflags/gflags.h>
 
using namespace std;

DECLARE_string(confPath);
DECLARE_int32(port);
DECLARE_bool(daemon);

int process();

#endif
