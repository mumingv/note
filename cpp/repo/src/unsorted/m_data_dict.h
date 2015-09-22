#include <iostream>
#include <fstream>
#include <vector>

class MDict {
public:
    MDict(); 
    ~MDict(); 
    bool load_from_file(const std::string& file);
private:
    std::vector<std::vector<std::string> > _dict;
};
