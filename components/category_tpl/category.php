<a href="<?= \yii\helpers\Url::to(['category/view', 'id' => $category['id']]) ?>"><?= $category['name'] ?>
            <?php if (isset($category['children'])): ?><br/>
                <?= $this->getMenuHtml($category['children']) ?>
            <?php endif; ?>
        </a>