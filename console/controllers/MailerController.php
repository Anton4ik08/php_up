<?php

namespace console\controllers;

use yii\helpers\Console;
use console\models\Sender;
use console\models\News;
use console\models\Subscriber;
/**
 * @author anton
 */
class MailerController extends \yii\console\Controller {
    //put your code here
    
    public function actionSend()
    {
        $listNews = News::getList();
        
        $listSubscriber = Subscriber::getList();
        
        $result = Sender::run($listNews,$listSubscriber);
        
        Console::output("\nEmails sent: {$count}");
        
        
    }
}
