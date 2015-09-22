#include <iostream>
#include "m_data_dict.h"

//int main(int argc, char* argv[])
int main()
{
    MDict dict;
    std::string file("./data/m_data_dict.data");
    dict.load_from_file(file);
    return 0;
}
 
