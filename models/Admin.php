<?php
namespace app\models;

use yii\base\Model;

Class  Admin extends Model{
	
	public  $name;
	public  $email;
	public  $password;
	
	
	public function rules(){
		
		return[
			[['name','email'],'required'],
			//['email','email'],
		];
		
		
	}
	
}










?>