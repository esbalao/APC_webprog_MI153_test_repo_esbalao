<?php

namespace app\models;

use Yii;
use yiiwebController;
use appmodelsUsers;


class userController extends \yii\web\Controller
{
   public function actionGuitars()
	{
		$model = new Users();
	
		// if the post data is set, the user submitted the form
		if ($model->load(Yii::$app->request->post())) {
			
			// in that case, validate the data
			if ($model->validate()) {
				
				// save it to the database
				$model->save();		
				return;
			}
		}
	
		// by default, diplay the form
		return $this->render('users', [
			'model' => $model,
		]);
	}
}