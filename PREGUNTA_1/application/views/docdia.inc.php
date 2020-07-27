<?php
    foreach($proceso -> result() as $resultado){
        $proceso=$resultado->codProceso;
        $proceso_siguiente=$resultado->codProcesoSiguiente;
    }
?>
<input type="hidden" value=<?php echo $proceso;?> name='proceso'>
<input type="hidden" value=<?php echo $proceso_siguiente;?> name='proceso_sig'>
<input type="hidden" value=<?php echo $estado;?> name='estado'>
<h2><?php echo $mensaje; ?></h2>