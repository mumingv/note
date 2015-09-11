<?php
// Key: 获取/修改字符串

// 取得字符串的第一个字符
$str = 'This is a test.';
echo "\$str: ${str}\n";
$first = $str[0];
echo "\$first: ${first}\n";

// 取得字符串的第三个字符
$third = $str[2];
echo "\$third: ${third}\n";

// 取得字符串的最后一个字符
$str = 'This is still a test.';
echo "\$str: ${str}\n";
$last = $str[strlen($str)-1];
echo "\$last: ${last}\n";

// 修改字符串的最后一个字符
$str = 'Look at the sea';
echo "\$str: ${str}\n";
$str[strlen($str)-1] = 'e';
echo "\$str: ${str}\n";
?>