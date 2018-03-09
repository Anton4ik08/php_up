<?php


namespace console\models;

use Yii;

/**
 * @author anton
 */
class Subscriber {
    
    public static function getList()
    {
        $sql = 'SELECT * FROM subscriber';
        return Yii::$app->db->createCommand($sql)->queryAll();
    }
}
