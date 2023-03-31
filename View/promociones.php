<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
</head>



<?php include 'header.html' ?>

<style> 

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
      <div class="gallery-item"> <img class="gallery-image" src="../img/logoNosotros.webp" alt="Imagen 1"></div>
      <div class="gallery-item"> <img class="gallery-image" src="../img/logoNosotros.webp" alt="Imagen 1"></div>
      <div class="gallery-item"> <img class="gallery-image" src="../img/logoNosotros.webp" alt="Imagen 1"></div>
      <div class="gallery-item"> <img class="gallery-image" src="../img/logoNosotros.webp" alt="Imagen 1"></div>
      <div class="gallery-item"> <img class="gallery-image" src="../img/logoNosotros.webp" alt="Imagen 1"></div>
      <div class="gallery-item"> <img class="gallery-image" src="../img/logoNosotros.webp" alt="Imagen 1"></div>
</div>
<br> <br>



     <?php include 'footer.html' ?>
</body>
</html>