### 变量

变量好比一个储存信息的容器

```php

<?php
$x=5;
$y=6;
$z=$x+$y;
echo $z;
?>

```

* PHP 变量规则：
  * 变量以 $ 符号开始，后面跟着变量的名称
  * 变量名必须以字母或者下划线字符开始
  * 变量名只能包含字母数字字符以及下划线（A-z、0-9 和 _ ）
  * 变量名不能包含空格
  * 变量名是区分大小写的（$y 和 $Y 是两个不同的变量）
  
### 作用域

```php

<?php 
$x=5; // 全局变量 

function myTest() 
{ 
    $y=10; // 局部变量 
    echo "<p>测试函数内变量:<p>"; 
    echo "变量 x 为: $x"; 
    echo "<br>"; 
    echo "变量 y 为: $y"; 
}  

myTest(); 

echo "<p>测试函数外变量:<p>"; 
echo "变量 x 为: $x"; 
echo "<br>"; 
echo "变量 y 为: $y"; 
?>

```

* global 关键字用于函数内访问全局变量

```php

<?php
$x=5;
$y=10;
 
function myTest()
{
    global $x,$y;
    $y=$x+$y;
}
 
myTest();
echo $y; // 输出 15
?>

```

PHP 将所有全局变量存储在一个名为 $GLOBALS[index] 的数组中。 index 保存变量的名称。这个数组可以在函数内部访问，也可以直接用来更新全局变量

```php

<?php
$x=5;
$y=10;
 
function myTest()
{
    $GLOBALS['y']=$GLOBALS['x']+$GLOBALS['y'];
} 
 
myTest();
echo $y;
?>

```

* Static 作用域

当一个函数完成时，它的所有变量通常都会被删除。然而，有时候您希望某个局部变量不要被删除。
要做到这一点，请在您第一次声明变量时使用 static 关键字：

* 参数作用域

参数是通过调用代码将值传递给函数的局部变量。

```php

<?php
function myTest($x)
{
    echo $x;
}
myTest(5);
?>

```

### 超级全局变量

PHP中预定义了几个超级全局变量（superglobals） ，这意味着它们在一个脚本的全部作用域中都可用。 你不需要特别说明，就可以在函数及类中使用。
* PHP 超级全局变量列表:
  * $GLOBALS 
  * $_SERVER
  * $_REQUEST
  * $_POST
  * $_GET
  * $_FILES
  * $_ENV
  * $_COOKIE
  * $_SESSION
  
```php

<?php 

//$GLOBALS 是PHP的一个超级全局变量组，在一个PHP脚本的全部作用域中都可以访问

$x = 75; 
$y = 25;
 
function addition() 
{ 
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y']; 
    
}
 
addition(); 
echo $z; 
?>

//$_SERVER 是一个包含了诸如头信息(header)、路径(path)、以及脚本位置(script locations)等等信息的数组。

<?php 
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
?>


```

### 相关参数

* $_SERVER['PHP_SELF']

当前执行脚本的文件名，与 document root 有关。例如，在地址为 http://example.com/test.php/foo.bar 的脚本中使用 $_SERVER['PHP_SELF'] 将得到 /test.php/foo.bar。__FILE__ 常量包含当前(例如包含)文件的完整路径和文件名。 从 PHP 4.3.0 版本开始，如果 PHP 以命令行模式运行，这个变量将包含脚本名。之前的版本该变量不可用。

* $_SERVER['SERVER_ADDR']

当前运行脚本所在的服务器的 IP 地址。

* $_SERVER['SERVER_NAME']

当前运行脚本所在的服务器的主机名。如果脚本运行于虚拟主机中，该名称是由那个虚拟主机所设置的值决定。

* $_SERVER['REQUEST_METHOD']

访问页面使用的请求方法；例如，"GET", "HEAD"，"POST"，"PUT"。

* $_SERVER['REQUEST_TIME']

请求开始时的时间戳。

* $_SERVER['QUERY_STRING']

query string（查询字符串），如果有的话，通过它进行页面访问。

* $_SERVER['HTTP_ACCEPT']

当前请求头中 Accept: 项的内容，如果存在的话

* $_SERVER['HTTP_HOST']

当前请求头中 Host: 项的内容，如果存在的话。

* $_SERVER['REMOTE_ADDR']

浏览当前页面的用户的 IP 地址。

* $_SERVER['REMOTE_PORT']

用户机器上连接到 Web 服务器所使用的端口号。

* $_SERVER['SCRIPT_FILENAME']

当前执行脚本的绝对路径。

* $_SERVER['SERVER_PORT']

Web 服务器使用的端口。默认值为 "80"。如果使用 SSL 安全连接，则这个值为用户设置的 HTTP 端口。

* $_SERVER['SCRIPT_NAME']

包含当前脚本的路径。这在页面需要指向自己时非常有用。__FILE__ 常量包含当前脚本(例如包含文件)的完整路径和文件名。

* $_SERVER['SCRIPT_URI']

URI 用来指定要访问的页面。例如 "/index.html"

### $_REQUEST

PHP $_REQUEST 用于收集HTML表单提交的数据。

```php

<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
Name: <input type="text" name="fname">
<input type="submit">
</form>

<?php 
$name = $_REQUEST['fname']; 
echo $name; 
?>

</body>
</html>

```

### $_GET 和 $_POST

PHP $_GET 同样被广泛应用于收集表单数据，在HTML form标签的指定该属性："method="get"。

PHP $_POST 被广泛应用于收集表单数据，在HTML form标签的指定该属性："method="post"。


```php

<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
Name: <input type="text" name="fname">
<input type="submit">
</form>

<?php 
$name = $_POST['fname']; 
echo $name; 
?>

</body>
</html>

// $_GET 
....

```


### 魔术变量

* 解释
  * __LINE__ 的值就依赖于它在脚本中所处的行来决定
  * __FILE__ 总是包含一个绝对路径（如果是符号连接，则是解析后的绝对路径
  * __DIR__ 文件所在的目录。如果用在被包括文件中，则返回被包括的文件所在的目录。它等价于 dirname(__FILE__)。除非是根目录
  * __FUNCTION__ 返回该函数被定义时的名字
  * __CLASS__ 返回该类被定义时的名字
  * __TRAIT__ 实现了代码复用的一个方法
  * __METHOD__ 类的方法名
  * __NAMESPACE__ 当前命名空间的名称
  
```php
<?php
echo '这是第 " '  . __LINE__ . ' " 行';
?>

<?php
echo '该文件位于 " '  . __FILE__ . ' " ';
?>

<?php
echo '该文件位于 " '  . __DIR__ . ' " ';
?>

<?php
function test() {
    echo  '函数名为：' . __FUNCTION__ ;
}
test();
?>

<?php
class test {
    function _print() {
        echo '类名为：'  . __CLASS__ . "<br>";
        echo  '函数名为：' . __FUNCTION__ ;
    }
}
$t = new test();
$t->_print();
?>


<?php
function test() {
    echo  '函数名为：' . __METHOD__ ;
}
test();
?>

<?php
namespace MyProject;
 
echo '命名空间为："', __NAMESPACE__, '"'; // 输出 "MyProject"
?>






```



















