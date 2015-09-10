<?php
// Key point: 双引号中的变量解析(简单语法)
// 1. $变量名会尽可能多地匹配字符, 本例中$juices将不被识别;
// 2. 宏PHP_EOL就是换行字符串"\r\n"
// 3. echo中的字符串拼接可以使用逗号','也可以使用点号'.'；

$juice = "apple";

echo "He drank some $juice juice.", PHP_EOL."new_line";
echo PHP_EOL;
// Invalid. "s" is a valid character for a variable name, but the variable is $juice.
echo "He drank some juice made of $juices.";
?> 
