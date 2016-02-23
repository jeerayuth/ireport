<div class="ui-body ui-body-b ui-corner-all">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'department-form',
        'enableAjaxValidation' => true,
        'htmlOptions' => array("data-ajax" => "false"),
    ));
    ?>

    <h5>จัดการข้อมูล แผนกที่ทำงาน</h5>     

    <!-- Error Summary -->
    <?php echo $form->errorsummary($model); ?>


    <label for="basic">
        <?php echo $form->labelEx($model, 'name'); ?>
    </label>
    <?php
    echo $form->textField($model, 'name', array('maxlength' => 255,
    ));
    ?>



    <div class="controls">
        <?php
        if (Yii::app()->session["user_type"] == "admin") {
            echo CHtml::submitButton("บันทึก", array("class" => "button button-add", "data-theme" => "b"));
        } else {
            echo CHtml::submitButton("บันทึก", array("class" => "button button-add", "data-theme" => "b", "disabled" => "true"));
        }
        ?>

        <a href="index.php?r=department" data-role="button"  data-theme="e">ย้อนกลับ</a>
    </div>


    <?php $this->endWidget(); ?>
</div>




