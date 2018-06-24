<?php

namespace app\actions;
use yii\base\Action;

require_once '../include.php';




class HelloAction extends Action
{
  
    public function run()
    {
        return dirname(_FILE_) . '.' . '/' . 'actions';
    }
}

   namespace app\controllers;
   use yii\web\Controller;
   use yii\base\Action;



   class ActionsController extends Controller {
      public function actions() {
        // 独立动作
         return [
        'error' => [
            'class' => 'yii\web\ErrorAction',
        ],
        'captcha' => [
            'class' => 'yii\captcha\CaptchaAction',
            'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
        ],
        // 直接引用 hello的操作
        'hello'=>[
            'class'=>'app\actions\HelloAction'    // 注意文件的路径
        ]
    ];
      }

      public function actionIndex() {
         $message = "index action of the ExampleController";
         
         return $this->render("example",[
            'message' => $message
         ]);
      }

      public function actionTest($id) {
         return "Hello world! . $id";
      }
   }
?>