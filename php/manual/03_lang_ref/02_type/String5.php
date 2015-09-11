<?php
// Key point: 在字符串中用复杂（花括号）语法通过变量来调用类的属性
class foo {
    var $bar = 'I am bar.';
}

$foo = new foo();
$bar = 'bar';
$baz = array('foo', 'bar', 'baz', 'quux');
echo "{$foo->$bar}\n";
echo "{$foo->$baz[1]}\n";
?>