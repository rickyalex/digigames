<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;
/**
 * This is the model class for table "users".
 *
 * @property integer $id_user
 * @property string $username
 * @property string $password
 * @property string $authKey
 * @property string $accessToken
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $date_created
 */
class Users extends ActiveRecord implements IdentityInterface
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
            [['date_created'], 'safe'],
            [['username', 'email'], 'string', 'max' => 50],
            [['password', 'authKey', 'accessToken', 'first_name', 'last_name'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_user' => 'Id User',
            'username' => 'Username',
            'password' => 'Password',
            'authKey' => 'Auth Key',
            'accessToken' => 'Access Token',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'email' => 'Email',
            'date_created' => 'Date Created',
        ];
    }
    
    
    /**
     * @inheritdoc
     */
    public static function findIdentity($id_user)
    {
        return self::findOne($id_user);
    }

    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        return new yii\base\NotSupportedException();
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
        return self::findOne(['username' => $username]);
    }

    /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this->id_user;
    }

    /**
     * @inheritdoc
     */
    public function getAuthKey()
    {
        return $this->authKey;
    }

    public function setFirstname($firstname)
    {
        $this->first_name = $firstname;
        return $this->first_name;
    }
    
    public function setLastname($lastname)
    {
        $this->last_name = $lastname;
        return $this->last_name;
    }
    
    public function setUsername($username)
    {
        $this->username = $username;
        return $this->username;
    }
    
    /**
     * Set the current timestamp
     *
     * @return datetime
     */
    
    public function setDatecreated()
    {
        $this->date_created = Date('Y-m-d h:i:s');
        return $this->date_created;
    }
    
    /**
     * Generates password hash
     *
     * @param string $password
     * @return string
     */
    public function setPassword($password)
    {
        $this->password = md5($password);
        return $this->password;
    }
    
    /**
     * Generates "remember me" authentication
     *
     * @param string $password
     * @return void
     */
    public function generateAuthKey()
    {
        $this->authKey = Yii::$app->security->generateRandomString();
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
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return $this->password === md5($password);
    }
}
