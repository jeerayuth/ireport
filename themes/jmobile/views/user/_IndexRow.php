
<ul data-role="listview" data-split-icon="gear" data-split-theme="d">
			<li><a href="index.php?r=user/form&id=<?php echo $data->id; ?>">
				
				<h3>
					<?php echo $data->fullname; ?>
				</h3>
				<p>ชื่อผู้ใช้:<?php echo $data->username; ?>,
				       อีเมล์: <?php echo $data->email; ?>	,
				     ประเภท: <?php echo $data->user_type;?>
				</p>
				<p>
					วันที่สร้าง : <?php echo $data->created;?>,
					ล็อกอินล่าสุด: <?php echo $data->last_login;?>,
					สถานะ: <?php echo $data->status;?>
				</p>
			</a>
			
			<a href="index.php?r=user/form&id=<?php echo $data->id; ?>" data-rel="dialog" data-transition="slideup">ปิดการใช้งานผู้ใช้งาน
			</a>
			
			</li>
</ul>		
<br/>
