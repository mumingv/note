<?php
// Key point:
// 1. 获取变量的类型，可以使用gettype()函数
// 2. 打印表达式的值和类型，使用var_dump()函数
// 3. 判断变量是否为某个类型，使用is_type类函数,
//    如: is_int(), is_string()
//

$a_bool = TRUE;   // a boolean
$a_str  = "foo";  // a string
$a_str2 = 'foo';  // a string
$an_int = 12;     // an integer

echo "a_bool's type: ", gettype($a_bool), "\n"; // prints out:  boolean
echo "a_str's type: ", gettype($a_str), "\n";  // prints out:  string

// If this is an integer, increment it by four
if (is_int($an_int)) {
   $an_int += 4;
}
echo "an_int's value: $an_int\n";

// If $bool is a string, print it out
// (does not print out anything)
if (is_string($a_bool)) {
   echo "String: $a_bool";
}
echo "a_bool's value: $a_bool\n";

?>
