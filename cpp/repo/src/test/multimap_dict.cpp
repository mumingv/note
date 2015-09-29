#include "multimap_dict.h"

RequireSortDict::RequireSortDict() {
}

RequireSortDict::~RequireSortDict() {
}

bool RequireSortDict::load_from_file(const std::string& file) {
    std::ifstream ifs(file.c_str(), std::ifstream::in);
    if (!ifs.is_open()) {
        std::cout << "FAIL: file " << file << " open fail!" << std::endl;
        return false;
    }

    size_t line_num = 0;
    std::string line;
    /**
      * istream& getline (char* s, streamsize n );
      * istream& getline (char* s, streamsize n, char delim );
      *
      * The return value is a reference to the input stream. If 
      * the stream is tested as a logical value (as in an 
      * if or while), it is equivalent to true if the read 
      * was successful and false otherwise (e.g., end of file).
      */
    while (std::getline(ifs, line)) {
        //std::cout << line << std::endl;
        line_num++;
        RequireSortEntry dict_entry;
        std::istringstream iss(line, std::istringstream::in);
        /**
             * istream& operator>> (TYPE& val);
             *
             * The return value is a reference to the input stream. If 
             * the stream is tested as a logical value (as in an 
             * if or while), it is equivalent to true if the read 
             * was successful and false otherwise (e.g., end of string).
             *
             * Note: As to the delem character, the WHITESPACE and TAB
             * are both ok.
             */
        iss >> dict_entry.trade_entity;
        iss >> dict_entry.main_require;
        iss >> dict_entry.obj_require;
        iss >> dict_entry.support_value;
        iss >> dict_entry.trust_value;

        std::cout << line_num << ": " 
             << dict_entry.trade_entity << " "
             << dict_entry.main_require << " "
             << dict_entry.obj_require << " "
             << dict_entry.support_value << " "
             << dict_entry.trust_value << std::endl;

        if (dict_entry.trade_entity.empty()) {
            std::cout << "ERROR: Line format is error! Line"
                << line_num << ":" << std::endl;
        }

        _require_sort_dict.insert(std::pair<std::string, RequireSortEntry>
            (dict_entry.trade_entity + dict_entry.main_require, dict_entry));        
    }

    return true;
}

void RequireSortDict::print() {
    std::multimap<std::string, RequireSortEntry>::iterator it;

    for (it = _require_sort_dict.begin(); it != _require_sort_dict.end(); ++it) {
        std::cout << it->first << std::endl;
        std::cout << it->second.trade_entity << " "
            << it->second.main_require << " "
            << it->second.obj_require << " "
            << it->second.support_value << " "
            << it->second.trust_value << std::endl;
    }
    return;
}

bool RequireSortDict::get_obj_require(std::string& key, std::vector<std::string>& obj_require) {
    // 根据key获取value(只能获取最先匹配的那一个), 关键函数: find
    std::multimap<std::string, RequireSortEntry>::iterator it;
    it = _require_sort_dict.find(key);
    if (it != _require_sort_dict.end()) {
        std::cout << it->first << ": ";
        std::cout << it->second.trade_entity << " "
            << it->second.main_require << " "
            << it->second.obj_require << " "
            << it->second.support_value << " "
            << it->second.trust_value << std::endl;
    }
    
    // 根据key获取value(匹配key对应的所有value), 关键函数: count, equal_range
    std::multimap<float, std::string> require_map;
    std::cout << "Key: " << key << " Match count: " << _require_sort_dict.count(key) << std::endl;
    std::pair<std::multimap<std::string, RequireSortEntry>::iterator, 
        std::multimap<std::string, RequireSortEntry>::iterator> ret;
    ret = _require_sort_dict.equal_range(key);
    for (it = ret.first; it != ret.second; ++it) {
        std::cout << it->second.trade_entity << " "
            << it->second.main_require << " "
            << it->second.obj_require << " "
            << it->second.support_value << " "
            << it->second.trust_value << std::endl;
        if (it->second.support_value > 0.01) {
            require_map.insert(std::pair<float, std::string>(it->second.trust_value, it->second.obj_require));
        }
    }

    std::multimap<float, std::string>::iterator req_it;
    for (req_it = require_map.begin(); req_it != require_map.end(); ++req_it) {
        obj_require.insert(obj_require.begin(), req_it->second);
    }

    for (std::vector<std::string>::iterator temp_it = obj_require.begin(); temp_it != obj_require.end(); ++temp_it) {
        std::cout << "obj_require: " << *temp_it << std::endl;
    }

    return true;
}


