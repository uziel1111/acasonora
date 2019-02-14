<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mapa extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->library('Utilerias');
	}// __construct()

	public function index(){
		$data = array();
		Utilerias::pagina_basica($this, "mapa/index", $data);
	}// index()

	public function get_buscadormapa(){
		$data = array();
		$dom = $this->load->view("mapa/buscador",$data,TRUE);
		$response = array(
            'viewform'=>$dom
        );
        Utilerias::enviaDataJson(200, $response, $this);
        exit;
	}
}// class
