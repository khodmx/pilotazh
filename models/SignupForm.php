<?php

namespace app\models;

use Yii;
use yii\base\Model;


class SignupForm extends Model
{
    public $username;
    public $email;
    public $password;
    public $phone;
    

    private $_user = false;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // username and password are both required
            [['username', 'password', 'email', 'phone'], 'required'],
            ['username', 'unique', 'targetClass' => User::className(), 'message' => 'Этот логин уже занят.'],
            ['username', 'string', 'min' => 2, 'max' => 255],
            ['email', 'trim'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => User::className(), 'message' => 'Такая почта уже занята.'],
            ['password', 'string', 'min' => 6],
        ];
   
    }

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [
            'username' => 'Логин',
            'password' => 'Пароль',
            'email' => 'E-mail',
            'phone' => 'Телефон',
        ];
    }
}

