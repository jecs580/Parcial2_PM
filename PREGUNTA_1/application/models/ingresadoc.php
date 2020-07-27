<?php
if(!defined('BASEPATH')) exit('no se permite acceso directo al script');
    class ingresadoc extends CI_Model{
        function __construct(){
            $this->load->database();
        }
        function insertDoc($data){
            $this->db->insert('academico.control_documentos', array('ci'=>$data['ci'], 'certificado_notas'=>$data['certificado_notas'], 'titulo_bachiller'=>$data['titulo_bachiller'], 'matricula'=>$data['matricula']));
        }
    }
?>