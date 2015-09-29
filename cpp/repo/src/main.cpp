#include <iostream>
#include "m_data_dict.h"
#include "multimap_dict.h"

//int main(int argc, char* argv[])
int main()
{
    RequireSortDict dict;
    std::string file("./data/multimap_dict.data");
    dict.load_from_file(file);
    //dict.print();
    std::vector<std::string> result;
    std::string key("Health-yiyuanming-北医三院手术");
    bool ret = dict.get_obj_require(key, result);
    std::cout << "ret is: " << ret << std::endl;
    return 0;
#if 0
    MDict dict(10);
    std::string file("./data/m_data_dict.data");
    dict.load_from_file(file);
    dict.print();
    return 0;
#endif
}
 
