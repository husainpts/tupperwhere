<?php
namespace frontend\models;

use yii\base\Model;
use common\models\User;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $first_name;
	public $last_name;
	public $username;
    public $email;
    public $alamat;
    public $password;
	public $confPass;
    public $verifyCode;


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['username', 'trim'],
            ['username', 'required'],
			['first_name', 'required'],
			['last_name', 'required'],
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This username has already been taken.'],
            ['username', 'string', 'min' => 2, 'max' => 255],

            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This email address has already been taken.'],

            ['password', 'required'],
            ['password', 'string', 'min' => 6],
			
			['confPass', 'required'],
			['confPass', 'compare', 'compareAttribute'=>'password', 'message'=>"Passwords don't match" ],
			['confPass', 'string', 'min' => 6],

            ['alamat', 'required'],
            ['alamat', 'string', 'min' => 10],

            ['verifyCode', 'captcha'],
        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
        if (!$this->validate()) {
            return null;
        }
        
        $user = new User();
		$user->first_name = $this->first_name;
		$user->last_name = $this->last_name;
        $user->username = $this->username;
        $user->email = $this->email;
        $user->alamat = $this->alamat;
        $user->setPassword($this->password);
        $user->generateAuthKey();
        
        if($this->password == $this->confPass){
			return $user->save() ? $user : null;
		} else {
			return null;
		}
    }
	
	public function attributeLabels()
    {
        return [
            'confPass' => 'Confirm Password',
            'verifyCode' => 'Verification Code',
        ];
    }
}
