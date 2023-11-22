<?php
/* @var $this yii\web\View */
use app\components\CategoryWidget;
use yii\helpers\Url;
use yii\helpers\Html;
?>

<section class="category-section">
    <div class="container">
<div class="section_our_solution">
  <div class="row justify-content-center">
  <h1 class="categoryname">Поиск по запросу: <?= $s ?></h1>
    <?php if (!empty($products)) :?>
      <?php foreach($products as $product): ?>
    <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12 row-cols-xl-2 g-4">
      <div class="our_solution_category">
        <div class="solution_cards_box">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 my-col text-center">
          <div class="row justify-content-center">
          <div class="solution_card">
            <div class="hover_color_bubble"></div>
            <div class="solu_title">
              <h1><?= $product->name ?></h1>
            </div>
            <div class="solu_description1">
              <p>
                <?= $product->mini_description ?>
              </p>
              <a href="<?= Url::to(['product/view', 'id' => $product->id])?>">
                <button type="button" class="but1">Подробнее об услуге</button></a>
            </div>
          </div>
        </div> 
    </div>
    </div>
        </div>
      </div>
  <?php endforeach;?>
    <?php else :?>
      <h2 class="categorytitle">По вашему запросу ничего не найдено :^(</h2>
  <?php endif;?>
    </div>
  </div>
</div>
</section>