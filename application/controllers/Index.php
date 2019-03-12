<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Index extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('Utilerias');
        $this->load->model('Municipio_model');
        $this->load->model('Nivel_model');
        $this->load->model('Supervision_model');
    } 

    public function index()
    {
        $data = array();
        Utilerias::pagina_basica($this,"index", $data);
    }

    public function visorpdf(){
        
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

    public function localiza_tu_escuela()
    {
        $data = array();
        $result_municipios = $this->Municipio_model->getall_xest_ind();
        $arr_municipios = array();
        if(count($result_municipios)==0){
            $data['arr_municipios'] = array(    '0' => 'Error recuperando los municipios' );
        }else{
            $arr_municipios['0'] = 'TODOS';
            foreach ($result_municipios as $row){
                $arr_municipios[$row['id_municipio']] = $row['municipio'];
            }
        }
        $data['arr_municipios'] = $arr_municipios;

        $result_nivel = $this->Nivel_model->all();
        $arr_nivel = array();
        if(count($result_nivel)==0){
            $data['arr_nivel'] = array(    '0' => 'Error recuperando los municipios' );
        }else{
            $arr_nivel['0'] = 'TODOS';
            foreach ($result_nivel as $row){
                $arr_nivel[$row['id_nivel']] = $row['nivel'];
            }
        }
        $data['arr_nivel'] = $arr_nivel;

        $result_supervision = $this->Supervision_model->getallzonas();
        $arr_supervision = array();
        if(count($result_supervision)==0){
            $data['arr_zonas'] = array(    '0' => 'Error recuperando los municipios' );
        }else{
            $arr_supervision['0'] = 'TODOS';
            foreach ($result_supervision as $row){
                $arr_supervision[$row['id_supervision']] = $row['zona_escolar'];
            }
        }
        $data['arr_zonas'] = $arr_supervision;


        Utilerias::pagina_basica($this,"mapa/catalogo_escolar", $data);
    }

    public function programas_apoyo()
    {
       
        Utilerias::pagina_basica($this,"programa_apoyos/prog_apoyo", array());
    }




}



?>
