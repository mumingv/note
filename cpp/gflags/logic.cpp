#include "logic.h"

int process()
{
  printf("----------------- process start ---------------\n");
  cout << "confPath = " << FLAGS_confPath << endl;
  cout << "port = " << FLAGS_port << endl;
  if (FLAGS_daemon) {
    cout << "FLAGS_daemon is true" << endl;
  }
  else {
    cout << "FLAGS_daemon is false" << endl;
  }
  printf("----------------- process end ---------------\n");

  return 0;
}
