<?php
// Key: while的两种写法：
// 1. 普通写法，和C语言一致；
// 2. 替代写法，使用:替换{，使用endwhile;替换}

/* example 1 */
$i = 1;
while ($i <= 10) {
    echo $i++.PHP_EOL;  /* the printed value would be
                    $i before the increment
                    (post-increment) */
}

print PHP_EOL;

/* example 2 */
$i = 1;
while ($i <= 10):
    print $i.PHP_EOL;
    $i++;
endwhile;
?>