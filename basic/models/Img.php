<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "img".
 *
 * @property int $id
 * @property string $src
 * @property string $nameOfImg
 */
class Img extends ActiveRecord
{
    public static function tableName()
    {
        return 'img';
    }


    public function rules()
    {
        return [
            [['src', 'nameOfImg'], 'required'],
            [['src', 'nameOfImg'], 'string'],
        ];
    }


    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'src' => 'Src',
            'nameOfImg' => 'Name Of Img',
        ];
    }

    public static function GetAll(){
        $sql = "select src,nameOfImg from img";
        $command = Yii::$app->db->createCommand($sql)->queryAll();
        return $command;
    }

}
