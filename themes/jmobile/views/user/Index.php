
<div class="content-top">
	<span class="content-topic">	
	<a href="index.php?r=user/form" data-role="button" data-theme="b">เพิ่มผู้ใช้ใหม่</a>
	<a href="index.php?r=site/main" data-role="button" data-theme="e">ย้อนกลับ</a>
	</span>
	
</div>


<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider' => $model,
	'itemView' => '_IndexRow',
	'template'=>"{items}\n{pager}",
)); ?>
