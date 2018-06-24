<!DOCTYPE html>
<html>
<head>
	<title>views</title>
</head>
<body>

<?= $this->blocks['block1']; ?>

<?= $content; ?>

<?= $this->blocks['block2']; ?>

<?php if(isset($this->blocks['block3'])):?>
	<?= $this->blocks['block3'] ?>
<?php else :?>
	<h1>没有block3</h1>
<?php endif ;?>

</body>
</html>