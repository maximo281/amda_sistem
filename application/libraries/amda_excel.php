<?php if(! defined('BASEPATH')) exit('No se permite el acceso a este script');
require_once APPPATH.'/libraries/lib_excel/PHPExcel.php';

class Amda_Excel extends PHPExcel 
{
    public function __construct() {
        parent::__construct();
    }
}
/*end of file */
/*location ./application/libraries/*/

