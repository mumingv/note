<?php
$juices = array("apple", "orange", "koolaid1" => "purple");

echo "He drank some $juices[0] juice.".PHP_EOL;
echo "He drank some $juices[1] juice.".PHP_EOL;
echo "He drank some $juices[2] juice.".PHP_EOL; //Wont work
echo "He drank some juice made of $juice[0]s.".PHP_EOL; // Wont work
echo "He drank some juice made of $juice[0]'s.".PHP_EOL; // Wont work
echo "He drank some $juices[koolaid1] juice.".PHP_EOL;
//echo "He drank some $juices['koolaid1'] juice.".PHP_EOL; // 语法解析错误: key不能加引号

class people {
    public $john = "John Smith";
    public $jane = "Jane Smith";
    public $robert = "Robert Paulsen";
    public $smith = "Smith";
}

$people = new people();

echo "$people->john drank some $juices[0] juice.".PHP_EOL;
echo "$people->john then said hello to $people->jane.".PHP_EOL;
echo "$people->john's wife greeted $people->robert.".PHP_EOL;
echo "$people->robert greeted the two $people->smiths.".PHP_EOL; // Wont work
echo "$people->robert greeted the two $people->smith's.".PHP_EOL; // OK
?>
