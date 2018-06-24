<?php

namespace app\controllers;

//加载类
use Yii;
use yii\web\Controller;
use app\models\Form;

class FormController extends Controller {
    //创建操作
	public function actionForm() {
		//实例一个类
		$model = new Form;
		//Yii::$app 代表应用实例
		 //调用model继承内部Model类的实例方法 此处为post请求 收到的数据
		 //数据验证 如数据验证失败则：Model::hasErrors->TRUE
		 //获取错误信息：$model->getErrors()
		if ( $model->load(Yii::$app->request->post()) && $model->validate() ) {

			return $this->render('form',['model' => $model]);
		}else {

			return $this->render('entry',['model' => $model]);
		}
	}

}