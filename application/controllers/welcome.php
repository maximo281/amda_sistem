<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
                $this->load->helper('form');
		$this->load->library('grocery_CRUD');
                $this->load->library('amda_excel');
                
	}
	public function index()
	{
		//$this->load->view('welcome_message');}
               /* if(empty($this->input->post('filter'))){
                $filter=$this->input->post('filter');
                
                }else{$filter==NULL;}
                if(isset($filter) and $filter =! NULL)
                    {
                    $this->_filter($filter);
                    }else{*/
		$this->grocery_crud->set_table('ventas_publico_automoviles');
		$output = $this->grocery_crud->render();
		$this->_muestra_crud($output);
                   // }
	}
	function _muestra_crud($output = null)
	{
		$this->load->view('welcome_message',$output);
	}
        function _filter($filter)
        {
            print_r($_POST);
        }
        public function import_xls()
                {
            $error = array('error'=>  '');
            $this->load->view('import_file',$error);
                }
}
