<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controlador extends CI_Controller {
	function __construct(){
		parent:: __construct();
        $this->load->helper('form');
        $this->load->model('flujo');
        $this->load->model('ingresadoc');
	}
	public function index()
	{
        if(!isset($_GET['flujo']))
        {
            $flujo='F1';
            $proceso='P1';
            $proceso_siguiente='P2';
            $pantalla='averigua.inc.php';
        }
        else {
            $flujo=$_GET['flujo'];
            $proceso=$_GET['proceso'];
            $proceso_siguiente=$_GET['proceso_sig'];
            $pantalla=$_GET['pantalla'];
        }
        $data['estado']=$this->input->get('estado');
        $data['mensaje']=$this->input->get('mensaje');

        // $data['proc']=$this->flujo->obtProceso($p);
        $data['proceso']=$this->flujo->obtProceso($proceso);
        $this->load->view('cabecera.inc.php');
        $this->load->view($pantalla, $data);
		$this->load->view('motor');
    }
    public function index2()
	{
        if($_GET['btnEnviar']=='Siguiente')
        {  
            if(isset($_GET['ci']))
            {
                if ($_GET['certificado_notas']=='NO' || $_GET['certificado_notas'] == '' || $_GET['titulo_bachiller']== 'NO' || $_GET['titulo_bachiller'] == '' || $_GET['matricula'] == 'NO' || $_GET['matricula'] == '')
                {
                    $data['aux']='0';
                }
                else{
                    $data=array(
                        'ci' =>$this->input->get('ci'),
                        'certificado_notas'=>$this->input->get('certificado_notas'),
                        'titulo_bachiller'=>$this->input->get('titulo_bachiller'),
                        'matricula'=>$this->input->get('matricula'));
                        $this->ingresadoc->insertDoc($data);
                        $data['aux']='1';
                        //$data['cond']=$this->flujo->obtProcesoCond($p);
                }  
            }
            if(isset($_GET['estado']))
            {
                $p=$_GET['proceso'];
                $data['condicional']=$this->flujo->obtProcesoCond($p);
                $data['estado']=$this->input->get('estado');
                $this->load->view('controladordocdia.inc.php', $data);
            }
            else {
                if(isset($_GET['proceso_sig'])){
                    if ($_GET['proceso_sig']=='P7') {
                        header("Location:http://localhost/PREGUNTA_1/index.php/controlador/");
                    }else{
                        $cod_proceso_sig=$_GET['proceso_sig'];
                        $data['query']=$this->flujo->obtProceso($cod_proceso_sig);
                        $this->load->view('controlador_flujo', $data);   
                    }
                }
                else{
                    header("Location:http://localhost/PREGUNTA_1/index.php/controlador/");
                }
            }
        }
        else {
            $codigo_proceso=$_GET['proceso'];
            if($data['query']=$this->flujo->obtProcesoAnt($codigo_proceso))
            {
                $this->load->view('controlador_flujo', $data);
            }
            else{
                header("Location:http://localhost/PREGUNTA_1/index.php/controlador/");
            }
        }    
    }
}
