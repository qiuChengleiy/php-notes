<?php
namespace app\admin\model;

use think\Model;

class Category extends Model
{
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

	public function first() {
		$data = [
			'qual' => ['neq','dad'],   // nep 不等于
		];

		$order = [
			'create_time' => 'desc',
		];

		$result = $this->where($data)    //查询数据
					->order($order)
					->select();

		echo $this->getLastSql();  // 获取执行的sql 语句  只会输出上一句在执行的sql语句

		return $result;

	}
}