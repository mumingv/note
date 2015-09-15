<?php
// Key: switch的用法
// 1. case表达式可以是任何求值为简单类型的表达式，即整型或浮点数以及字符串
// 2. case表达式后面的冒号可以用分号代替
// 3. switch替代语法为：将{换成:，将}换成"endswitch;"

// switch和if的等价写法
if ($i == 0) {
    echo "i equals 0".PHP_EOL;
} elseif ($i == 1) {
    echo "i equals 1".PHP_EOL;
} elseif ($i == 2) {
    echo "i equals 2".PHP_EOL;
}

switch ($i) {
    case 0:
        echo "i equals 0".PHP_EOL;
        break;
    case 1:
        echo "i equals 1".PHP_EOL;
        break;
    case 2:
        echo "i equals 2".PHP_EOL;
        break;
}

// case表达式为字符串类型
$i = "bar";
switch ($i) {
    case "apple":
        echo "i is apple".PHP_EOL;
        break;
    case "bar":
        echo "i is bar".PHP_EOL;
        break;
    case "cake":
        echo "i is cake".PHP_EOL;
        break;
}

// case表达式后面的冒号可以用分号代替
$i = "bar";
switch ($i) {
    case "apple";
        echo "-> i is apple".PHP_EOL;
        break;
    case "bar";
        echo "-> i is bar".PHP_EOL;
        break;
    case "cake";
        echo "-> i is cake".PHP_EOL;
        break;
}

// switch替代语法
switch ($i):
    case 0:
        echo "i equals 0".PHP_EOL;
        break;
    case 1:
        echo "i equals 1".PHP_EOL;
        break;
    case 2:
        echo "i equals 2".PHP_EOL;
        break;
    default:
        echo "i is not equal to 0, 1 or 2".PHP_EOL;
endswitch;

?>