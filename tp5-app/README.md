## ThinkPHP 5.0 学习笔记
===============

## 目录结构

初始的目录结构如下：

~~~
www  WEB部署目录（或者子目录）
├─application           应用目录
│  ├─common             公共模块目录（可以更改）
│  ├─module_name        模块目录
│  │  ├─config.php      模块配置文件
│  │  ├─common.php      模块函数文件
│  │  ├─controller      控制器目录
│  │  ├─model           模型目录
│  │  ├─view            视图目录
│  │  └─ ...            更多类库目录
│  │
│  ├─command.php        命令行工具配置文件
│  ├─common.php         公共函数文件
│  ├─config.php         公共配置文件
│  ├─route.php          路由配置文件
│  ├─tags.php           应用行为扩展定义文件
│  └─database.php       数据库配置文件
│
├─public                WEB目录（对外访问目录）
│  ├─index.php          入口文件
│  ├─router.php         快速测试文件
│  └─.htaccess          用于apache的重写
│
├─thinkphp              框架系统目录
│  ├─lang               语言文件目录
│  ├─library            框架类库目录
│  │  ├─think           Think类库包目录
│  │  └─traits          系统Trait目录
│  │
│  ├─tpl                系统模板目录
│  ├─base.php           基础定义文件
│  ├─console.php        控制台入口文件
│  ├─convention.php     框架惯例配置文件
│  ├─helper.php         助手函数文件
│  ├─phpunit.xml        phpunit配置文件
│  └─start.php          框架入口文件
│
├─extend                扩展类库目录
├─runtime               应用的运行时目录（可写，可定制）
├─vendor                第三方类库目录（Composer依赖库）
├─build.php             自动生成定义文件（参考）
├─composer.json         composer 定义文件
├─LICENSE.txt           授权说明文件
├─README.md             README 文件
├─think                 命令行入口文件
~~~

> router.php用于php自带webserver支持，可用于快速测试
> 切换到public目录后，启动命令：php -S localhost:8888  router.php
> 上面的目录结构和名称是可以改变的，这取决于你的入口文件和配置参数。

## 项目启动

* php -S localhost:8000 router.php       // cd /public

* nohup php -S localhost:8000 router.php  &    //  不挂断程序方式启动
* appending output to nohub.out
* ps aux | grep to nohub.out    //  查看进程状态

## 本地域名配置

* sudo vi /etc/hosts 

* Include /private/etc/apache2/extra/httpd-vhosts.conf   修改配置文件httpd-vhosts.conf 

* 再次修改hosts文件 
```php

##
# Host Database
#
# localhost is used to configure the loopback interface
# when the system is booting.  Do not change this entry.
##
127.0.0.1	o2o.singna.com
255.255.255.255	broadcasthost
::1             o2o.singna.com

```

* sudo /usr/sbin/apachectl restart  重启服务


## 命令行think命令

* php think make:controller index/Test

* php think build   //模块创建  需要在build.php中自己定义

## 访问

* localhost:8000/index.php/模块/控制器/控制器的方法  //找到对应模块的控制器和方法


## 数据库遇到的坑

* The server requested authentication method unknown to the client

```php

sudo vim /etc/mysql/my.cnf  在最下面新增如下代码：

[mysqld]
default_authentication_plugin= mysql_native_password


//创建新的用户 使用创建的用户连接 

CREATE USER 'admin'@'localhost' IDENTIFIED WITH mysql_native_password BY 'yourpassword';
GRANT ALL PRIVILEGES ON *.* TO 'admin'@'localhost' WITH GRANT OPTION;
CREATE USER 'admin'@'%' IDENTIFIED WITH mysql_native_password BY 'yourpass';
GRANT ALL PRIVILEGES ON *.* TO 'admin'@'%' WITH GRANT OPTION;
#
CREATE DATABASE IF NOT EXISTS `yourdb` COLLATE 'utf8_general_ci' ;
GRANT ALL ON `yourdb`.* TO 'admin'@'%' ;
FLUSH PRIVILEGES ;

```


## 视图

```php

//控制器下返回视图方法:

return $this->fetch(); 

//视图分块
1.指定当前为引入的根目录

// index/index.html
{include file="public/heads"}  //不能有空格


//url 加载 
{:url('index/welcome')}  //加载当前模块下的index控制器下的welcome方法对应的视图


```


## 数据模型

```php

//获取请求数据 : 

request()->post()
 $data = input('post.');

//valicate 数据验证规则

// validate/Category.php
namespace app\admin\validate;
use think\Validate;

class Category extends Validate
{
		protected $rule = [
		['id','number','id必须为数字'],
		['qual','require|max:5','质量字段必须传递|不超过5个字符'],    // require必要字段    max 最大限度
		['fenlei','number|in:0,1,2','值为数字|必须在0,1,2范围内']
	];

	protected $scene = [  //场景设置
		'add' => ['qual','id'],   //添加的时候验证 qual字段
		'test' => ['fenlei'],  //test的时候 验证 fenlei字段
	]; //分号不能省略
}




// controller/Category.php
 public function save(Request $request)
    {
       // $data = request()->post();  //

        $data = input('post.');

        //验证
        $validate = validate('Category');
         if(!$validate->scene('add')->check($data)) {
            $this->error($validate->getError());
         }


       // return $data;
    }



// model 

	protected $autoWriteTimestamp = true;   //自动写入时间戳  需要字段 create_time update_time;   //config文件里也可以更改

	public function add($data) {
       		 // $data['fenlei'] = '123';
       		 // $data['qual'] = 'dada';
			return $this->save($data);   //  数据入库
	}

	public function select() {
		$data = [
			'qual' => 'dad',
		];

		$order = [
			'id' => 'desc',
		];

		return $this->where($data)    //查询数据
					->order($order)
					->select();
	}


//controller : add
  model('Category')->add($data);   // 实例化数据表


//controller : list

  public function list()
    {
        $res = model('Category')->select();

        return $this->fetch('',['res' => $res]);   //模板传入数据
    }


//list.html
<!-- 后台传来的数据 -->
{volist name="res" id="vo"}

<div>{$vo.qual}</div>

{/volist}



//上述也可以改成 公共调用的对象

   // 公共对象
    private $obj;
    public function _initialize() {
        $this->obj = model('Category');
    }

如下调用:
     $res = $this->obj->select();



{$vo.create_time|date='Y-m-d H:i:s',###} ]  // 格式化时间

// datebase.php中 也有时间戳转化


 'datetime_format' => 'Y-m-d H:i:s',



```


































