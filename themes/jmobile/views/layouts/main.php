<!DOCTYPE html> 
<?php
ob_start();
session_start();
?>
<html>
    <head>
        <!-- ทำให้แสดงผล ภาษาไทยได้ ถูกต้อง -->
        <meta charset="utf-8">
        <!-- ทำให้การแสดงผลข้อมูล บนอุปกรณ์ต่างๆ เป็นไปอย่างถูกต้อง -->
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <title><?php echo CHtml::encode(Yii::app()->name); ?></title> 
        <link rel="stylesheet"  href="<?php echo Yii::app()->theme->baseUrl; ?>/css/jquery.mobile-1.1.1.css" />  
        <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/jqm-docs.css"/>
        <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/style_custom.css"/>

        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery-1.7.1.min.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jqm-docs.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.mobile-1.1.1.js"></script>

        <!--Calendar Date Picker -->
        <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/flora.calendars.picker.css"/>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.calendars.min.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.calendars.plus.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.calendars.picker.min.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.calendars.thai.min.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.calendars.thai-th.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.calendars.picker-th.js"></script>


    </script>

</head> 

<body> 

    <div data-role="page" class="type-index" >

        <!-- กำหนดให้ Fixed Header -->
        <div data-role="header" data-theme="a" data-position="fixed">
            <h1>ระบบรายงานสารสนเทศ โรงพยาบาลละแม</h1>
            <a href="<?php echo Yii::app()->baseUrl; ?>" data-icon="home" data-iconpos="notext" data-direction="reverse">หน้าหลัก</a>
            
        </div>
        <!-- /header -->

        <div data-role="content">
            <?php echo $content; ?>
        </div><!-- /content -->	

        <!--กำหนด Fixed Footer -->
        <div data-role="footer" class="footer-docs" data-theme="a" data-position="fixed">
            <center><p>&copy; 2013 ระบบรายงานสารสนเทศ โรงพยาบาลละแม พัฒนาโดย นายจีระยุทธ ปิ่นสุวรรณ งานสารสนเทศ โรงพยาบาลละแม จังหวัดชุมพร</p></center>
        </div><!-- /footer -->

    </div><!-- /page -->

    <script>
        $(document).ready(function() {
            $.mobile.ajaxEnabled = false; //ปิดการใช้งาน ajax ที่ทำให้หน้า Refresh
        });
    </script>
</body>
</html>