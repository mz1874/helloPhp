<?php


$name = "lim yi wen ";
echo $name;
$x = 99;
$y = 88;
$z = $x + $y;
echo $z;
$x = 5; // 全局变量

function myTest()
{
    global $x;
    echo "<p>测试函数内变量: 我是在方法体之内<p>";
    echo "变量 x 为: $x";
}

myTest();

echo "<p>测试函数外变量:<p>";
echo "变量 x 为: $x";
echo "<br>";
echo "变量 y 为: $y";

echo "<br/>";

echo $GLOBALS['x'];

function test_static(){
    static $result = 99;
    echo $result;
    $result ++;
}
echo "<br/>";
test_static();
echo "<br/>";
test_static();
echo "<br/>";
test_static();


?>
