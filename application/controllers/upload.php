<?php if(! defined('BASEPATH'))exit('No se permite acceso al script');

class Upload extends CI_Controller
{
   function __construct() {
       parent::__construct();
     
       $this->load->helper(array('form','url'));
       $this->load->library('upload');
       $this->load->model('autos_model');
       $this->load->library('session');
   } 
   function index()
   {
     
   }
   function cargar()
   {
       
      
        if($_FILES['file']['name'] != '')
            {
           // echo APPPATH.'libraries/lib_excel/PHPExcel/IOFactory.php';
            require_once APPPATH.'libraries/lib_excel/PHPExcel/IOFactory.php';
            $name = $_FILES['file']['name'];
            $tname = $_FILES['file']['tmp_name'];
            $type = $_FILES['file']['type'];
            //echo $name.'<br>';
            //echo $tname.'<br>';
            //echo $type.'<br>';
            
            if($type == 'application/vnd.ms-excel')
                {
                    // extencion excel '97
                    $ext = 'xls';
                }
                else if($type == 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet')
                    {
                    //Extencion excel 2007 y 2010
                    $ext= 'xlsx';
                    
                    }else
                        {
                        echo -1;
                        exit();
                        }
                 $xlsx = 'Excel2007';
                 $xls = 'Excel5';
                 
                 //se crea el lector 
                 $objReader = PHPExcel_IOFactory::createReader($$ext);
                 //cargamos el archivo
                 $objPHPExcel= $objReader->load($tname);
                 
                 $dim = $objPHPExcel->getActiveSheet()->calculateWorksheetDataDimension();
                 //echo $dim;
                 //list coloca en array $start y $end
               list($start,$end)=explode(':',$dim);
                if(!preg_match('#([A-Z]+)([0-9]+)#', $start, $rslt)){
				return false;
			}
			list($start, $start_h, $start_v) = $rslt;
			if(!preg_match('#([A-Z]+)([0-9]+)#', $end, $rslt)){
				return false;
			}
			list($end, $end_h, $end_v) = $rslt;
		//empieza lectura vertical
                    $table = "insert into ventas_publico_automoviles values";
			for($v=($start_v+1); $v<=$end_v; $v++){
				//empieza lectura horizontal
                                //echo $v;
				$table .= "(NULL,";
				for($h=$start_h; ord($h)<=ord($end_h); $this->pp($h)){
                                  // if($h== "A"){echo "a";}
                                   // echo ord($h);
                                    $cellValue = $this->get_cell($h.$v, $objPHPExcel);
					//$table .= "t";
					if($cellValue !== null){
                                            if($h != $end_h){
                                            $table .= '"'.$cellValue.'",';
                                            }else{$table .= '"'.$cellValue.'"';}
					}
                                      
				}
                                    if($v != $end_v){
                                        $table .= "),";
                                    
                                    }else{
                                    $table .= ")";
                                    }
                               
			}
			$table .= ";";
			
			// $table;
                        // ya esta construido el query con los datos de el archivo de excel 
                        //le pasamos el query a la funcion insert_data
		    
                   $this->insert_data($table);
            }	
	
  

   }
   function insert_data($table)
   {
       
      if($this->autos_model->insert($table))
           {
           $this->session->set_flashdata('correcto', 'Datos Cargados correctamente!');
                redirect('welcome', 'refresh');
           }else
               {
               echo "datos no insertados";
               }
       
   }
  /* public function importar()
   {
     
     $name   = $_FILES['file']['name'];
    $tname    = $_FILES['file']['tmp_name'];
    	/*if (move_uploaded_file($_FILES['file']['tmp_name'], $name)){
       echo "El archivo ha sido cargado correctamente.<br>";
    }else{
       echo "Ocurrió algún error al subir el fichero. No pudo guardarse.<br>";
    } 
echo $name.'<br>';
echo $tname;*/
    // Buscamos nuestra clase para leer el Excel
 /*   require_once BASEPATH.'libraries/excel_reader2.php';
    // Instanciamos nuestra clase
    $dato = new Spreadsheet_Excel_Reader($name);

    //Aqui vamos a leer el Excel, mostrandolo con un simple HTML
    $html = "<table cellpadding='2' border='1'>";
    for ($i = 1; $i <= $dato->rowcount($sheet_index=0); $i++) {

      //Verificamos que cada celda la fila no se encuentra vacia
      if($dato->val($i,2) != ''){
        $html .= "<tr>";
        // leemos columna por columna
        for ($j = 1; $j <= $dato->colcount($sheet_index=0); $j++) { 

          $value   = $dato->val($i,$j); 
          $html .="<td>".$value." </td>";

          // Aqui podemos insertar cada fila del excel en una tabla Mysql
        }
        $html .="</tr>";
      }
    }
    $html .="</table>";/* 

    // Imprimimos el HMTL

    echo $html; 
 
   }*/
   function get_cell($cell, $objPHPExcel){
				//select one cell
				$objCell = ($objPHPExcel->getActiveSheet()->getCell($cell));
				//get cell value
				return $objCell->getvalue();
			}
			
     function pp(&$var){
		$var = chr(ord($var)+1);
		return true;
			}
   
}


