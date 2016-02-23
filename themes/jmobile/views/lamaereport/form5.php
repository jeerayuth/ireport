<?php if (Yii::app()->session["username"] != null) { ?>
    <div class="panel" style="margin-left: 10px;">
        <?php echo CHtml::form(); ?>
        <div class="ui-body ui-body-b ui-corner-all">
            <div >ฟอร์มค้นหาข้อมูล</div>
            <hr />

            <div>ช่วงอายุ:</div>
            <div>     
                <input type="text" name="agestart" id="agestart" size="40"  />

            </div>

            <div>ถึง:</div>
            <div>
                <input type="text" name="ageend" id="ageend" size="40"  />

            </div>

            <div>

            </div>
            <div>
                <?php echo CHtml::button("ค้นหา", array('title' => 'ค้นหา', 'onclick' => 'url()')); ?>

                <?php
                echo CHtml::button('ย้อนกลับ', array(
                    'name' => 'btnBack',
                    'data-theme' => 'e',
                    'onclick' => "history.go(-1)",
                        )
                );
                ?>


            </div>

        </div>
        <?php echo CHtml::endForm(); ?>
    </div>

<?php } else { ?>
    <div>
        <h4>Warning!</h4>
        !! กรุณาล็อกอินเข้าสู่ระบบด้วยครับ 
    </div>
<?php } ?>

<script language="javascript">

    //function เรียกหน้ารายงาน
    function url() {
        
        agestart = $('#agestart').val();
        ageend = $('#ageend').val();
        window.open('http://192.168.1.252/ireport/themes/jmobile/views/lamaereport/stimulrep/stimulsoft//index.php?stimulsoft_client_key=ViewerFx&stimulsoft_report_key=<?= $point; ?>.mrt&agestart=' + agestart + '&ageend=' + ageend);
    
    }



</script>

