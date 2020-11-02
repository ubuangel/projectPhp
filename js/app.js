const formularioContactos = document.querySelector('#contacto'),
      listadoContactos = document.querySelector('#listado-contactos tbody'); 
      

eventListeners();

function eventListeners() {
     // Cuando el formulario de crear o editar se ejecuta
     formularioContactos.addEventListener('submit', leerFormulario);

     // Listener para eliminar el boton
     

     
   
}

function leerFormulario(e) {
     e.preventDefault();

     // Leer los datos de los inputs
     const nombre = document.querySelector('#nombre').value,
           empresa = document.querySelector('#empresa').value,
           telefono = document.querySelector('#telefono').value, 
           accion = document.querySelector('#accion').value;

     if(nombre === '' || empresa === '' || telefono === '') {
          // 2 parametros: texto y clase
          mostrarNotificacion('Todos los Campos son Obligatorios', 'error');
     } else {
          // Pasa la validación, crear llamado a Ajax
          const infoContacto = new FormData();
          infoContacto.append('nombre', nombre);
          infoContacto.append('empresa', empresa);
          infoContacto.append('telefono', telefono);
          infoContacto.append('accion', accion);

          // console.log(...infoContacto);

          if(accion === 'crear'){
               // crearemos un nuevo contacto
               insertarBD(infoContacto);
          } else {
               // editar el contacto
               // leer el Id
               const idRegistro = document.querySelector('#id').value;
               infoContacto.append('id', idRegistro);
               actualizarRegistro(infoContacto);
          }
     }
}