<?php
// Key: foreach方式访问数组；

error_reporting(E_ALL);

// $value值传递
$arr = array(1, 2, 3, 4);
foreach ($arr as $value) {
    $value = $value * 2;
}
var_dump($arr);

// $value引用传递
$arr = array(1, 2, 3, 4);
foreach ($arr as &$value) {
    $value = $value * 2;
}
unset($value); // 最后取消掉引用
var_dump($arr);

// 以下两种写法相同：
$arr = array("one", "two", "three");
reset($arr);
while (list($key, $value) = each($arr)) {
    echo "Key: $key; Value: $value<br />\n";
}

foreach ($arr as $key => $value) {
    echo "Key: $key; Value: $value<br />\n";
}

// 以下两种写法相同：
$arr = array("one", "two", "three");
reset($arr);
while (list(, $value) = each($arr)) {
    echo "Value: $value<br>\n";
}

foreach ($arr as $value) {
    echo "Value: $value<br />\n";
}

?>