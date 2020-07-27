<?php
    foreach($proceso -> result() as $resultado){
        $proceso_siguiente=$resultado->codProcesoSiguiente;
        $proceso=$resultado->codProceso;
    }
?>
<input type="hidden" value=<?php echo $proceso; ?> name='proceso'>
<input type="hidden" value=<?php echo $proceso_siguiente;?> name='proceso_sig'>
    <h2>Lista de documentos</h2>
    <ul>
        <li>Carnet de Identidad</li>
        <li>Certificado notas</li>
        <li>Titulo de Bachiller</li>
        <li>Matricula</li>
    </ul>
