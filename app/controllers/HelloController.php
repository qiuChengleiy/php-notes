<?php

namespace app\controllers;
use yii\web\Controller;
use yii\web\Cookie;

//控制器创建
class HelloController extends Controller {
	public function actionIndex() {
		$request = \YII::$app->request;  //\YII全局类  $app应用主体   request请求组件 

		$get_data = $request->get('id',20);  // 获取get请求 如果没有传来id则默认为 20
		$request->post('id',20)   // 获取post请求

		if($request->isGet) {  //判断请求方式 当前为get
			echo 'get request';
		}else if($request->isPost){
			echo 'post method';  // post  方式
		};

		echo $request->userIp;   //获取用户的IP地址

		echo "$get_data";

		echo "hello world";


		$res = \YII::$app->response;  //响应组件

		$res->statusCode = '200'; // 状态码设置

		$res->headers->add('progma','no-cache');  //添加缓存   对头部的设置

		$res->headers->set('progma','max-age=5');  // 设置缓存五分钟

		$res->headers->remove('progma'); // 移除

		$res->headers->add('location','http://www.baidu.com');  // 跳转  状态码需要301
		//或者
		$this->redirect('http://www.163.com');  //跳转

		// 文件下载
		$res->headers->add('content-disposition','attachment; filename="1.html"');  //当请求图片或者其他文件时 保存指定格式并下载

		 //或者
		$res->sendFile('./favicon.ico');  //文件下载   从根web目录下开始找



		 //session  组件
		 $session = \YII::$app->session;  
		 $session->open();  //打开session

		 if($session->isActive){  //判断是否开启session
		 	echo 'session is statrt';
		 }

		 //使用session  session 可以识别不同的浏览器的 如果是其他浏览器访问 是拿不到的那个值的 基于cookie-session_id
		$session->set('user','xiaohong');  //设置
		$session['user'] = 'xiaoming'; //设置

		 echo $session->get('user'); //获取

		$session->remove('user'); //移除

		echo $session->get('user'); //获取
		unset($session['user']);

		 //cookie组件
		 //响应里的
		  $cookies = \YII::$app->response->cookies;

		  $cookie_data = array('name'=>'user' ,'value'=>'xiaoren');


		  $cookies->add(new Cookie($cookie_data));  //添加一条cookie  不显示 因为浏览器缓存问题; 并且数据是加密的

		 // //修改 直接修改数据就好了
 		 $cookie_data = array('name'=>'user' ,'value'=>'lisi');

 		// //删除cookie
 		 $cookies->remove('user');


 		//请求体中

		 $cookies = \YII::$app->request->cookies;
		 $val = $cookies->getValue('users',20);  //如果没有找到那个字段 则用默认值20代替

		 echo $val; // xiaoren


	}
}







?>