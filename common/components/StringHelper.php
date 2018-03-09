<?php

namespace common\components;

use Yii;


/**
 * Description of stringHelper
 *
 * @author anton
 */
class StringHelper
{
   
    private $limit;
    
    public function __construct() {
        
        $this ->limit = Yii::$app -> params['shortTextLimit'];
    }

    public function getShort($string, $limit = null)
    {
        
        if($limit === null){
            
            $limit = $this->limit;
        }
        $newString = explode(' ',$string);
        
        $stringArray =array();
        
        $count = 0;
        
        foreach ($newString as $world){
            
            if(($count += iconv_strlen($world)) < $limit){
                
                $stringArray[] = $world;
                
            }else{
                $WorldString = implode(' ',$stringArray) . '...';
                return $WorldString;
            }
        }
        //return substr($string,0,$limit);
    }
}
