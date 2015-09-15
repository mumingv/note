<?php
// Key: continue的使用和C语言一致；
// 1. continue后面的数字表示跳到外面的第number层继续执行；

$arr = Array(
    1 => "one",
    2 => "two",
    3 => "three",
    4 => "four",
);

function do_something_odd($value) {
    echo "$value".PHP_EOL;
}

while (list ($key, $value) = each($arr)) {
    if (!($key % 2)) { // skip odd members
        continue;
    }
    do_something_odd($value);
}

$i = 0;
while ($i++ < 5) {
    echo $i.PHP_EOL;
    echo "Outer<br />\n";
    while (1) {
        echo "Middle<br />\n";
        while (1) {
            echo "Inner<br />\n";
            continue 3;
        }
        echo "This never gets output.<br />\n";
    }
    echo "Neither does this.<br />\n";
}

for ($i = 0; $i < 5; ++$i) {
    if ($i == 2)
        continue
        print "$i\n";
}
?>