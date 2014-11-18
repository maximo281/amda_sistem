<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <title><?=$title?></title>
    </head>
    <style>
        .dropdown dd ul {
    background-color: #4F6877;
    border:0;
    color:#fff;
    /*display:none;*/
    left:0px;
    padding: 2px 15px 2px 5px;
    /*position:absolute;*/
    top:2px;
    width:280px;
    list-style:none;
    height: 150px;
    overflow: auto;
}
    </style>
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
                
            <span><input id="mes" type="checkbox" name="mes">Mes</span>
            <div id="meses"></div>
            <span><!--<input  id ="estado" type="checkbox" name="estado">-->
                Estado
                
                <dl class="dropdown">
                    <dt>
                    <a href="#">
                        <span class="hida">
                            SELECCIONA ESTADO
                        </span>
                        <p></p>
                    </a>
                    </dt>
                    <dd>
                        <div class="mutliSelect">
                            <ul>
                                <?php if($estados->num_rows()>0)
                                    {
                                        foreach($estados->result() as $row_estado)
                                            {
                                            ?>
                                            <li>
                                                 <input type="checkbox" value="<?=$row_estado->clave?>"><?=$row_estado->nombre?></input>
                                             </li>
                                
                                                
                                        <?php
                                            }
                                    }
                                    ?>
                            </ul>
                        </div>
                    </dd>
                </dl>
                
                <!--<select name="estado">-->
                   
                    
                <div class="filter_estado_00">
                    
                </div>
                
                <?php
                    /*if($estados->num_rows()>0)
                        {
                            foreach($estados->result() as $row_estado)
                                {*/
                                ?>
                
                                <!--<option value="<?//=$row_estado->clave?>"><?//=$row_estado->nombre?></option> -->
                
                                <?php
                                 /*}
                        }*/
                ?>
                     <!--</select>-->
            </span>
            <span><input id="ciudad" type="checkbox" name="ciudad">Ciudad</span>
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

