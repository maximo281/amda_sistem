<html>
    <head>
        <title><?=$title?></title>
    </head>
    <body>
        
        <h3>Consultar Informacion</h3>
        <p>Seleccione las variables</p>
        <br>
        <p>Caracteristicas :</p>
        <br>
        <form class="filtro" method="post" name="filtro" action="<?php echo base_url('index.php/filter/consultation')?>">
        <div class="fecha">
            <span><input id="anio" type="checkbox" name="anio">A&ntilde;o</span>
            <div id="anios"></div>
                
            <span><input type="checkbox" name="filter_1[]">Mes</span>
            <span><input type="checkbox" name="filter_1[]">Estado</span>
            <span><input type="checkbox" name="filter_1[]">Ciudad</span>
        </div>
        <div class="separacion_h"></div>
        <div class="carateristicas">
            <span><input type="checkbox" name="filter_1[]">Marca</span>
            <span><input type="checkbox" name="filter_1[]">Modelo</span>
            <span><input type="checkbox" name="filter_1[]">Version</span>
            <span><input type="checkbox" name="filter_1[]">Segmento</span>
        </div>
       
        <div><input type="submit" name="consultar" value="Consutar"></div>
        </form>
        <footer>
            
        </footer>
         <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="./js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script src="../assets/amd/amd.js"></script>
    </body>
</html>

