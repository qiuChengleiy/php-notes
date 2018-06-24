<?php

namespace app\admin\controller;

use think\Controller;
use think\Request;
use think\Validate;



class Category extends Controller
{
    // 公共对象
    private $obj;
    public function _initialize() {
        $this->obj = model('Category');
    }


    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        return $this->fetch();
    }

    /**
     * 添加
     *
     * @return \think\Response
     */
    public function add()
    {
        return $this->fetch();
    }

     /**
     * 添加
     *
     * @return \think\Response
     */
    public function list()
    {
        $res = $this->obj->select();

        $sql = $this->obj->first();

        return $this->fetch('',['res' => $res]);   //模板传入数据
    }

    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    public function create()
    {
        //
    }

    /**
     * add
     *
     * @param  \think\Request  $request
     * @return \think\Response
     */
    public function save(Request $request)
    {
       // $data = request()->post();  //

        $data = input('post.');

        //验证
        $validate = validate('Category');
         if(!$validate->scene('add')->check($data)) {
            $this->error($validate->getError());
         }
       
        model('Category')->add($data);   // 实例化数据表


        return "添加成功";
    }

      /**
     * select
     *
     * @param  \think\Request  $request
     * @return \think\Response
     */
    public function select(Request $request)
    {
       $res = model('Category')->select();

        print_r($res);
    }

    /**
     * 显示指定的资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function read($id)
    {
        //
    }

    /**
     * 显示编辑资源表单页.
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * 保存更新的资源
     *
     * @param  \think\Request  $request
     * @param  int  $id
     * @return \think\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * 删除指定资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function delete($id)
    {
        //
    }
}
