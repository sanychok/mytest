<?php

namespace app\controllers;

use Yii;
use app\models\Sector2;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;


class Sector2Controller extends Controller
{

    public function actionIndex()
    {
        if (Yii::$app->user->isGuest) {
                $this->redirect(['site/login']);
            }
            $sector23 = new Sector2();
            if (Yii::$app->request->get('id')) {
                $sector = new Sector2();
                $id = Yii::$app->request->get('id');
                $sector = Sector2::findOne($id);
                if (Yii::$app->request->get('id') and Yii::$app->user->identity['id'] == $sector->user_id) {
                    $sector->active = 2;
                    $sector->save();
                    $this->redirect(['sector2/index']);

                }
                if (Yii::$app->request->get('id') and Yii::$app->user->identity['id'] != $sector->user_id and $sector->user_id != NULL) {
                    Yii::$app->session->setFlash('success', "Білет зарезервоаний або заброньований іншим коритсувачем");
                    $this->redirect(['sector2/index']);

                }

                if ($sector->user_id == NULL) {
                    $id = Yii::$app->request->get('id');
                    $sector->user_id = Yii::$app->user->identity['id'];
                    $sector->active = 1;
                    $sector->save();
                    $this->redirect(['sector2/index']);
                }


            }

            $sector = Sector2::find()->asArray()->all();
            $available = Sector2::find()->asArray()->where(['active' => '0'])->all();
            $booked = Sector2::find()->asArray()->where(['active' => '2'])->all();
            $reserved = Sector2::find()->asArray()->where(['active' => '1'])->all();
            return $this->render('index', compact('sector', 'available', 'booked', 'reserved'));
        }



}
