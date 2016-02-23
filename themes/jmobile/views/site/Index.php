<?php if (Yii::app()->session["username"] == null) { ?>

    <div class="panel" style="margin-left: 10px;">
        <?php echo CHtml::form(array("lamaeuser/checkLogin")); ?>
        <div class="ui-body ui-body-b ui-corner-all">
		<div >สมาชิก ล็อกอิน</div>
		<hr />

            <div>ชื่อผู้ใช้:</div>
            <div><input class="textbox" type="text" name="username" /></div>
            <div>รหัสผ่าน:</div>
            <div><input class="textbox" type="password" name="password" /></div>
            <div><input type="submit" value="เข้าสู่ระบบ" class="button" /></div>
            <br /><br />
           
        </div>
        <?php echo CHtml::endForm(); ?>
    </div>

<?php } else { ?>
    <div>
        <?php $this->renderPartial('menu');  ?>
    </div>
<?php } ?>

