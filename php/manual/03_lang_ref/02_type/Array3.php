<?php
// Key: 数组增加元素，删除元素
// 1. 注意：增加、删除元素时，方括号中的是key不是下标

$arr = array(5 => 1, 12 => 2);

$arr[] = 56;    // This is the same as $arr[13] = 56;
// at this point of the script

$arr["x"] = 42; // This adds a new element to
// the array with key "x"
var_dump($arr);

// 注意：这是删除key为5的元素，不是删除第5个元素
unset($arr[5]); // This removes the element from the array
var_dump($arr);

unset($arr);    // This deletes the whole array
?>