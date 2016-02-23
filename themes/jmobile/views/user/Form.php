<div class="ui-body ui-body-b ui-corner-all">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'user-form',
        'enableAjaxValidation' => true,
        'htmlOptions' => array("data-ajax" => "false"),
    ));
    ?>

    <h5>จัดการข้อมูล ผู้ใช้งานระบบ</h5>     

    <!-- Error Summary -->
    <?php echo $form->errorsummary($model); ?>


    <label for="basic">
        <?php echo $form->labelEx($model, 'fullname'); ?>
    </label>
    <?php
    echo $form->textField($model, 'fullname', array('maxlength' => 255,
    ));
    ?>


    <label for="basic">
        <?php echo $form->labelEx($model, 'username'); ?>
    </label>
    <?php
    echo $form->textField($model, 'username', array('maxlength' => 45));
    ?>


    <label for="basic">
        <?php echo $form->labelEx($model, 'password'); ?>
    </label>
    <?php
    echo $form->textField($model, 'password', array('maxlength' => 255));
    ?>


    <label for="basic">
        <?php echo $form->labelEx($model, 'email'); ?>
    </label>
    <?php
    echo $form->textField($model, 'email', array('maxlength' => 45));
    ?>


    <label for="basic">
        <?php echo $form->labelEx($model, 'user_type'); ?>
    </label>
    <?php
    echo $form->textField($model, 'user_type');
    ?>


    <div class="controls">
        <?php
        if (Yii::app()->session["user_type"] == "admin") {
            echo CHtml::submitButton("บันทึก", array("class" => "button button-add", "data-theme" => "b"));
        } else {
            echo CHtml::submitButton("บันทึก", array("class" => "button button-add", "data-theme" => "b", "disabled" => "true"));
        }
        ?>

        <a href="index.php?r=user" data-role="button"  data-theme="e">ย้อนกลับ</a>
    </div>


    <?php $this->endWidget(); ?>
</div>




