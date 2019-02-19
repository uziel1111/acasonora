<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Index extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('Utilerias');
      
    } 

    public function index()
    {
        $data = array();
        Utilerias::pagina_basica($this,"index", $data);
    }

    public function guiaparapadres(){
        $strView = $this->load->view("visor_pdf/visorpdf", array(), TRUE);
        $response = array('strView' => $strView );
        Utilerias::enviaDataJson(200, $response, $this);
        exit;
    }

}



?>
