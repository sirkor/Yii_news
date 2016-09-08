<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
    <h1>Новости</h1>
    <ul>
        <?php foreach ($all_news as $news): ?>
            <li>
                <h3><?= Html::encode("{$news->news_name}") ?></h3>
               <img src= <?= "/Yii/web/image/$news->image" ?> ><br>
                <h4>Краткое описание</h4>
                <?= Html::encode("{$news->short_description}") ?>
            </li>
        <?php endforeach; ?>
    </ul>

<?= LinkPager::widget(['pagination' => $pagination]) ?>