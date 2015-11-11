<?php 

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Customers;

class CustomersController extends Controller
{

	public function actionIndex(){
		$customers = Customers :: find()->all();
		 return $this->render('index',array('customers' => $customers));
	}
}