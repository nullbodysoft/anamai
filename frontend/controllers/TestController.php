<?php

namespace frontend\controllers;

class TestController extends \yii\web\Controller {

    public function actionIndex() {
        return $this->render('index');
    }

    public function actionTest1() {
        $a = 5;
        $b = 7;
        $sum = $a + $b;

        return $this->render('test1', ['sum' => $sum,'a'=>$a,'b'=>$b]);


        //echo 'ทดสอบ 1';
    }
    
    public function actionTest2($name=NULL,$lname=NULL){
        
        $info = "$name $lname";
        
        return $this->render('test2',['info'=>$info]);
        
        // echo "Your name is $name";
    }

}
