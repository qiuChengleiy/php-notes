### 数据类型

* 字符串
  * 一个字符串是一串字符的序列
*  整型
  * 整数必须至少有一个数字 (0-9)
  * 整数不能包含逗号或空格
  * 整数是没有小数点的
  * 整数可以是正数或负数
  * 整型可以用三种格式来指定：十进制， 十六进制（ 以 0x 为前缀）或八进制（前缀为 0）。
* 浮点型
  * 浮点数是带小数部分的数字，或是指数形式。
* 布尔型
  * 布尔型可以是 TRUE 或 FALSE。
* 数组
  * 数组可以在一个变量中存储多个值。
* 对象
  * 对象数据类型也可以用于存储数据。
* null
  * null 值表示变量没有值。null 是数据类型为 null 的值。

```php

//字符串
<?php 
$x = "Hello world!";
echo $x;
echo "<br>"; 
$x = 'Hello world!';
echo $x;
?>

//整数型
<?php 
$x = 5985;
var_dump($x);
echo "<br>"; 
$x = -345; // 负数 
var_dump($x);
echo "<br>"; 
$x = 0x8C; // 十六进制数
var_dump($x);
echo "<br>";
$x = 047; // 八进制数
var_dump($x);
?>

//浮点型
<?php 
$x = 10.365;
var_dump($x);
echo "<br>"; 
$x = 2.4e3;
var_dump($x);
echo "<br>"; 
$x = 8E-5;
var_dump($x);
?>

//bool
$x=true;
$y=false;

//数组
<?php 
$cars=array("Volvo","BMW","Toyota");
var_dump($cars);
?>

//对象
<?php
class Car
{
  var $color;
  function __construct($color="green") {
    $this->color = $color;
  }
  function what_color() {
    return $this->color;
  }
}
?>

```

### 常量

常量是一个简单值的标识符。该值在脚本中不能改变

* 该函数有三个参数:
  * name：必选参数，常量名称，即标志符。
  * value：必选参数，常量的值。
  * case_insensitive ：可选参数，如果设置为 TRUE，该常量则大小写不敏感。默认是大小写敏感的。
* 常量是全局的
  * 常量在定义后，默认是全局变量，可以在整个运行的脚本的任何地方使用。



```php

<?php
// 区分大小写的常量名
define("GREETING", "baidu");
echo GREETING;    // 输出 "baidu"

//不区分大小写
define("GREETING", "baidu", true);

?>

<?php
define("GREETING", "baidu");
 
function myTest() {
    echo GREETING;
}
 
myTest();    // 输出 "baidu"
?>

```

### 字符串变量

字符串变量用于包含有字符的值

* (.)用于拼接字符串
* strlen() 返回字符串长度
* strpos() 用于在字符串内查找一个字符或一段指定的文本
  * 如 ： echo strpos("Hello world!","world"); 查找“world"
* 常用字符串函数
  * echo() 输出一个或多个字符串。
  * crypt() 单向的字符串加密法（hashing）。
  * explode() 把字符串打散为数组。
  * fprintf() 把格式化的字符串写入到指定的输出流。
  * html_entity_decode() 把 HTML 实体转换为字符。
  * htmlentities() 把字符转换为 HTML 实体。
  * htmlspecialchars_decode() 把一些预定义的 HTML 实体转换为字符。
  * htmlspecialchars() 把一些预定义的字符转换为 HTML 实体。
  * implode() 返回一个由数组元素组合成的字符串。
  * join() implode() 的别名。
  * lcfirst() 把字符串中的首字符转换为小写。
  * localeconv() 返回本地数字及货币格式信息
  * ltrim() 移除字符串左侧的空白字符或其他字符。
  * nl_langinfo() 返回指定的本地信息
  * parse_str() 把查询字符串解析到变量中。
  * print()输出一个或多个字符串
  * printf() 输出格式化的字符串。
  * str_ireplace() 替换字符串中的一些字符（大小写不敏感）。
  * str_pad() 把字符串填充为新的长度。
  * str_repeat() 把字符串重复指定的次数。
  * str_replace() 替换字符串中的一些字符（大小写敏感）。
  * str_shuffle() 随机地打乱字符串中的所有字符。
  * str_split() 把字符串分割到数组中。
  * str_word_count() 计算字符串中的单词数。
  * strcasecmp() 比较两个字符串（大小写不敏感）
  * strcmp() 比较两个字符串（大小写敏感）。
  * strstr() 查找字符串在另一字符串中的第一次出现
  * strcoll() 比较两个字符串（根据本地设置）。
  * strip_tags() 剥去字符串中的 HTML 和 PHP 标签。
  * strrev() 反转字符串
  * strtolower() 把字符串转换为小写字母。
  * strtoupper() 把字符串转换为大写字母。
  * substr() 返回字符串的一部分。
  * substr_replace() 把字符串的一部分替换为另一个字符串。
  * trim() 移除字符串两侧的空白字符和其他字符
  * ucfirst() 把字符串中的首字符转换为大写。
  * ucwords() 把字符串中每个单词的首字符转换为大写。
  * vprintf() 输出格式化的字符串。
  * vsprintf() 把格式化字符串写入变量中。


  
  
  
  
  
  
  
  
  
  
  
  
  
