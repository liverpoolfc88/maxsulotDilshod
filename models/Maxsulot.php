<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%maxsulot}}".
 *
 * @property integer $id
 * @property string $maxsulot_name
 * @property string $maxsulot_photo
 * @property string $maxsulot_short
 * @property string $maxsulot_add
 * @property string $maxsulot_update
 * @property integer $user_id
 */
class Maxsulot extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%maxsulot}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['maxsulot_name', 'maxsulot_short'], 'required'],
            [['created_at','updated_at','add_user_id','update_user_id'], 'integer'],
            ['maxsulot_photo','file'],
            [['maxsulot_name'], 'string', 'max' => 128],
            [['maxsulot_photo'], 'string', 'max' => 2048],
            [['maxsulot_short'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'maxsulot_name' => 'Maxsulot Name',
            'maxsulot_photo' => 'Maxsulot Photo',
            'maxsulot_short' => 'Maxsulot Short',
            'add_user_id' => 'Maxsulot Add',
            'update_user_id' => 'Maxsulot Update',
            'created_at' => 'created_at',
            'updated_at' => 'updated_at',
        ];
    }

    public function beforeSave($insert){
        if($insert){
            $this->add_user_id = Yii::$app->user->identity->id;
            $this->created_at = time();
        }else{
            $this->update_user_id = Yii::$app->user->identity->id;
            $this->updated_at = time();
        }
        return parent::beforeSave($insert);
    }

    public function getAddUser()
    {
        return $this->hasOne(User::className(), ['id' => 'add_user_id']);
    }

    public function getUpdateUser()
    {
        return $this->hasOne(User::className(), ['id' => 'update_user_id']);
    }
}
