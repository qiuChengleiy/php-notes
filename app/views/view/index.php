<?php
use yii\helpers\Html;  
use yii\helpers\HtmlPurifier;


?>
<h1><?= $hello ?></h1> <!-- //对应数组里的key值  值为数组的时候也一样 可以调用key -->


<h1><?=Html::encode($script); ?></h1> <!--  HTML转义 -->


<h1><?=HtmlPurifier::process($script); ?></h1>  <!-- HTML过滤 直接就是过滤掉 -->


<div><?php echo $this->render('test', array('name'=>'user')); ?></div> <!--  在index视图显示 test视图 并传递数据-->


















