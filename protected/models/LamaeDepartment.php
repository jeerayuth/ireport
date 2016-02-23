<?php

class Department extends CActiveRecord {
	public static function model($className = __CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return "department";
	}

	
	public function attributeLabels()
	{
		return array(
			"name"		=> "ชื่อหน่วยงาน",
		);
	}


	public function rules(){
		return array(
			array('name','required'),
			array('name','safe', 'on' => 'search'),
			);
	}
	

	public static function getDropdown(){
		return CHtml::listData(Department::model()->findAll(),'id','name');
	}

	
}

?>