#include <iostream>
#include <fstream>
#include <sstream>
#include <vector>
#include <map>

// �����ֵ�洢�ṹ: 
typedef struct RequireSortEntry {
    std::string trade_entity;   // ��һ��: ��ҵ��-ʵ������-ʵ����
    std::string main_require;   // �ڶ���: ������
    std::string obj_require;    // ������: Ŀ������, Ҳ��Ϊ��������
    float support_value;        // ������: ֧�ֶ�
    float trust_value;          // ������: ���Ŷ�
} RequireSortEntry;

// ����ʵ�
class RequireSortDict {
public:
    RequireSortDict();
    ~RequireSortDict();
    bool load_from_file(const std::string& path);
    void print();
    bool get_obj_require(std::string& key, std::vector<std::string>& obj_require);
private:
    // key: ��һ�� + �ڶ���: ��ҵ��-ʵ������-ʵ����_������
    // value: RequireSortEntry
    std::multimap<std::string, RequireSortEntry> _require_sort_dict;
};

