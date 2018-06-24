<?php

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
	];
}
