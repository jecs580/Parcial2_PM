<?php
    foreach($proceso -> result() as $resultado){
        $proceso_siguiente=$resultado->codProcesoSiguiente;
        $proceso=$resultado->codProceso;
    }
?>
<input type="hidden" value=<?php echo $proceso;?> name='proceso'>
<input type="hidden" value=<?php echo $proceso_siguiente;?> name='proceso_sig'>
<h2>Inscripcion Terminada</h2>


