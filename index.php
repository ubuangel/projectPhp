<?php  include 'inc/layout/header.php';?>
<div class="contednedor-barra">

	<h1>Agenda de contactos</h1>
</div>

<div class="bg-amarillo  contenedor sombra">
    <form  id="contacto" action="#" >
    	<legend>Añada un contacto <span>los campos son obligatorios</span></legend>
    	<div class="campos">
    	
    		<div class="campo">
    			<label for=" nombre">nombre </label>
    			<input type="text" placeholder="nombre contacto" id="nombre">
    		</div>
    		
    		<div class="campo">
    			<label for=" nombre">Empresa </label>
    			<input type="text" placeholder="nombre contacto" id="Empresa">
    		</div>
    		
    		<div class="campo">
    			<label for=" nombre">telefono: </label>
    			<input type="tel" placeholder="nombre contacto" id="nombre">
    		</div>
    		
    		<div class="campo enviar">
    			<input type="submit" value="Añadir">
    		</div>
    	</div>
    </form>
</div>

<?php  include 'inc/layout/footer.php';?>
