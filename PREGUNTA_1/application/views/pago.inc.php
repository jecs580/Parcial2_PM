<?php
    foreach($proceso -> result() as $resultado){
        $proceso=$resultado->codProceso;
        $proceso_siguiente=$resultado->codProcesoSiguiente;
    }
?>
<input type="hidden" value=<?php echo $proceso;?> name='proceso'>
<input type="hidden" value=<?php echo $proceso_siguiente;?> name='proceso_sig'>
<h2>Pago de Inscripcion</h2>
<h4>Realice el pago de su inscripcion en los bancos autorizados</h4>
