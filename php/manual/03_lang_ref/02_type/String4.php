<?php
// Key point: 双引号中的变量解析(复杂语法)
// 1. 

// 显示所有错误
//error_reporting(E_ALL);

$great = 'fantastic';

// 无效，输出: This is { fantastic}
echo "This is { $great}".PHP_EOL;

// 有效，输出： This is fantastic
echo "This is {$great}".PHP_EOL;
echo "This is ${great}".PHP_EOL;

// 有效
echo "This square is {$square->width}00 centimeters broad.".PHP_EOL; 

// 有效，只有通过花括号语法才能正确解析带引号的键名
echo "This works: {$arr['key']}".PHP_EOL;

// 有效
echo "This works: {$arr[4][3]}".PHP_EOL;

// 这是错误的表达式，因为就像 $foo[bar] 的格式在字符串以外也是错的一样。
// 换句话说，只有在 PHP 能找到常量 foo 的前提下才会正常工作；这里会产生一个
// E_NOTICE (undefined constant) 级别的错误。
echo "This is wrong: {$arr[foo][3]}"; 

// 有效，当在字符串中使用多重数组时，一定要用括号将它括起来
echo "This works: {$arr['foo'][3]}";

// 有效
echo "This works: " . $arr['foo'][3];

echo "This works too: {$obj->values[3]->name}";

echo "This is the value of the var named $name: {${$name}}";

echo "This is the value of the var named by the return value of getName(): {${getName()}}";

echo "This is the value of the var named by the return value of \$object->getName(): {${$object->getName()}}";

// 无效，输出： This is the return value of getName(): {getName()}
echo "This is the return value of getName(): {getName()}";
?> 
