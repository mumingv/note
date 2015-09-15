<?php
// Key：键为整数时的一些注意事项，以及重新索引的方法

// 创建一个简单的数组
$array = array(1, 2, 3, 4, 5);
print_r($array);

// 现在删除其中的所有元素，但保持数组本身不变:
foreach ($array as $i => $value) {
    unset($array[$i]);
}
print_r($array);

// 添加一个单元（注意新的键名是 5，而不是你可能以为的 0）
$array[] = 6;
print_r($array);

// 重新索引：
$array = array_values($array);
print_r($array);

// key为string时使用array_values函数
$array2 = array(
    "foo" => "bar",
    "bar" => "foo",
);
print_r($array2);

$array2 = array_values($array2);
print_r($array2);

?>