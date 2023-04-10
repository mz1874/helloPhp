<?php
//sort() - 对数组进行升序排列
//rsort() - 对数组进行降序排列
//asort() - 根据关联数组的值，对数组进行升序排列
//ksort() - 根据关联数组的键，对数组进行升序排列
//arsort() - 根据关联数组的值，对数组进行降序排列
//krsort() - 根据关联数组的键，对数组进行降序排列

$arr = array(1, 3, 2, 5, 77, 4, 3, 22, 56);

for ($i = 0; $i < count($arr); $i++) {
    echo $arr[$i];
}

sort($arr);


echo "<br>";

for ($i = 0; $i < count($arr); $i++) {
    echo $arr[$i];
    print "<p>&nbsp</p>";
}

rsort($arr);
echo "**********************************<br>";

for ($i = 0; $i < count($arr); $i++) {
    echo $arr[$i];
    print "<p>&nbsp</p>";
}
echo "**********************************<br>";


$map = array("zhangsan"=> 19, "lisi"=>15, "wangwu"=> 99);


// according to v
asort($map);



// according to v
arsort($map);



// according to key
ksort($map);



// according to key
krsort($map);



?>
