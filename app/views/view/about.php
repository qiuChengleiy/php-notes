is layouts ....

<?php $this->beginBlock('block1'); ?>   <!-- 数据块是用来进行布局的 必须指定 render的对应视图 这里是about 最终显示按照数据块放的位置来-->

<h1>我是数据块</h1>
<?php $this->endBlock(); ?>

<?php $this->beginBlock('block2'); ?>
<h1>我是数据块2</h1>
<?php $this->endBlock(); ?>