#include <iostream>
#include <ctime>
#include <sys/types.h>
#include <sys/stat.h> 
using namespace std; 
int main ()
{
    struct stat buf;
    int result;
    result = stat("mqt.cc", &buf);
    if (result != 0)
    {
        perror("Failed ^_^");
    }
    else
    {
        cout << "size of the file in bytes: "
             << buf.st_size << endl;
        cout << "time of creation of the file: "
             << ctime(&buf.st_ctime);
        cout << "time of last modification of the file: "
             << ctime(&buf.st_mtime);
        cout << "time of last access of the file: "
             << ctime(&buf.st_atime);
    }
    return 0;
}
 
