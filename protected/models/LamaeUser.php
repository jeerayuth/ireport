<?php

class LamaeUser extends CActiveRecord {
	public static function model($className = __CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return "lamaeuser";
	}

	
	public function attributeLabels()
	{
		return array(
			"fullname"		=> "ชื่อ-สกุล",
			"username"		=> "ชื่อผู้ใช้",
			"password"		=> "รหัสผ่าน",
			"email"			=> "อีเมล์",
			"created"		=> "วันที่สร้าง",
			"user_type"		=> "ประเภทผู้ใช้",
			"status"		=>	"สถานะปัจจุบัน"
		);
	}


	public function rules(){
		return array(
			array('fullname,username,password','required'),
			array('fullname,username','safe', 'on' => 'search'),
			);
	}

	
}

?>