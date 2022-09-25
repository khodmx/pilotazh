<?php

namespace app\modules\admin;
use yii\filters\AccessControl;

/**
 * admin module definition class
 */
class Module extends \yii\base\Module
{
    /**
     * {@inheritdoc}
     */
    public $controllerNamespace = 'app\modules\admin\controllers';

    public function behaviors() {
        return [
            'access' => [
            'class' => AccessControl::className(),
            'rules' => [
                [
                    'allow' => true,
                    'roles' => ['@'],
                    'matchCallback' => function($rule, $action) {
                    return \Yii::$app->user->identity->role === 'admin';
                        //если пользователь не является админом и пытается получить доступ к админке, то его редиректит на главную страницу
                        /*if(\Yii::$app->user->identity->role !== 'admin') {
                            return \Yii::$app->getResponse()->redirect('site/index');
                        } else {
                            return true;
                        } */
                    }
                ],
            ],
            ]
            
        ];
    }
    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();

        // custom initialization code goes here
    }
}
