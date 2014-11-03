<div>
    
    <?php
if($meses ->num_rows()>0)
    {
    foreach($meses->result() as $row)
        {
    ?>
    <ul><li><input type="checkbox" id="mes" name="mes"><?=$row->name?></li></ul>
    
    <?php
        
        }
       }

        
        ?>

</div>