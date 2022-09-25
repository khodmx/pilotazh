<?php

namespace app\controllers;
use app\models\Category;
use app\models\Product;
use Yii;

class ProductController extends AppController {

	public function actionView($id) {
		$id = Yii::$app->request->get('id');
		$product = Product::findOne($id);
		// Жадная загрузка
		//$product = Product::find()->with('category')->where(['id' => $id])->limit(1)->one(); */
		$this->setMeta('Высший пилотаж | ' . $product->name, $product->keywords, $product->description);
		return $this->render('view', compact('product'));
	}
}