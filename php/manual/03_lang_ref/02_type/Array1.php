<?php
// Key: 数组的定义
// 1. 键（key）可是是一个整数 integer 或字符串 string
// 2. 值（value）可以是任意类型的值
// 3. 同一个数组的键（key）中，整数和字符串可以混用
// 4. 键（key）可以省略，如果未指定，PHP 将自动使用之前用过的最大 integer 键名加上 1 作为新的键名

$array1 = array(
    "foo" => "bar",
    "bar" => "foo",
);
var_dump($array1);

// 自 PHP 5.4 起
/*
$array2 = [
    "foo" => "bar",
    "bar" => "foo",
];
var_dump($array2);
*/

$array3 = array(
    "foo" => "bar",
    "bar" => "foo",
    100   => -100,
    -100  => 100,
    200,
);
var_dump($array3);

$array4 = array("foo", "bar", "hello", "world");
var_dump($array4);

$array5 = array(
    "a",
    "b",
    6 => "c",
    "d",
);
var_dump($array5);



?>
