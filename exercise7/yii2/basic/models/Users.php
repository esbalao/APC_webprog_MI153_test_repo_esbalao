<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property integer $user_id
 * @property string $nickname
 * @property string $gender
 * @property string $email
 * @property string $comment
 * @property integer $cellphone
 * @property string $name
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nickname', 'gender', 'email', 'comment', 'cellphone', 'name'], 'required'],
            [['cellphone'], 'integer'],
            [['nickname', 'gender', 'email', 'comment', 'name'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'User ID',
            'nickname' => 'Nickname',
            'gender' => 'Gender',
            'email' => 'Email',
            'comment' => 'Comment',
            'cellphone' => 'Cellphone',
            'name' => 'Name',
        ];
    }
}
