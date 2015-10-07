<?php

namespace app\models;

use Yii;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "user".
 *
 * @property integer $id
 * @property string $name
 * @property string $surname
 * @property string $email
 * @property string $password
 */

class User extends \yii\db\ActiveRecord implements IdentityInterface
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'email', 'password'], 'required'],
            [['surname'], 'string'],
            [['name'], 'string', 'max' => 255],
            [['email', 'password'], 'string', 'max' => 128]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'surname' => 'Surname',
            'email' => 'Email',
            'password' => 'Password',
        ];
    }

    /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @inheritdoc
     */
    public function getAuthKey()
    {
        return $this->authKey;
    }

    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }

    /**
     * Validates password
     *
     * @param  string  $password password to validate
     * @return boolean if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return $this->password === $password;
    }


     /**
      * Finds user by email
      *
      * @param  string      $email
      * @return static|null
      */
     public static function findByEmail($email) {
         $dbUser = User::find()
                 ->where([
                     "email" => $email
                 ])
                 ->one();
         if (!count($dbUser)) {
             return null;
         }
         return new static($dbUser);
     }

     /**
      * @inheritdoc
      */
     public static function findIdentity($id) {
         $dbUser = User::find()
                 ->where([
                     "id" => $id
                 ])
                 ->one();
         if (!count($dbUser)) {
             return null;
         }
         return new static($dbUser);
     }

     /**
      * @inheritdoc
      */
     public static function findIdentityByAccessToken($token, $userType = null) {

         $dbUser = User::find()
                 ->where(["accessToken" => $token])
                 ->one();
         if (!count($dbUser)) {
             return null;
         }
         return new static($dbUser);
     }



}
