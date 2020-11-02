const formularioContactos=document.querySelector('#contacto');//praseleccionar elemtos retorna maximo un elemto


eventListeners();

function Listeners(){
	formularioContactos.addEventListeners(leerformulario);//llamar emediatamentemente ejecute le codigo
}

function leerformulario(e){
	
	e.preventDefault();
	
	/* lee datos de los inputs*/
	const nombre=document.querySelector('#nombre'),value,
	empresa=document.querySelector('#empresa'),value,
	
	telefono=document.querySelector('#telefono'),value;
	accion=document.querySelector('#accion').value;/*  como le di id que se llama  accion tengo que crear esa variable para que sepa el mismo formulario va terner editar otro de crear nuevo */
	
	if (nombre==''||empresa==''||telefono=='') {
		
		mostrarnotificacion('todos los campos obligatorios','error');
		
	}else{
		/*pasa la validacion crear llamda a jax */
		const infoContacto=new FormData();/
		infoContacto.append('nombre',nombre);/* de esta forma decimos que valor la llave*/
		infoContacto.append('empresa',empresa);
		infoContacto.append('telefono',telefono);
		infoContacto.append('accion',accion);
	/*console.log('Tiene algo');*/
		console.log(infoContacto);//para validar con valores a frodata
		if(accion=='crear'){
			//crear un nuevo elelemto
		}else{
			//editar contacto
		}
		
	}
}


//notificacion en pantalla
function mostrarnotificacion{
	const notificacion=document.createElement('div');
	notificacion,texContent='hubo un error';
	
	//formulario
	
	formularioContactos.insertBefore(notificacion,document.querySelector('form legend'));
	
	
	//ocultar y nostra la notificacion
	
	setTimeout(() => {
		notificacion,classList.add('visible');
		setTimeout(() => {
			notificacion,classList.remove('visible');
		}, 3000);
	}, 100);//sper una dcimaparte de un segundo
}