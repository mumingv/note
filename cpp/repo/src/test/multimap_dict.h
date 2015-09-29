#include <iostream>
#include <fstream>
#include <sstream>
#include <vector>
#include <map>

// 排序字典存储结构: 
typedef struct RequireSortEntry {
    std::string trade_entity;   // 第一列: 行业名-实体类型-实体名
    std::string main_require;   // 第二列: 主需求
    std::string obj_require;    // 第三列: 目标需求, 也称为关联需求
    float support_value;        // 第四列: 支持度
    float trust_value;          // 第五列: 置信度
} RequireSortEntry;

// 排序词典
class RequireSortDict {
public:
    RequireSortDict();
    ~RequireSortDict();
    bool load_from_file(const std::string& path);
    void print();
    bool get_obj_require(std::string& key, std::vector<std::string>& obj_require);
private:
    // key: 第一列 + 第二列: 行业名-实体类型-实体名_主需求
    // value: RequireSortEntry
    std::multimap<std::string, RequireSortEntry> _require_sort_dict;
};

