<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\Test;

class TestController extends Controller {
    
    public function actionIndex()
    {
         $max = Yii::$app->params['maxNewsInList'];
         
        $list = Test::getNewsList($max);
        
        return $this ->render('index',['list' => $list,]);
    }
    
    public function actionMail()
    {
        
        $result = Yii::$app->mailer->compose()
                ->setFrom('anton4ik08@gmail.com')
                ->setTo('anton4ik08@mail.ru')
                ->setSubject('Тест')
                ->setTextBody('Hello World PHP YII2')
                ->setHtmlBody('<b>Hello World PHP YII2</b>')
                ->send();
        var_dump($result);
        die;
    }
    public function actionView($id)
    {
        
        $item = Test::getItem($id);
        
        return $this -> render('view',[
            'item' => $item
        ]);
    }
}

