<?php

namespace app\models;

use yii\base\Model;

class Form extends Model {
	public $name;
	public $email;
    
    //返回验证规则
	public function rules() {
		return [
			[['name','email'],'required'],
			['email','email'],
		];
	}
}




