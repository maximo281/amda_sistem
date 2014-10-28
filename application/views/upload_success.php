
<html>
<head>
<title>cargar xls</title>
</head>
<body>

<h3>El archivo se ha cargado correctamente</h3>

<ul>
<?php foreach ($upload_data as $item => $value):?>
<li><?php echo $item;?>: <?php echo $value;?></li>
<?php endforeach; ?>
</ul>

<p><?php echo anchor('upload', 'Cragar otro archivo'); ?></p>

</body>
</html>