
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
  
</head>



<?php include 'header.html' ?>



<div class="container-pasar">
  <div class="links">
    <a class="no_separar" href="../index.php">Inicio</a>
    <div class="separator">
      <i class="fa-solid fa-caret-right fa-beat"></i>
    </div> 
    <a class="no_separar" href="promociones.php">Promociones</a>
  </div>
</div>

<style>
.container-pasar {
  display: flex;
  justify-content: center;
  align-items: center;
  margin-top: 40px;
}

.links {
  display: flex;
  align-items: center;
}

.no_separar {
  font-size: 1.5rem; /* reducir tamaño de fuente */
  color: #333;
  text-decoration: none;
  margin: 0 50px; /* reducir margen */
  position: relative;
  transition: 0.5s;
  overflow: hidden;
  letter-spacing: -1px; /* reducir el espacio entre letras */
  font-style: italic; /* hacer el texto cursivo */
}

.no_separar:hover {
  color: #e5345b;
}

.no_separar::after {
  content: '';
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 2px;
  background: #e5345b;
  transform: scaleX(0);
  transition: 0.5s;
}

.no_separar:hover::after {
  transform: scaleX(1);
} 

.separator i {
  font-size: 1.5rem; /* reducir tamaño de fuente */
  margin: 0 5px; /* reducir margen */
  animation: beating 1s infinite;
}

@keyframes beating {
  0% {
    transform: scale(1);
  }
  50% {
    transform: scale(1.2);
  }
  100% {
    transform: scale(1);
  } 
}
</style>




<style> 
* {
        margin: 0;
        padding: 0;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
    }


.gallery {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  grid-template-rows: repeat(3, 1fr);
  grid-gap: 60px; /* Cambiado de 20px a 30px */
  max-width: 700px;
  margin: 0 auto;
}

.gallery img {
    max-width: 100%;
  object-fit: cover;
}

.gallery-item {
	flex: 0 0 calc(50% - 10px);
      margin-bottom: 20px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
      overflow: hidden;
}


.gallery-image:hover {
	transform: scale(1.1);
}

.gallery-image {
      width: 100%;
      height: auto;
      transition: transform 0.3s ease-in-out;
    }


    @media screen and (max-width: 768px) {
  .gallery {

    grid-template-rows: auto;
    justify-content: center; /* Para centrar horizontalmente la galería */
    grid-gap: 10vw; /* Cambiado el grid-gap para que sea proporcional al ancho de la pantalla */
  }
  
  .gallery-item {
    flex: 0 0 100%; /* Para que los elementos ocupen todo el ancho de la pantalla */
  }
  
  .gallery-image:hover {
    transform: none; /* Quitando el efecto de aumento al pasar el ratón */
  }
}




</style>


<body>
  <br><br><br><br><br>
  
<div class="gallery">
      <div class="gallery-item"> <img class="gallery-image" src="../img/prueba3.webp" alt="Imagen 1"></div>
      <div class="gallery-item"> <img class="gallery-image" src="../img/prueba5.jpg " alt="Imagen 1"></div>
      <div class="gallery-item"> <img class="gallery-image" src="../img/prueba1.jpg" alt="Imagen 1"></div>
      <div class="gallery-item"> <img class="gallery-image" src="../img/prueba3.webp" alt="Imagen 1"></div>
      <div class="gallery-item"> <img class="gallery-image" src="../img/prueba2.jpg" alt="Imagen 1"></div>
      <div class="gallery-item"> <img class="gallery-image" src="../img/pruebac.png" alt="Imagen 1"></div>
</div>
<br> <br>



     <?php include 'footer.html' ?>
</body>
</html>