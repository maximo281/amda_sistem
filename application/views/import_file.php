<html>
    <head>
        <title>Importar Archivo </title>
    </head>
    <body>
<body>
	<head><h1>Sistema Autos Amda</h1></head>
	<h3>Seleccionar archivo Excel</h3>
    <form name="frmload" method="post" action="<?php echo base_url() ?>index.php/upload/cargar" enctype="multipart/form-data">
        <input type="file" name="file" /> &nbsp; &nbsp; &nbsp; <input type="submit" value="----- IMPORTAR -----" />
    </form>
    </body>
</html>
