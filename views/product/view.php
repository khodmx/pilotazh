<?php
/* @var $this yii\web\View */
use app\components\CategoryWidget;
use yii\bootstrap4\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;
?>
<ul class="dropdown__items">
<?= CategoryWidget::widget(['tpl' => 'category']) ?>                
  </ul>
  <div class="container">
    <div class="row justify-content-center">

<div class="productcard">
    <h3><?= $product->name ?></h3>
    <p>
      <?= $product->description ?>
    </p>
    
    <div class="price">
      <p>
      Цена: <?= $product->price ?>
    </p>
    </div>
    <div class="row justify-content-center">
    <a href="<?= Url::to(['site/contact'])?>">
              <button type="button" class="button1">Подробнее<br>об услуге</button>
    </a>
    </div>
    
    
    
      

</div>
</div>
</div>