<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1>Countries</h1>
<ul> 
	<!-- 这里返回来的是数组数据 -->
	<!-- 遍历模板数据，通过模板展出 -->
<?php foreach ($countries as $country): ?>
    <li>
    	<!-- 对信息进行过滤 -->
        <?= Html::encode("{$country->name} ({$country->code})") ?>:
        <?= $country->population ?>
    </li>
<?php endforeach; ?>
</ul>

<!--  分页小部件 -->
<?= LinkPager::widget(['pagination' => $pagination]) ?>