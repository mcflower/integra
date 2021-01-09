<?php

namespace app\modules\admin092\controllers;

use Yii;
use app\controllers\AuthController;
use app\models\Xuser;
use app\models\Xcontent;

/**
 * Default controller for the `admin092` module
 */
class DefaultController extends AuthController
{
    public $layout = "/admin";
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
    
    public function actionChangeNotify($activity)
    {
        $model = Xcontent::findOne(['activity' => $activity]);
        $users = Xuser::findAll(['activity' => $activity, 'buy' => 1]);
        
        foreach($users as $user) {
            $mes = Yii::$app->mail->compose('change',
                ['user' => $user,
                'activity' => $model,
                    'title' => 'Перенос даты вебинара "'.$model->name.'".',
                    'htmlLayout' => 'layouts/html'])
                ->setFrom([Yii::$app->params['sendEmail'] => Yii::$app->params['sendName']])
                ->setTo($user->email)
                ->setSubject('Перенос даты вебинара "'.$model->name.'".');
    
            $mes->send();
        }
        
        
    }
}
