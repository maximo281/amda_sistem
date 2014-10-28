<html>
    <head>
        <title>Importar Archivo </title>
    </head>
    <body>
<body>
	<head><h1>Sistema Autos Amda</h1></head>
	<div>
               <form action="<?php echo base_url() ?>index.php/upload/importar" method="post" enctype="multipart/form-data">
    <p>
        Seleccionar Excel: <input type="file" name="file">
        <input type="submit" value="Importar"></p>
    </p>
</form>
	</div>
    </body>
</html>
