<?php if(! defined('BASEPATH'))exit('No se permite acceso al script');

class Upload extends CI_Controller
{
   function __construct() {
       parent::__construct();
       $this->load->helper(array('form','url'));
       $this->load->library('upload');
   } 
   function index()
   {
     
   }
   function cargar()
   {
       
      
		
	// var_dump(is_dir('./upload/'));	
      $config['upload_path'] = realpath('./upload');
      //echo 
     $config['allowed_types']='xls|xlsx';
      $config['max_size']='100';
     // print_r($config);
      
     $this->load->library('upload', $config);
      $this->upload->initialize($config); 
      if(!$this->upload->do_upload('userfile'))
          {
            $error = array('error'=>  $this->upload->display_errors());
            $this->load->view('import_file',$error);
         // echo "entra if";
          }else
              {
              echo "entra else";
              //$data = array('upload_data'=> $this->upload->data());
              //$this->load->view('upload_success',$data);
              }
  

   }
   public function importar()
   {
      print_r ($_FILES);
       /*
     $name   = $_FILES['file']['name'];
    $tname    = $_FILES['file']['tmp_name'];

    // Buscamos nuestra clase para leer el Excel
    require_once BASEPATH.'libraries/excel_reader2.php';
    // Instanciamos nuestra clase
    $dato = new Spreadsheet_Excel_Reader($tname);

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
    $html .="</table>"; 

    // Imprimimos el HMTL

    echo $html; 
  */
   }
   
}


