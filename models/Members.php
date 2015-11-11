<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "members".
 *
 * @property string $id
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $uname
 * @property string $pass
 * @property string $regdate
 * @property integer $customerID
 *
 * @property Customers $customer
 */
class Members extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'members';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['first_name', 'last_name', 'email', 'uname', 'pass', 'regdate', 'customerID'], 'required'],
            [['regdate'], 'safe'],
            [['customerID'], 'integer'],
            [['first_name', 'last_name', 'email', 'uname', 'pass'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'email' => 'Email',
            'uname' => 'Uname',
            'pass' => 'Pass',
            'regdate' => 'Regdate',
            'customerID' => 'Customer ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCustomer()
    {
        return $this->hasOne(Customers::className(), ['userID' => 'customerID']);
    }
}
