<?php

class LamaeUserController extends Controller {

    public function actionIndex() {

        $pageination = new CPagination();
        $pageination->setPageSize(10);

        $model = new CActiveDataProvider('LamaeUser');
        $model->setPagination($pageination);

        $this->render('index', array(
            'model' => $model
        ));
    }

    public function actionForm($id = null) {

        $model = new User();

        // Data For Edit
        if (!empty($id)) {
            $model = User::model()->findByPk($id);
        }

        if (!empty($_POST)) {

            // Data For Edit
            if (!empty($_POST['User']['id'])) {
                $model = User::model()->findByPk($id);
            }

            //Save
            $model->_attributes = $_POST['User'];
            $model->created = date('Y-m-d H:i:s');
            $model->password = md5($model->password);

            if ($model->save()) {
                //บันทึก User
                $this->redirect(array("index"));
            }
        }

        $this->render("Form", array(
            "model" => $model
        ));
    }

    public function actionCheckLogin() {
        $attributes = array();
        $attributes["username"] = $_POST["username"];
        $attributes["password"] = md5($_POST["password"]);
        $attributes["status"] = "active";

        $model = LamaeUser::model()->findByAttributes($attributes);

        if (!empty($model)) {
            Yii::app()->session["id"] = $model->id;
            Yii::app()->session["username"] = $model->username;
            Yii::app()->session["fullname"] = $model->fullname;
            Yii::app()->session["user_type"] = $model->user_type;

            $this->redirect(Yii::app()->homeUrl);
        } else {
            $this->redirect('index.php?r=/site/');
        }
    }


    public function actionLogout() {
        unset(Yii::app()->session["id"]);
        unset(Yii::app()->session["username"]);
        unset(Yii::app()->session["fullname"]);
        unset(Yii::app()->session["user_type"]);

        $this->redirect(Yii::app()->homeUrl);
    }

}

?>