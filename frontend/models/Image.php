<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 30.07.16
 * Time: 1:45
 */
namespace frontend\models;
use yii\base\Model;

Class Image extends Model {
    public static function getImageUrl(){
        return "image.png";
    }

}