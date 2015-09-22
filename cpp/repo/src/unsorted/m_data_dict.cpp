#include "m_data_dict.h"

MDict::MDict() {
}

MDict::~MDict() {
}

bool MDict::load_from_file(const std::string& file) {
    std::ifstream ifs(file.c_str(), std::ifstream::in);
    if (!ifs.is_open()) {
        std::cout << "FAIL: file " << file << " open fail!" << std::endl;
        return false;
    }



    return true;
}
