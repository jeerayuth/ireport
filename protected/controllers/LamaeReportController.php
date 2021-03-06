<?php

class LamaeReportController extends Controller {

    public function actionShowReport($dep_id = null) {
        //Function แสดงรายงานแยกตามหน่วยงาน
        $model = new LamaeReport();

        $criteria = new CDbCriteria();
        $criteria->compare("lamaedepartment_id", $dep_id);

        $cd = new CActiveDataProvider($model, array(
            "criteria" => $criteria,
			 'pagination'=>array( 'pageSize'=>15, )
        ));


        $this->render('showreport', array(
            'model' => $cd,
            'dep_id' => $dep_id
        ));
    }

    public function actionSelectForm($form = null, $pointer = null) {
        //Function เลือก รูปแบบฟอร์มค้นหาข้อมูล
        $view = null;
        $point = null;

        switch ($form) {
            case "form1" :                  //รูปแบบฟอร์มค้นหาแบบที่ 1 แบบระหว่างวันที่
                $view = $form;
                $point = $pointer;
                break;

            case "form2" :                  //รูปแบบฟอร์มค้นหาแบบที่ 2 แบบไม่มีวันที่
                $view = $form;
                $point = $pointer;
                break;

			 case "form3" :                  //รูปแบบฟอร์มค้นหาแบบที่ 3 แสดงวันที่ 
                $view = $form;
                $point = $pointer;
                break;

            default:
                $view = $form;
                $point = $pointer;
        }

        $this->render($view, array("point" => $point));
    }

}
?>