<?php

namespace app\controllers;

use Yii;
use app\models\Sector1;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;


class Sector1Controller extends Controller
{

    public function actionIndex()
    {
        if (Yii::$app->user->isGuest){
            $this->redirect(['site/login']);
        }
        $sector23 = new Sector1();
        if (Yii::$app->request->get('id')){
            $sector = new Sector1();
            $id = Yii::$app->request->get('id');
            $sector = Sector1::findOne($id);
            if (Yii::$app->request->get('id') and Yii::$app->user->identity['id'] == $sector->user_id){
                $sector->active = 2;
                $sector->save();
                $this->redirect(['sector1/index']);

            }
            if (Yii::$app->request->get('id') and Yii::$app->user->identity['id'] != $sector->user_id and $sector->user_id != NULL){
                Yii::$app->session->setFlash('success', "Білет зарезервоаний або заброньований іншим коритсувачем");
                $this->redirect(['sector1/index']);

            }

            if ($sector->user_id == NULL){
                $id = Yii::$app->request->get('id');
                $sector->user_id = Yii::$app->user->identity['id'];
                $sector->active = 1;
                $sector->save();
                $this->redirect(['sector1/index']);
            }


        }




        $sector = Sector1::find()->asArray()->all();
        $available = Sector1::find()->asArray()->where(['active'=> '0'])->all();
        $booked = Sector1::find()->asArray()->where(['active'=> '2'])->all();
        $reserved = Sector1::find()->asArray()->where(['active'=> '1'])->all();
        return $this->render('index', compact('sector', 'available', 'booked', 'reserved','sector23' ));

    }


}
