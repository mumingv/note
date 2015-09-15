<?php
// Key: 数组关于使用key获取value的一些注意事项：
// 一、注意：字符串中的fruit，分两种情况：
// 1、如果没有{}包含，则会给fruit加上引号；
//    1.1、如果fruit本来没有引号，则加上引号后形成字符串key；
//    1.2、如果fruit本来就有引号，则加上引号后导致语法错误；
// 2、如果有{}包含，则只关注{}内的东西即可；
//    2.1、如果fruit本来没有引号，则把fruit当作常量；
//    2.2、如果fruit本来就有引号，则加上引号后导致语法错误；
// 二、print打印字符串，字符串中间的连接只能用点号，不能用逗号；
// 三、也可以用函数返回值作为获取数组元素的key；

// Show all errors
error_reporting(E_ALL);

$arr = array('fruit' => 'apple', 'veggie' => 'carrot');

// Correct
print $arr['fruit'];  // apple
print $arr['veggie']; // carrot

// 注意：这里fruit是未定义的常量，PHP会将其转换为字符串'fruit';
// Incorrect.  This works but also throws a PHP error of level E_NOTICE because
// of an undefined constant named fruit
//
// Notice: Use of undefined constant fruit - assumed 'fruit' in...
print $arr[fruit];    // apple

// This defines a constant to demonstrate what's going on.  The value 'veggie'
// is assigned to a constant named fruit.
define('fruit', 'veggie');

// Notice the difference now
print $arr['fruit'];  // apple
print $arr[fruit];    // carrot

// 注意：字符串中的fruit，分两种情况：
// 1、如果没有{}包含，则会给fruit加上引号；
//    1.1、如果fruit本来没有引号，则加上引号后形成字符串key；
//    1.2、如果fruit本来就有引号，则加上引号后导致语法错误；
// 2、如果有{}包含，则只关注{}内的东西即可；
//    2.1、如果fruit本来没有引号，则把fruit当作常量；
//    2.2、如果fruit本来就有引号，则加上引号后导致语法错误；
// The following is okay, as it's inside a string. Constants are not looked for
// within strings, so no E_NOTICE occurs here
print "Hello1 $arr[fruit]";      // fruit作为字符串key：Hello1 apple
print 'Hello1 $arr[fruit]';      // 原样输出：Hello1 $arr[fruit]
// This will not work, and will result in a parse error, such as:
// Parse error: parse error, expecting T_STRING' or T_VARIABLE' or T_NUM_STRING'
// This of course applies to using superglobals in strings as well
//print "Hello $arr['fruit']";   // 语法错误
// With one exception: braces surrounding arrays within strings allows constants
// to be interpreted
print "Hello2 {$arr[fruit]}";    // fruit作为常量：Hello carrot
print "Hello3 {$arr['fruit']}";  // fruit作为字符串key：Hello apple

// Concatenation is another option
print "Hello " . $arr['fruit']; // Hello apple
?>