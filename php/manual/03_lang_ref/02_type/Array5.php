<?php
// Key: 数组访问之：key的写法
// 1. error_reporting()函数设置应该报告何种 PHP 错误；
//    PHP 有诸多错误级别，使用该函数可以设置在脚本运行时的级别。
// 2. ini_set()函数设置指定配置选项的值。这个选项会在脚本运行时保持新的值，并在脚本结束时恢复；
// 3. 配置display_errors会显示运行中的语法错误；
// 4. 配置html_errors会显示php错误所在的html标签；

error_reporting(E_ALL); // 和ini_set('error_reporting', E_ALL);一样
ini_set('display_errors', true); // 设为false则知会报告而不会显示
ini_set('html_errors', false);

// Simple array:
$array = array(1, 2);
$count = count($array);
for ($i = 0; $i < $count; $i++) {
    echo "\nChecking $i: \n";
    echo "Bad: " . $array['$i'] . "\n";
    echo "Good: " . $array[$i] . "\n";
    echo "Bad: {$array['$i']}\n";
    echo "Good: {$array[$i]}\n";
}

?>