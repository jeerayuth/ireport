<?php

class LamaeReport extends CActiveRecord {
	public static function model($className = __CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return "lamaereport";
	}

	
	public function attributeLabels()
	{
		return array(
			"name"		=> "ชื่อรายงาน",
			"created"	=> "วันที่สร้าง"
		);
	}


	public function rules(){
		return array(
			array('name','required'),
			array('name','safe', 'on' => 'search'),
			);
	}
	

	

	
}

?>