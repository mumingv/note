<?php
// Key: if的两种使用方法：
// 1. 使用和C语言一样的语法，且else if可以写成elseif;
// 2. 使用冒号:替代语法，只能使用elseif而不能使用else if，且末尾必须为"endif;"，注意endif后面有个分号

$a = 3;
$b = 2;

if ($a > $b)
    echo "1-> a is bigger than b\n";

if ($a > $b) {
    echo "2-> a is bigger than b\n";
    $c = $a;
}

if ($a > $b) {
    echo "3-> a is greater than b\n";
} else {
    echo "3-> a is NOT greater than b\n";
}

// 使用大括号{}时，elseif和else if都可以使用
if ($a > $b) {
    echo "4-> a is bigger than b\n";
} elseif ($a == $b) {
    echo "4-> a is equal to b\n";
} else {
    echo "4-> a is smaller than b\n";
}

if ($a > $b) {
    echo "4-> a is bigger than b\n";
} else if ($a == $b) {
    echo "4-> a is equal to b\n";
} else {
    echo "4-> a is smaller than b\n";
}

// 使用冒号:时，只能使用elseif，不能使用else if
if ($a > $b):
    echo "1-> a is bigger than b\n";
endif;

if($a > $b):
    echo "5-> ".$a." is greater than ".$b.PHP_EOL;
elseif($a == $b): // 注意使用了一个单词的 elseif
    echo "5-> ".$a." equals ".$b.PHP_EOL;
else:
    echo "5-> ".$a." is neither greater than or equal to ".$b.PHP_EOL;
endif;

?>