<?php
defined('BASEPATH') or exit('No direct script access allowed');

define("ZONAHORARIA", "America/Mexico_City");

class Utilerias
{
    public function __construct()
    {
        date_default_timezone_set(ZONAHORARIA);
    }

    /**
     * Carga la vista básica del Visor de  propiedades, vista y footer.
     *
     * @param CONTROLLER $contexto   Desde dónde se llamará a la vista
     * @param VISTA $vista      El nombre de la vista que se cargará después del header
     * @param DATA  $data       Arreglo con los campos que usará templates/header y $vista
     */
    public static function pagina_basica($contexto, $vista = '', $data)
    {
        $contexto->load->view('templates/header', $data);
        $contexto->load->view($vista, $data);
        $contexto->load->view('templates/footer', $data);
    } // pagina_basica_visorp()

    /*
    Función para retornar datos a peticiones ajax
     */
    public static function enviaDataJson($status, $data, $contexto)
    {
        return $contexto->output
            ->set_status_header($status)
            ->set_content_type('application/json', 'utf-8')
            ->set_output(json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
            ->_display();
    } // enviaDataJson()

    public static function destroy_all_session($contexto)
    {
        // Vacio los datos
        $contexto->session->unset_userdata(DATOSUSUARIO);
        $contexto->session->unset_userdata(MENU);
        $contexto->session->sess_destroy();
        return true;

    } // destroy_all_session()

    public static function pagina($contexto, $vista = '', $data)
    {
        $contexto->load->view('templates/header2', $data);
        $contexto->load->view($vista, $data);
        $contexto->load->view('templates/footer2', $data);
    } // pagina_basica_visorp()
} // class Utilerias
