<?php if(Yii::app()->session["username"] != null) { ?>
<?php
$this->widget('zii.widgets.CListView', array(
    'dataProvider' => $model,
    'itemView' => '_IndexRow',
    'template' => "{items}\n{pager}",
));
?>
<?php }else{ ?>
<div>
    <h4>Warning!</h4>
     !! กรุณาล็อกอินเข้าสู่ระบบด้วยครับ 
</div>
<?php } ?>