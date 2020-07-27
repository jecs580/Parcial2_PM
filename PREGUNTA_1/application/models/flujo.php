<?php
if(!defined('BASEPATH')) exit('no se permite acceso directo al script');
    class flujo extends CI_Model{
        function __construct(){
            $this->load->database();
        }
        function obtProcesos(){
            $query=$this->db->get('proceso');
            if ($query->num_rows() > 0) return $query;
            else return false;
        }
        function obtProceso($pq){
            $this->db->where('codProceso', $pq);
            $query=$this->db->get('proceso');
            if ($query->num_rows() > 0) return $query;
            else return false;
        }
        function obtProcesoAnt($pq){
            $this->db->where('codProcesoSiguiente', $pq);
            $query=$this->db->get('proceso');
            if ($query->num_rows() > 0) return $query;
            else return false;
        }
        function obtProcesoCond($pq){
            $this->db->where('codProceso', $pq);
            $query=$this->db->get('procesocondicional');
            if ($query->num_rows() > 0) return $query;
            else return false;
        }
    }
?>