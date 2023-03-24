<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">


  <link href="https://fonts.googleapis.com/css2?family=Krona+One&display=swap" rel="stylesheet">

  <!-- Enlace al archivo CSS de Bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
  
</head>
<body>

  <!-- Contenido de tu página aquí -->
  
  <!-- Scripts de Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js"></script>
  
</body>
</html>


<br>
<br>
<br>

<div class="cards-container">

  <div class="card">
    <div class="card-image-container">
      <img class= "modifi"src="../img/steinegro.webp" alt="Imagen 1">
    </div>
    <div class="card-content">
      <h2>La genialidad del Relx Infinity</h2>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.set diam nonummy nibh euismod tincidunt ut loareet dolore magna aliqueam erat Lorem ipsum dolor sit amet</p>
      <button>Leer</button>
    </div>
  </div>

  <div class="card">
    <div class="card-image-container">
      <img src="../img/manos.webp" alt="Imagen 2">
    </div>
    <div class="card-content">
      <h2>Umboxing Relx Essential</h2>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing \n elit.set diam nonummy nibh euismod tincidunt ut loareet dolore magna aliqueam erat Lorem ipsum dolor sit amet</p>
      <button>Ver</button>
    </div>
  </div>

  <div class="card">
    <div class="card-image-container">
      <img src="../img/azul.webp" alt="Imagen 3">
    </div>
    <div class="card-content">
      <h2>Pods para verano</h2>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.set diam nonummy nibh euismod tincidunt ut loareet dolore magna aliqueam erat Lorem ipsum dolor sit amet</p>
      <button>Leer</button>
    </div>
  </div>

</div>

<style>
  .card {
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: flex-start;
    width: calc(60% - 10px);
    margin: 50px auto;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    overflow: hidden;

    background-color: rgb(211, 210, 210);
  }

  .card-image-container {
  width: 30%;
  height: 230px; /* Altura fija */
  overflow: hidden;
  background-color: #fff;
  position: sticky;
  top: 0;
}

.card-image-container img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  border: 1px solid  #808080;
}

  .card-content {
    width:60%;
    margin-left: 20px;
  }


  .card h2 {
 
    font-weight: bold; /* Agregar esta línea */
  font-size: 1.5rem;
  margin-top: 0;
  margin-bottom: 10px;
  line-height: 1.2;
  font-family: 'Krona One', sans-serif;
  color: #000;


  }

  .card p {
    padding-top: 10px;
    max-width: 300px;
    font-size: 1.1rem;
    line-height: 1.7;
    margin-bottom: 20px;
    overflow-wrap: break-word;
    font-family: 'Open Sans', sans-serif;

  }

  .card h2:first-child {
    font-size: 1.4rem;
  }

  .card h2:last-child {
    font-size: 3rem;
    margin-top: -20px;
    margin-bottom: 30px;
    font-weight: bold;
  }

  .card button {
    align-self: flex-start;
    background-color:  rgb(211, 210, 210);
    color: #000;
    border: 1px solid #0000005b;
    border-radius: 0;
    padding: 7px 40px;
    margin-right: auto;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    transition: background-color 0.3s ease;
    margin-left: 400px;


  }

  .card button:hover {
    background-color: #000;
    color: #fff;
  }

  @media (max-width: 768px) {
  .card {
    width: 80%;
    margin-bottom: 40px;
  }
 
  .card-image-container {
    margin: 0 auto;
  }
  
  .card h2:last-child {
    font-size: 1.5rem;
  }
  .card button {
    margin-left: 250px; /* Modificación */
    padding: 7px 35px;

    }
    .card-image-container {
  width: 30%;
  height: 150px; /* Altura fija */
  overflow: hidden;
  background-color: #fff;
  position: sticky;
  top: 0;
}
   
}

@media (max-width: 901px) {
  .card {
    width: 80%;
    margin-bottom: 40px;
  }
 
  .card-image-container {
    margin: 0 auto;
  }
  
  .card h2:last-child {
    font-size: 1.5rem;
  }
  .card button {
    margin-left: 250px; /* Modificación */
    padding: 7px 35px;

    }
}


@media (max-width: 425px) {
    .card {
    width: 100%;
    margin-bottom: 50px;
  }
  
  .card h2 {
    font-size: 0.5rem;
  }
  
  .card p {
    font-size: 0.9rem;
  }
  
  .card h2:last-child {
    font-size: 0.6rem;
  }
  .card button {
    margin-left: 230px; /* Modificación */
    padding: 7px 35px;

    }

    .card-image-container {
  width: 30%;
  height:100px; /* Altura fija */
  overflow: hidden;
  background-color: #fff;
  position: sticky;
  top: 0;
}
   
}


@media (max-width: 798px) {

  .card button {
    margin-left: 150px; /* Modificación */
    padding: 7px 35px;

    }
}
@media (max-width: 1267px) {

.card button {
  margin-left: 250px; /* Modificación */
  padding: 7px 35px;

  }
}

@media (max-width: 320px) {

.card button {
  margin-left: 60px; /* Modificación */
  padding: 7px 35px;

  }
      .card-image-container {
  width: 30%;
  height:100px; /* Altura fija */
  overflow: hidden;
  background-color: #fff;
  position: sticky;
  top: 0;
}
  
}

@media (max-width: 603px) {

.card button {
  margin-left: 50px; /* Modificación */
  padding: 7px 35px;

  }
}
</style>




<?php include 'footer.html' ?>
</body>
</html>