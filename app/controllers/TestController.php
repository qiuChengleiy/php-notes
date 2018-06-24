<?php

namespace app\controllers;

//基础类
use Yii;
use yii\web\Controller;
use yii\data\Pagination;
use app\models\Country;

class TestController extends Controller
{
    public function actionIndex()
    {
        //数据库查询 这里从表Country下找
        $query = Country::find();
        //查找 主键为AU的数据
        $country = Country::findOne('AU');
        //修改数据
        $country->name = 'U.S.A.';
        //保存它
        $country->save();

        //实例化一个pagination对象来帮助数据分页
        $pagination = new Pagination([
            //默认显示5行（条）数据
            'defaultPageSize' => 5,
            //总页数
            'totalCount' => $query->count(),
        ]);

        //查询数据，进行如下设置:
        //1.按照name字段进行查询
        //2.单请求只返回制定数据数目（这里设置了5行）
        $countries = $query->orderBy('name')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

         //将安全有效的信息反馈到index视图，
            //从数据库直接获取的信息默认为安全有效
        return $this->render('index', [
            'countries' => $countries,
            'pagination' => $pagination,
        ]);
    }

    //模块使用
    public function actionModule () {
        
       // 跳转
        return $this->redirect('index.php?r=admin/default/index');


    }

















}