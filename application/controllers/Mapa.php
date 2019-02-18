<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mapa extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->library('Utilerias');
		$this->load->model('Mapa_model');
	}// __construct()

	public function index(){
		$data = array();
		Utilerias::pagina_basica($this, "mapa/index", $data);
	}// index()

	public function get_buscadormapa(){
		$data = array();
		$arr_municipios = $this->Mapa_model->get_municipios();
		$arr_niveles = $this->Mapa_model->get_niveles();
		$arr_sostenimientos = $this->Mapa_model->get_sostenimientos();
		$data['municipios'] = $arr_municipios;
		$data['niveles'] = $arr_niveles;
		$data['sostenimientos'] = $arr_sostenimientos;
		// echo "<pre>";
		// print_r($data);
		// die();
		$dom = $this->load->view("mapa/buscador",$data,TRUE);
		$response = array(
            'viewform'=>$dom
        );
        Utilerias::enviaDataJson(200, $response, $this);
        exit;
	}

	public function get_marcadores_filtro(){
		// echo"<pre>";
		// print_r($_POST);
		// die();
			$idmunicipio       = $this->input->post("idmunicipio");
			$idnivel           = $this->input->post("idnivel");
			$id_sostenimiento  = $this->input->post("idsostenimiento");
			$nombre_centro     = $this->input->post("nombre");
			$cct               = $this->input->post("cct");

			$marcadorb = array();
			$vfinal = array();

			if(isset($cct) && $cct != ""){
				$escuelas = $this->Mapa_model->get_xcvecentro("05".$cct);
			}else{
				$escuelas = $this->Mapa_model->get_xparams($idmunicipio,$idnivel,$id_sostenimiento,$nombre_centro);
			}

			foreach ($escuelas as $marcador) {
	            array_push($marcadorb, $marcador['nombre_centro']);
	            array_push($marcadorb, (float) $marcador['latitud']);
	            array_push($marcadorb, (float) $marcador['longitud']);
	            array_push($marcadorb, $marcador['cve_centro']);
	            array_push($marcadorb, $marcador['id_nivel']);
	            array_push($marcadorb, $marcador['municipio']);
	            array_push($marcadorb, $marcador['turno_single']);
	            array_push($marcadorb, $marcador['id_cct']);
	            array_push($marcadorb, $marcador['nivel']);
	            // array_push($marcadorb, $marcador['localidad']);
	            array_push($marcadorb, $marcador['zona_escolar']);
	            array_push($marcadorb, $marcador['sostenimiento']);
	            array_push($vfinal, $marcadorb);
	            $marcadorb = array();
	        }
	        $response = array('response' => $vfinal);
	        Utilerias::enviaDataJson(200, $response, $this);
	        exit;
		}

		public function get_mismo_nivel(){

			$idcct = $this->input->post('idcct');
			$marcadorb = array();
			$vfinal = array();
			if($idcct != ""){
				$escuela = $this->Escuela_model->get_xidcct($idcct);
				$escuelas = $this->Escuela_model->get_mismo_nivel($escuela[0]['latitud'], $escuela[0]['longitud'], $escuela[0]['id_nivel'], false);

				foreach ($escuelas as $marcador) {
				// 	echo"<pre>";
				// print_r($marcador);
				// die();
		            array_push($marcadorb, $marcador['nombre_centro']);
		            array_push($marcadorb, (float) $marcador['latitud']);
		            array_push($marcadorb, (float) $marcador['longitud']);
		            array_push($marcadorb, $marcador['cve_centro']);
		            array_push($marcadorb, $marcador['id_nivel']);
		            array_push($marcadorb, $marcador['municipio']);
								array_push($marcadorb, $marcador['turno_single']);
								array_push($marcadorb, $marcador['id_cct']);
								array_push($marcadorb, $marcador['nivel']);
								array_push($marcadorb, $marcador['localidad']);
								array_push($marcadorb, $marcador['zona_escolar']);
								array_push($marcadorb, $marcador['sostenimiento']);
		            array_push($vfinal, $marcadorb);
		            $marcadorb = array();
		        }
		        $response = array('response' => $vfinal);
		        Utilerias::enviaDataJson(200, $response, $this);
		        exit;
			}
		}

	public function get_siguiente_nivel(){

			$idcct = $this->input->post('idcct');
			$marcadorb = array();
			$vfinal = array();
			if($idcct != ""){
				$escuela = $this->Escuela_model->get_xidcct($idcct);
				$escuelas = $this->Escuela_model->get_mismo_nivel($escuela[0]['latitud'], $escuela[0]['longitud'], $escuela[0]['id_nivel'], true);

				foreach ($escuelas as $marcador) {

		            array_push($marcadorb, $marcador['nombre_centro']);
		            array_push($marcadorb, (float) $marcador['latitud']);
		            array_push($marcadorb, (float) $marcador['longitud']);
		            array_push($marcadorb, $marcador['cve_centro']);
		            array_push($marcadorb, $marcador['id_nivel']);
		            array_push($marcadorb, $marcador['municipio']);
								array_push($marcadorb, $marcador['turno_single']);
								array_push($marcadorb, $marcador['id_cct']);
								array_push($marcadorb, $marcador['nivel']);
								array_push($marcadorb, $marcador['localidad']);
								array_push($marcadorb, $marcador['zona_escolar']);
								array_push($marcadorb, $marcador['sostenimiento']);
		            array_push($vfinal, $marcadorb);
		            $marcadorb = array();
		        }
		        $response = array('response' => $vfinal);
		        Utilerias::enviaDataJson(200, $response, $this);
		        exit;
			}
		}
}// class
