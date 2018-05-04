### 函数

* 函数创建

```php

<?php
function functionName()
{
    // 要执行的代码
}
?>


```

* 添加参数

```php

<?php
function writeName($fname)
{
    echo $fname . " Refsnes.<br>";
}
 
echo "My name is ";
writeName("Kai Jim");
echo "My sister's name is ";
writeName("Hege");
echo "My brother's name is ";
writeName("Stale");
?>


```

* 返回值

```php

<?php
function add($x,$y)
{
    $total=$x+$y;
    return $total;
}
 
echo "1 + 16 = " . add(1,16);
?>


```















