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
        // echo $strView;
        // die();
        $response = array('strView' => $strView );
        Utilerias::enviaDataJson(200, $response, $this);
        exit;
    }

    public function guia_cte()
    {
        $data = array();
        Utilerias::pagina_basica($this,"guias_cte/guia_cte", $data);
    }

    public function buenas_practicas()
    {
        $data = array();
        Utilerias::pagina_basica($this,"buenas_practicas_esc/buenas_pract_esc", $data);
    }

}



?>
