<?php
// Key: 数组的访问
// 1. 数组单元可以通过方括号 $array[key] 语法来访问
// 2. 数组单元可以通过圆括号 $array(key) 语法来访问
$array = array(
    "foo" => "bar",
    42    => 24,
    "multi" => array(
        "dimensional" => array(
            "array" => "foo"
        )
    )
);

var_dump($array["foo"]);
var_dump($array[42]);
var_dump($array["multi"]["dimensional"]["array"]);

//Note: 官方说两种括号可以互换，但实际上只支持方括号，可能是php版本太旧导致
//方括号和花括号可以互换使用来访问数组单元（例如 $array[42] 和 $array{42} 在上例中效果相同）。
//var_dump($array("foo")); // 语法错误
//var_dump($array(42)); // 语法错误

?>