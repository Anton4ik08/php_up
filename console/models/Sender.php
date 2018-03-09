<?php


namespace console\models;

use Yii;

/**
 * @author anton
 */
class Sender {
    
    public static function run($listNews,$listSubscriber)
    {
        foreach ($listSubscriber as $subscriber){
            
            $result = Yii::$app->mailer->compose('/mailer/newslist',[
                'listNews' => $listNews,
            ])
                        ->setFrom('anton4ik08@gmail.com')
                        ->setTo($subscriber['email'])
                        ->setSubject('Тест')
                        ->send();
                var_dump($result);
        
        }
    }
}
