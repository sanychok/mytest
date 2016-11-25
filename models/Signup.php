<?php
namespace app\models;

use yii\base\Model;

class Signup extends Model{
    public $email1;
    public $username;
    public $password;

    public function rules()
    {
        return [
            [['email1', 'password' , 'username'], 'required'],
            ['email1', 'email'],
            [['email1', 'username'], 'unique', 'targetClass'=>'app\models\User'],
            ['password', 'string', 'min'=>2, 'max'=>12]

        ];
    }
    public function signup(){
        $user = new User();
        $user->email1 = $this->email1;
        $user->password = $this->password;
        $user->username= $this->username;
        return $user->save();
    }
}