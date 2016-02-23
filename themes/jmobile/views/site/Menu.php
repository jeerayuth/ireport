<?php if (Yii::app()->session["username"] != null) { ?>
    <ul data-role="listview" data-inset="true" data-theme="c" data-dividertheme="b">
        <li><a href="<?php echo Yii::app()->baseUrl; ?>/index.php?r=lamaereport/showreport&dep_id=1">รายงานเวชระเบียน</a></li>
        <li><a href="<?php echo Yii::app()->baseUrl; ?>/index.php?r=lamaereport/showreport&dep_id=2">รายงานผู้ป่วยนอก</a></li>

		<li><a href="<?php echo Yii::app()->baseUrl; ?>/index.php?r=lamaereport/showreport&dep_id=3">รายงานผู้ป่วยเบาหวาน</a></li>

		<li><a href="<?php echo Yii::app()->baseUrl; ?>/index.php?r=lamaereport/showreport&dep_id=4">รายงานผู้ป่วยความดัน</a></li>

        <li><a href="<?php echo Yii::app()->baseUrl; ?>/index.php?r=lamaereport/showreport&dep_id=5">รายงานคลินิค COPD</a></li>	
        <li><a href="<?php echo Yii::app()->baseUrl; ?>/index.php?r=lamaereport/showreport&dep_id=6">รายงานคลินิค Asthma</a></li>
        <li><a href="<?php echo Yii::app()->baseUrl; ?>/index.php?r=lamaereport/showreport&dep_id=7">รายงานอุบัติเหตุฉุกเฉิน</a></li>								
        <li><a href="<?php echo Yii::app()->baseUrl; ?>/index.php?r=lamaereport/showreport&dep_id=8">รายงานห้องยา</a></li>
        <li><a href="<?php echo Yii::app()->baseUrl; ?>/index.php?r=lamaereport/showreport&dep_id=9">รายงานเวชปฏิบัติครอบครัว</a></li>
        <li><a href="<?php echo Yii::app()->baseUrl; ?>/index.php?r=lamaereport/showreport&dep_id=10">รายงานผู้ป่วยใน</a></li>
        <li><a href="<?php echo Yii::app()->baseUrl; ?>/index.php?r=lamaereport/showreport&dep_id=11">รายงานแพทย์แผนไทย</a></li>
        <li><a href="<?php echo Yii::app()->baseUrl; ?>/index.php?r=lamaereport/showreport&dep_id=12">รายงานทันตกรรม</a></li>  
        <li><a href="<?php echo Yii::app()->baseUrl; ?>/index.php?r=lamaereport/showreport&dep_id=13">รายงานกายภาพบำบัด</a></li>
        <li><a href="<?php echo Yii::app()->baseUrl; ?>/index.php?r=lamaeuser/logout" >ออกจากระบบ</a></li>	
    </ul>

<?php } else { ?>
    <div>
        <h4>Warning!</h4>
        !! กรุณาล็อกอินเข้าสู่ระบบด้วยครับ 
    </div>
<?php } ?>
