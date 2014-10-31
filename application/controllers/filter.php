<?php if( ! defined('BASEPATH')) exit('No se permite Accceso');

class Filter extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->model('autos_model');
        
    }
    function index()
    {
     $data['title']="Filtros Base de Datos";
        $this->load->view('filter_view',$data);
    }
    function consultation()
    {
        /*Array (   [anio] => on 
         *          [mes] => on 
         *          [estado] => on 
         *          [ciudad] => on 
         *          [marca] => on 
         *          [modelo] => on 
         *          [version] => on 
         *          [segmento] => on 
         *          [Filter] => Consutar ) 
         */
    print_r($_POST);
    }
    function check_anio()
    {
    $data['anio']="anio";
        $this->load->view('filter_anio',$data);
    }
}


