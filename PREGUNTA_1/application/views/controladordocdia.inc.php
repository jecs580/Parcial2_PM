<?php
 $proceso_sig='P1';
    if($estado=='1')
    {
        foreach($condicional -> result() as $resultado){
            $proceso=$resultado->codProcesoSI;
             }
    }
    else{
        foreach($condicional -> result() as $resultado){
            $proceso=$resultado->codProcesoNO;
             }
    }
    header("Location:http://localhost/PREGUNTA_1/index.php/controlador/index2?proceso_sig=$proceso&btnEnviar=Siguiente");    
?>