#include <stdio.h>
#include <iostream>
#include <gflags/gflags.h>
#include "logic.h"

using namespace std;

DEFINE_string(confPath, "../conf/setup.ini", "program configure file.");
DEFINE_int32(port, 36810, "program listen port");
DEFINE_bool(daemon, true, "run daemon mode");

static bool ValidatePort(const char* flagname, gflags::int32 value) {
  if (value >= 36800 && value <= 36888) { 
    printf("param(%s) = (%d) is valid!\n", flagname, value);
    return true; 
  }

  printf("param(%s) = (%d) is invalid!\n", flagname, value);
  FLAGS_port = 36810;
  return false; 
}
static const bool validPort = gflags::RegisterFlagValidator(&FLAGS_port, &ValidatePort);


int main(int argc, char** argv)
{
    for (int i = 0; i < argc; i++) {
        printf("argv[%d] = %s\n", i, argv[i]);
    }
    printf("---------------here--------------\n");

    gflags::SetVersionString("1.0.0.0");
    gflags::SetUsageMessage("Usage: ./demo");
    gflags::ParseCommandLineFlags(&argc, &argv, false);

    for (int i = 0; i < argc; i++) {
        printf("argv[%d] = %s\n", i, argv[i]);
    }
    printf("---------------there--------------\n");

    cout << "confPath = " << FLAGS_confPath << endl;
    cout << "port = " << FLAGS_port << endl;
    cout << "daemon = " << FLAGS_daemon << endl;

    if (FLAGS_daemon) {
        //cout << "run background ..." << endl;
    }
    else {
        //cout << "run foreground ..." << endl;
    }

    cout << "Welcome to use gflags!" << endl;

    process();

    gflags::ShutDownCommandLineFlags();
    return 0;
}
