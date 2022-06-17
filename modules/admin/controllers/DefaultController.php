<?php

namespace app\modules\admin\controllers;;
use yii\web\Controller;
use app\models\User;
/**
 * Default controller for the `admin` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        if (User::isAdmin()) {

            return $this->render('index');
        } else {
            return $this->goHome();
        }
    }


}
