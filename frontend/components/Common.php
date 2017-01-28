<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 30.07.16
 * Time: 17:40
 */
namespace frontend\components;

use yii\base\Component;
use yii\helpers\Url;
use yii\helpers\BaseFileHelper;

Class Common extends Component {

    const EVENT_NOTIFY="notify_admin";

    public function sendmail($subject, $text, $emailfrom='aakafake@mail.ru', $nameFrom='Advert')
    {



        if(\Yii::$app->mail->compose()

            ->setFrom(['norad4720@yandex.ru' => 'Advert'])
                ->setTo([$emailfrom => $nameFrom])
                ->setSubject($subject)
                ->setTextBody($text)
                ->send());

        {
            $this->trigger(self::EVENT_NOTIFY);

            return true;
        }

    }

    public function notify_admin($event)
    {

       print "Notify Admin";
    }


    public static function getTitleAdvert($data)
    {

        return $data['bedroom'].'-х комнатная квартира';

    }


    public static function getImageAdvert($data,$general = true,$original = false){

        $image = [];
        $base=Url::base();
        if($general){

            $image[] = $base.'/uploads/adverts/'.$data['idadvert'].'/general/small_'.$data['general_image'];
        }
        else{
            $path = \Yii::getAlias("@frontend/web/uploads/adverts/".$data['idadvert']);
            $files = BaseFileHelper::findFiles($path);

            foreach($files as $file){
                if (strstr($file, "small_") && !strstr($file, "general")) {
                    $image[] = $base . '/uploads/adverts/' . $data['idadvert'] . '/' . basename($file);
                }
            }
        }

        return $image;
    }


    public static function substr($text, $start=0, $end=50){

        mb_substr($text,$start, $end);

    }


    public static function getType($row)
    {

        return ($row['sold']) ? 'Sold' : 'New';

    }


    public static function getUrlAdvert($row){

        return Url::to(['/main/main/view-advert', 'id' => $row['idadvert']]);
    }





}
