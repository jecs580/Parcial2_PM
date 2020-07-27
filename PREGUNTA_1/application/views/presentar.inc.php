<?php
    foreach($proceso -> result() as $resultado){
        $proceso=$resultado->codProceso;
        $proceso_siguiente=$resultado->codProcesoSiguiente;
    }
?>
<h2>Presentar Documentos</h2>
<input type="hidden" value=<?php echo $proceso;?> name='proceso'>
<input type="hidden" value=<?php echo $proceso_siguiente;?> name='proceso_sig'>
<label>Carnet de Identidad</label><br>
<input required type="text" name='ci'><br><br>
<label>Certificado de Notas</label><br>
<input type="radio" name="certificado_notas" value="SI">
<label >SI</label>
<input type="radio"  name="certificado_notas" value="NO">
<label >NO</label><br><br>
<label>Titulo de Bachiller</label><br>
<input type="radio" name="titulo_bachiller" value="SI">
<label>SI</label>
<input type="radio"  name="titulo_bachiller" value="NO">
<label >NO</label><br><br>
<label>Matricula</label><br>
<input type="radio" name="matricula" value="SI">
<label >SI</label>
<input type="radio"  name="matricula" value="NO">
<label >NO</label><br>