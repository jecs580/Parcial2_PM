<?php
// Direccion inicial http://localhost/PREGUNTA_1/index.php/controlador/
    foreach($proceso -> result() as $resultado){
        $proceso=$resultado->codProceso;
        $proceso_siguiente=$resultado->codProcesoSiguiente;
    }
?>
<input type="hidden" value=<?php echo $proceso;?> name='proceso'>
<input type="hidden" value=<?php echo $proceso_siguiente;?> name='proceso_sig'>
    <h2>Inscripcion</h2>
    <p>Las inscripciones se llevan actualmente</p>
