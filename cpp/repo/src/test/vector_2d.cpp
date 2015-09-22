#include <iostream>
#include <sstream>
#include <vector>
using namespace std;
int vector1()
{
    vector< vector<int> > intVV;
    vector<int> intV;
    int i,j;
    for(i=0;i<10;++i){
        intV.clear();
        for(j=0;j<10;++j) {
            intV.push_back(i*10+j);
        }
        intVV.push_back(intV);
    }

    for(i=0;i<10;++i){
        for(j=0;j<10;++j) {
            cout<<intVV[i][j]<<' ';
        }
        cout<<endl;
    }
    return 0;
}

int vector2()
{
    vector< vector<int> > intVV;
    vector<int> intV;
    int i,j;
    for(i=0;i<3;++i){
        if (i == 0) {
            intV.clear();
            for(j=0;j<3;++j) {
                intV.push_back(i*10+j);
            }
            intVV.push_back(intV);
        }
        if (i == 1) {
            intV.clear();
            for(j=0;j<4;++j) {
                intV.push_back(i*10+j);
            }
            intVV.push_back(intV);
        }
        if (i == 2) {
            intV.clear();
            for(j=0;j<5;++j) {
                intV.push_back(i*10+j);
            }
            intVV.push_back(intV);
        }
    }

    cout << "intVV's size: " << intVV.size() << endl;
    cout << "intVV[0]'s size: " << intVV[0].size() << endl;
    cout << "intVV[1]'s size: " << intVV[1].size() << endl;
    cout << "intVV[2]'s size: " << intVV[2].size() << endl;

    return 0;
}

int vector3()
{
    vector<vector<string> > intVV;
    vector<string> intV;
    int i;
    string line;
    string word;
    for(i=0;i<1;++i){
        line.clear();
        getline(std::cin, line);
        cout << line << endl;
        std::istringstream ss(line);
        word.clear();
        ss >> word;
        cout << "1: " << word << endl;
        word.clear();
        ss >> word;
        cout << "2: " << word << endl;
        word.clear();
        ss >> word;
        cout << "3: " << word << endl;
        word.clear();
        ss >> word;
        cout << "4: " << word << endl;
    }

    cout << "intVV's size: " << intVV.size() << endl;
    //cout << "intVV[0]'s size: " << intVV[0].size() << endl;
    //cout << "intVV[1]'s size: " << intVV[1].size() << endl;
    //cout << "intVV[2]'s size: " << intVV[2].size() << endl;

    return 0;
}

#ifdef VECTOR2
int main() {
    cout << "vector1:" << endl;
    vector1();
    cout << "vector2:" << endl;
    vector2();
    cout << "vector3:" << endl;
    vector3();
}
#endif
