<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />		
	<title>Sistema Autos Amda</title>
<?php 
foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
	<script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>
<style type='text/css'>
body
{
	font-family: Arial;
	font-size: 14px;
}
a {
    color: blue;
    text-decoration: none;
    font-size: 14px;
}
a:hover
{
	text-decoration: underline;
}
</style>
</head>
<body>
	<head><h1>Sistema Autos Amda</h1></head>
	<div>

        </div>
	<div style='height:20px;'></div>
      <?php  $correcto = $this->session->flashdata('correcto');
    if ($correcto) 
    {
    ?>
       <span id="registroCorrecto"><?= $correcto ?></span>
    <?php
    }
    ?>
    <div>
		<?php echo $output; ?>
    </div>
</body>
</html>
