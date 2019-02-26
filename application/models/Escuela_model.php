<?php
class Escuela_model extends CI_Model
{

    function __construct(){
        parent::__construct();
        ini_set('max_execution_time', 300); //300 seconds = 5 minutes
    }



    function get_xcvecentro($cve_centro){
      $this->db->select('es.id_cct,es.cve_centro,es.nombre_centro,ni.nivel, tu.turno_single, es.latitud, es.longitud, es.id_nivel, mu.municipio, loc.localidad, s.zona_escolar, so.sostenimiento');
      $this->db->from('escuela as es');
      $this->db->join('turno_single as tu', 'es.id_turno_single = tu.id_turno_single');
      $this->db->join('nivel as ni', 'es.id_nivel = ni.id_nivel');
      $this->db->join('subsostenimiento as sso', 'es.id_subsostenimiento = sso.id_subsostenimiento');
      $this->db->join('sostenimiento as so', 'sso.id_sostenimiento = so.id_sostenimiento');
      $this->db->join('modalidad as mo', 'es.id_modalidad = mo.id_modalidad');
      $this->db->join('municipio as mu', 'es.id_municipio = mu.id_municipio');
      $this->db->join('supervision as s', 'es.id_supervision = s.id_supervision');
      $this->db->join('localidad as loc', 'mu.id_municipio = loc.id_municipio AND es.id_localidad = loc.cve_localidad');
      $this->db->where('es.cve_centro', $cve_centro);
      $where_au = "(es.id_estatus !=2 AND es.id_estatus !=3)";
      $this->db->where($where_au);
      $this->db->where('es.latitud !=',0);
      $this->db->where('es.latitud !=','');
      // $this->db->where('es.latitud !=','#VALUE!');
      $this->db->group_by("tu.id_turno_single");
      // $this->db->get();
      // $str = $this->db->last_query();
      // echo $str; die();
      return  $this->db->get()->result_array();
    }// get_xcentro()

    function get_indicpeso_xidcct($id_cct,$id_ciclo){
        $this->db->select('
          ROUND(`Bajo-peso`*100,1) as `bajo`,
          ROUND(`Normal`*100,1) as Normal,
          ROUND(`Sobrepeso`*100,1) as Sobrepeso,
          ROUND(`Obesidad`*100,1) as Obesidad,
          ROUND(GREATEST(`Bajo-peso`,Normal,Sobrepeso,Obesidad)*100,1) as predom,
          IF(ROUND(GREATEST(`Bajo-peso`,Normal,Sobrepeso,Obesidad)*100,1)=ROUND(`Bajo-peso`*100,1),1,0) as t_bajo,
          IF(ROUND(GREATEST(`Bajo-peso`,Normal,Sobrepeso,Obesidad)*100,1)=ROUND(`Normal`*100,1),1,0) as t_normal,
          IF(ROUND(GREATEST(`Bajo-peso`,Normal,Sobrepeso,Obesidad)*100,1)=ROUND(`Sobrepeso`*100,1),1,0) as t_sobrepeso,
          IF(ROUND(GREATEST(`Bajo-peso`,Normal,Sobrepeso,Obesidad)*100,1)=ROUND(`Obesidad`*100,1),1,0) as t_obesidad
        ');
        $this->db->from('pesoxcct');
        $this->db->where('id_cct', $id_cct);
        $this->db->where('id_ciclo', $id_ciclo);
        //  $this->db->get();
        // $str = $this->db->last_query();
        // echo $str; die();
        return  $this->db->get()->result_array();
    }// get_indicpeso_xidcct()

    function get_nivel_xidcct($id_cct){
        $this->db->select('id_nivel');
        $this->db->from('escuela');
        $this->db->where('id_cct', $id_cct);
        return  $this->db->get()->row('id_nivel');
    }
    


   
}// Municipio_model
