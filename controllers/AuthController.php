<?php
/**
 * Created by PhpStorm.
 * User: ilya_zelenskiy
 * Date: 2019-02-27
 * Time: 15:21
 */

namespace app\controllers;

use yii\web\Controller;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;

class AuthController extends Controller
{

    public function behaviors(){

        $behaviors = [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        /*'matchCallback' => function ($rule, $action) {
                            return Yii::$app->user->identity->status === 1;
                        }*/
                        'roles' => ['@']
                    ]
                ]
            ],

            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];


        return $behaviors;

    }
}