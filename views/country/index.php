<?php

/**
 * @var yii\web\View $countries
 * @var yii\data\Pagination $pagination
 */

use yii\helpers\Html;
use yii\widgets\LinkPager;

?>
    <h1>Країни</h1>
    <ul>
        <?php foreach ($countries as $country): ?>
            <li>
                <?= Html::encode("{$country->name} ({$country->code})") ?>:
                <?= $country->population ?>
            </li>
        <?php endforeach; ?>
    </ul>

<?= LinkPager::widget(['pagination' => $pagination]) ?>