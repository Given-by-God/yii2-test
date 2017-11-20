<?php
/**
 * Created by PhpStorm.
 * User: UMBRELLA
 * Date: 15.11.2017
 * Time: 14:12
 */

namespace app\controllers;

use app\models\Img;
use yii\web\Controller;

class AppController extends Controller
{
    public function actionGame()
    {
        $AllImg = Img::GetAll();

        return $this->render(
            'game',
            [
                'AllImg' => $AllImg,
            ]
        );
    }

    public function actionMenu()
    {
        return $this->render('menu');
    }
}