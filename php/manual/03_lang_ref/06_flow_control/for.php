<?php
// Key: for的两种写法：
// 1. 普通写法，和C语言一致；
// 2. 替代写法，使用:替代{，使用endfor;替代}；
// Key: rand(begin, end)函数返回[begin, end]范围内的随机数；
// Key: Array和array的写法等价；

/* example 1 */
for ($i = 1; $i <= 10; $i++) {
    echo $i;
}
echo PHP_EOL;

for ($i = 1; $i <= 10; $i++):
    echo $i;
endfor;

echo PHP_EOL;

/* example 2 */
for ($i = 1; ; $i++) {
    if ($i > 10) {
        break;
    }
    echo $i;
}
echo PHP_EOL;

/* example 3 */
$i = 1;
for (;;) {
    if ($i > 10) {
        break;
    }
    echo $i;
    $i++;
}
echo PHP_EOL;

/* example 4 */
for ($i = 1, $j = 0; $i <= 10; $j += $i, print $i, $i++);
echo PHP_EOL;

/*
 * 此数组将在遍历的过程中改变其中某些单元的值
 */
$people = Array(
    Array('name' => 'Kalle', 'salt' => 856412),
    Array('name' => 'Pierre', 'salt' => 215863)
);

for($i = 0, $size = count($people); $i < $size; ++$i)
{
    $people[$i]['salt'] = rand(000000, 999999);
    echo $people[$i]['salt'].PHP_EOL;
}

?>