<?php

namespace common\models;

use Yii;
use yii\web\UploadedFile;
/**
 * This is the model class for table "home".
 *
 * @property integer $home_id
 * @property string $name
 * @property string $address
 * @property string $img
 * @property integer $price
 * @property string $detail
 * @property integer $size
 * @property integer $type
 * @property integer $bed
 * @property integer $bath
 * @property integer $status
 * @property string $broker
 */
class Home extends \yii\db\ActiveRecord
{
    //public $file;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'home';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'address', 'price', 'detail', 'size', 'type', 'bed', 'bath', 'status', 'broker'], 'required'],
            [['address', 'detail'], 'string'],
            [['price', 'size', 'type', 'bed', 'bath', 'status'], 'integer'],
            [['name', 'broker'], 'string', 'max' => 255],
            [['img'],'file'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'home_id' => 'Home ID',
            'name' => 'Name',
            'address' => 'Address',
            'img'=>'Image',
            'price' => 'Price',
            'detail' => 'Detail',
            'size' => 'Size',
            'type' => 'Type',
            'bed' => 'Bed',
            'bath' => 'Bath',
            'status' => 'Status',
            'broker' => 'Broker',
        ];
    }
}
