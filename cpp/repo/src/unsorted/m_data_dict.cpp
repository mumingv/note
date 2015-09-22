/* Copyright (c) 2015-2016, Jay Yin <jay_yin at yeah dot net>
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without
 * modification, are permitted provided that the following conditions are met:
 *
 *   * Redistributions of source code must retain the above copyright notice,
 *     this list of conditions and the following disclaimer.
 *   * Redistributions in binary form must reproduce the above copyright
 *     notice, this list of conditions and the following disclaimer in the
 *     documentation and/or other materials provided with the distribution.
 *   * Neither the name of Redis nor the names of its contributors may be used
 *     to endorse or promote products derived from this software without
 *     specific prior written permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS"
 * AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE
 * IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE
 * ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT OWNER OR CONTRIBUTORS BE
 * LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR
 * CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF
 * SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS
 * INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN
 * CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE)
 * ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 * POSSIBILITY OF SUCH DAMAGE.
 */

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
        std::string word;
        std::vector<std::string> dict_entry;
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
        while (iss >> word) {
            //std::cout << word << std::endl;
            dict_entry.push_back(word);
        }
        if (dict_entry.size()) {
            _dict.push_back(dict_entry);
        }
    }

    return true;
}

void MDict::print() {
    size_t entry_size = _dict.size();
    for (size_t i = 0; i < entry_size; i++) {
        std::cout << "Line" << i << ":";
        size_t word_size = _dict[i].size();
        for (size_t j = 0; j < word_size; j++) {
            std::cout << " " << _dict[i][j];
        }
        std::cout << std::endl;
    }
    return;
}
