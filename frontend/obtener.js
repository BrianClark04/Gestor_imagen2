window.onload = ()=>{
    obtenerImg();
}

function mostrarImg(imagenes){
    let listaimgElement = document.querySelector("#listaimagen");
    listaimgElement.innerHTML="";
    imagenes.forEach(imagen => {
        let imgSrc = `../back/img/${imagen.Nombre}`;
        console.log('Generando ruta de imagen:', imgSrc);

        listaimgElement.innerHTML+=`
        <div>
            <img src="${imgSrc}" alt="${imagen.Nombre}">
        <p>${imagen.Nombre}</p>

        </div>
        `
        
    });
}
 async function obtenerImg(){
    let url = "http://localhost/Gestor_imagen/back/controlador/controlador_imagen.php?function=obtenerImagen";
    try {
        let consulta = await fetch(url);
        let datos = await consulta.json();
        console.log('Datos recibidos:', datos);
        if(datos.length>0){mostrarImg(datos);}
      
    } catch (error) {
        console.error('Error al obtener imágenes:', error);
    }
}