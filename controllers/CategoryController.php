<?php

namespace app\controllers;
use app\models\Category;
use app\models\Product;
use Yii;

class CategoryController extends AppController {
	public function actionIndex() {
		$keywords = Product::find()->where(['keywords' => '1'])->all();
		$this->setMeta('Высший пилотаж - юридические услуги');
		return $this->render('index', compact('keywords'));
	}
	public function actionView($id) {
//		$id = Yii::$app->request->get('id');
		$category = Category::findOne($id);
		if(empty($category) )
			throw new \yii\web\HttpException(404, 'Такой категории нет');

		$products = Product::find()->where(['category_id' => $id])->all();
		$this->setMeta('Высший пилотаж | ' . $category->name, $category->keywords);
		return $this->render('view', compact('products', 'category')); 
	}
	public function actionSearch() {
		$s = Yii::$app->request->get('s');
		$this->setMeta('Высший пилотаж | ' . $s);
		$products = Product::find()->where(['like', 'name', $s])->all();

		return $this->render('search', compact('products', 's'));
	}
}