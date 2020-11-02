const formularioContactos=document.querySelector('#contacto');//declaramos de forma global ,lo voy a llamr difrentes parte del codigo entonces ,para no estar  declarandola misma varaible

eventListeners();

function eventListeners(){
	formularioContactos.addEventListener('submit',leerformulario);//llamar emediatamentemente ejecute le codigo
}

function leerformulario(e){
	
	e.preventDefault();
	
	/* lee datos de los inputs*/
	const nombre=document.querySelector('#nombre').value,
	empresa=document.querySelector('#empresa').value,
	
	telefono=document.querySelector('#telefono').value;
//	accion=document.querySelector('#accion').value;/*  como le di id que se llama  accion tengo que crear esa variable para que sepa el mismo formulario va terner editar otro de crear nuevo */
	
	if (nombre==''||empresa==''||telefono=='') {
		console.log('todos los campos estan vcios');
	}else{
		console.log('tiene algo');
	}

}



//notificacion en pantalla
function mostrarNotificacion(){
	const notificacion=document.createElement('div');
	notificacion,textContent='hubo un error';
	
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