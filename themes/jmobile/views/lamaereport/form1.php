<?php if (Yii::app()->session["username"] != null) { ?>
    <div class="panel" style="margin-left: 10px;">
        <?php echo CHtml::form(); ?>
        <div class="ui-body ui-body-b ui-corner-all">
            <div >ฟอร์มค้นหาข้อมูล</div>
            <hr />

            <div>วันที่เริ่มต้น:</div>
            <div>     
                <input type="text" name="datestart" id="datestart" size="40" readonly />

            </div>

            <div>วันที่สิ้นสุด:</div>
            <div>
                <input type="text" name="dateend" id="dateend" size="40" readonly />

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
    //Calendar Date Picker
    $(function() {
        // Jquery calendarsPicker Plugin เสริม
        $('#datestart').calendarsPicker({calendar: $.calendars.instance('thai', 'th'), dateFormat: 'yyyy-mm-dd'});
        $('#dateend').calendarsPicker({calendar: $.calendars.instance('thai', 'th'), dateFormat: 'yyyy-mm-dd'});
    });


    //function เรียกหน้ารายงาน
    function url() {
        convertdate(); //แปลง พ.ศ. ใน textbox ให้เป็น ค.ศ. แล้วส่งตัวแปร ไปกับ url
        window.open('http://192.168.1.252/ireport/themes/jmobile/views/lamaereport/stimulrep/stimulsoft//index.php?stimulsoft_client_key=ViewerFx&stimulsoft_report_key=<?= $point; ?>.mrt&datestart=' + datestart + '&dateend=' + dateend);
    }


    function convertdate() { //แปลง พ.ศ. 2556-12-01 ใน textbox ให้เป็น ค.ศ. 2013-12-01
        d1 = $('#datestart').val();
        var arr1 = d1.split("-");
        s1 = arr1[0] - 543;
        s2 = arr1[1];
        s3 = arr1[2];
        datestart = s1 + '-' + s2 + '-' + s3;

        d2 = $('#dateend').val();
        var arr2 = d2.split("-");
        m1 = arr2[0] - 543;
        m2 = arr2[1];
        m3 = arr2[2];
        dateend = m1 + '-' + m2 + '-' + m3;

    }
    
</script>

