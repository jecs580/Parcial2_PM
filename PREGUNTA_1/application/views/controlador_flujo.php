<?php
    $alerta="Incripcion incompleta por falta de documentos";
    if(isset($aux))
    {
        if($aux==1)
        {
            $alerta="Documentos al dia";
        }
    }
        foreach($query -> result() as $resultado){
            ?>
                    <?php $flujo=$resultado->codFlujo;
                        $proceso=$resultado->codProceso;
                        $proceso_siguiente=$resultado->codProcesoSiguiente;
                        $pantalla=$resultado->pantalla;
                ?>
            <?php
        }
        if ($proceso=='P4') {
            header("Location:http://localhost/PREGUNTA_1/index.php/controlador/?flujo=$flujo&proceso=$proceso&proceso_sig=$proceso_siguiente&pantalla=$pantalla&estado=$aux&mensaje=$alerta");    
        }
        else{
            header("Location:http://localhost/PREGUNTA_1/index.php/controlador/?flujo=$flujo&proceso=$proceso&proceso_sig=$proceso_siguiente&pantalla=$pantalla&estado=$aux"); 
        }
?>