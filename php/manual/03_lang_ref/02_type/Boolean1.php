<?php
// == 是一个操作符，它检测两个变量是否相等，并返回一个布尔值
$action = TRUE;
if ($action == "show_version") {
    echo "The version is 1.23";
}

// 这样做是不必要的...
$show_separators = true;
if ($show_separators == TRUE) {
    echo "<hr>\n";
}

// ...因为可以使用下面这种简单的方式：
if ($show_separators) {
    echo "<hr>\n";
}
?> 
