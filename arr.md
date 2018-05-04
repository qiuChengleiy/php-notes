### 数组

数组是一个能在单个变量中存储多个值的特殊变量

* 在 PHP 中，有三种类型的数组：
  * 数值数组 - 带有数字 ID 键的数组
  * 关联数组 - 带有指定的键的数组，每个键关联一个值
  * 多维数组 - 包含一个或多个数组的数组
* 获取数组的长度
  * count() 函数用于返回数组的长度（元素的数量）
* 遍历数值数组
  *遍历并打印数值数组中的所有值，可以使用 for 循环
* 遍历关联数组
 * 遍历并打印关联数组中的所有值，可以使用 foreach 循环
 
 ```php
 
 <?php
$cars=array("Volvo","BMW","Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
?>


<?php
$cars=array("Volvo","BMW","Toyota");
echo count($cars);
?>

<?php
$cars=array("Volvo","BMW","Toyota");
$arrlength=count($cars);
 
for($x=0;$x<$arrlength;$x++)
{
    echo $cars[$x];
    echo "<br>";
}
?>


<?php
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
 
foreach($age as $x=>$x_value)
{
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}
?>
 
 
 ```

### 数组排序

* 排序函数
  * sort() - 对数组进行升序排列
  * rsort() - 对数组进行降序排列
  * asort() - 根据关联数组的值，对数组进行升序排列
  * ksort() - 根据关联数组的键，对数组进行升序排列
  * arsort() - 根据关联数组的值，对数组进行降序排列
  * krsort() - 根据关联数组的键，对数组进行降序排列

```php

<?php
$numbers=array(4,6,2,22,11);
sort($numbers);
?>

//其他函数
....


```


