<?php

namespace app\controllers;
use yii\web\Controller;


class ViewController extends Controller {
	public $layout = 'view';  // 显示视图要到对应的布局文件中 $content  主要解决代码重复的问题

	public function actionIndex () {
		$data = array();
		$data['hello'] = 'hello yii';
		$data['script'] = '<script>alert(1)</script>';


		return $this->render('about',$data);  //渲染视图方法  /views/view/index.php  data为数组 
	}
	
}








