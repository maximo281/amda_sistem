$(document).ready(function(){
/*---------------------------------------------------------------*/    
  $("#anio").click(function(event){
    if($(this).is(":checked")){
        $.ajax({
           type:'POST',
           url:'filter/check_anio',
           data:'anio',
           success:function(data)
           {
               $("div#anios").html(data);
           }
           
        });
    }else
        {
            $("div#anios").html("");  
        }
    });/*FIN #anio*/
/*---------------------------------------------------------------*/
    $('#mes').click(function(event){
        
        if($(this).is(":checked")){
            
            $.ajax({
               type:'POST',
               url:'filter/meses',
               data:'meses',
               success:function(data)
               {
                   $("div#meses").html(data);
               }
            });
        }else{
           $("div#meses").html(""); 
        }
    });
        
     /*-----------------------------------------*/
     /*CARGA DE COMBOBOX ESTADOS*/
    
  
});