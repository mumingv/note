project(demo)
cmake_minimum_required(VERSION 2.8)
set(CMAKE_VERBOSE_MAKEFILE on)

include_directories("/root/local/gflags-2.1.1/include")
link_directories("/root/local/gflags-2.1.1/lib")

add_executable(demo demo.cpp)
target_link_libraries(demo gflags pthread)
