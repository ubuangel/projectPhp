<?php  
include 'inc/layout/header.php';
?>

<div class="contenedor-barra">

	<h1>Agenda de contactos</h1>
</div>

<div class="bg-amarillo contenedor sombra">
    <form  id="contacto" action="#">
    	     <legend>Añada un contacto <span>Todos los campos son obligatorios</span>
    	      </legend>
    	
    	<div class=" campos">
    	
    		<div class="campo">
    			<label for="nombre" >nombre</label>
    			<input type="text" placeholder="nombre contacto" id="nombre">
    		</div>
    		
    		<div class="campo">
    			<label for="empresa" >Empresa</label>
    			<input type="text" placeholder="nombre contacto" id="Empresa">
    		</div>
    		
    		<div class="campo">
    			<label for="nombre" >telefono</label>
    			<input type="tel" placeholder="nombre contacto" id="nombre">
    		</div>
    		
    		</div>
    	
        	<div class="campo enviar">
        		<input type="submit" value="Anadir" >
        	</div>
        	
    	
    	
    </form>

</div>

<div class="bg-blanco contenedor sombra contactos">
    <div class="contenedor-contactos">
    	<h2>contactos</h2>
    	<input type="text" id="buscar"class="buscador sombra" placeholder="buscar contactos...">
    	
    	
    	<p class="total contactos"><span>2</span>Contactos</p>
    	<div class="contenedor-tabla">
    		<table id="listado-contactos">
        		<thead>
            		<tr>
            			<th>Nombre</th>
            			<th>Empresa</th>
            			<th>Telefono</th>
            			<th>Acciones</th>
            		</tr>
            		
        		</thead>
        		
        		<tbody>
        		
            		<tr>
            			<td>Juan </td>
            			<td>Udemy </td>
            			<td>2323543</td>
            			<td>
            				<a class="btn-editar btn" href="#">
            				
            					<i class="fas fa-pen-square"></i>
            				</a>
            				
            				<button type="button">
            					<i class="fas fa-trash-alt"></i>
            				</button>
            			
            			 </td>
            			
            			
            		</tr>
            		
            		
            				<tr>
            			<td>Juan </td>
            			<td>Udemy </td>
            			<td>2323543</td>
            			<td>
            				<a class="btn-editar btn" href="#">
            				
            					<i class="fas fa-pen-square"></i>
            				</a>
            				
            				<button type="button">
            					<i class="fas fa-trash-alt"></i>
            				</button>
            			
            			 </td>
            			
            			
            		</tr>
            		
            		
            				<tr>
            			<td>Juan </td>
            			<td>Udemy </td>
            			<td>2323543</td>
            			<td>
            				<a class="btn-editar btn" href="#">
            				
            					<i class="fas fa-pen-square"></i>
            				</a>
            				
            				<button type="button">
            					<i class="fas fa-trash-alt"></i>
            				</button>
            			
            			 </td>
            			
            			
            		</tr>
        		</tbody>
        		
    		</table>
    	</div>
    	
    </div>


</div>

<?php  include 'inc/layout/footer.php';?>
