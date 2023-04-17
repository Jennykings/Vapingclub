<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VAPING</title>
    <link rel="shortcut icon" href=" " type="image/x-icon">

    <!-- Fontawesome -->
    <link href="https://fonts.googleapis.com/css2?family=Krona+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS only -->

    <!-- Stylos Css propios -->
    <link rel="stylesheet" href="css/stylos.css">
    <link rel="stylesheet" href="../css/stylos.css">
</head>

<body>
    <?php include 'header.html' ?>


    <br><br>
    <section id="banner">


        <div class="contenido-banner">
            <h3> <span>Vaping Cloud</span> <br><br> <br> Lorem, ipsum dolor sit amet consectetur adipisicing elit.<br>
                Non adipisci incidunt et mollitia voluptatibus maxime assumenda architecto dolorum vitae quis,<br> iusto
                culpa ipsum autem doloremque commodi quo quasi suscipit rem iusto culpa ipsum autem doloremque<br>
                commodi quo quasi suscipit rem commodi quo quasi suscipit rem </h3>

        </div>
    </section>

</body>

</html>




<style>
    * {
        margin: 0;
        padding: 0;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
    }

    #banner {
        padding: 0 50px;
        background-image: url(../img/nosotros.jpeg);
        height: 80vh;
        background-size: cover;
        background-position: center;
    }

    #banner::before {
        content: '';
        position: absolute;
        width: 100%;
        left: 0;
    }

    .contenido-banner {
        position: relative;
        color: #fff;
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
    }

    .contenido-banner h3 {
        font-size: 20px;
        font-weight: 400;
        padding: 10px 0px;
        line-height: 1.2;

    }

    .contenido-banner h3 span {
        font-weight: 600;
        font-size: 100px;
        font-family: 'Krona One', sans-serif;



    }

    @media screen and (max-width: 768px) {
        #banner {
            height: 50vh;
        }

        .contenido-banner h3 {
            font-size: 15px;
        }

        .contenido-banner h3 span {
            font-weight: 600;
            font-size: 50px;
        }

    }

    @media screen and (max-width: 500px) {
        #banner {
            height: 50vh;
        }

        .contenido-banner h3 {
            font-size: 10px;
        }

        .contenido-banner h3 span {
            font-weight: 600;
            font-size: 40px;
        }

    }
</style>




<style>
    .container-M-v {
        display: flex;
        flex-direction: column;
        gap: 2rem;
        width: 100%;
        justify-content: center;
        align-items: center;
    }

    .box {
        border: 2px solid rgba(235, 227, 227, 0.48);
        padding: 1rem;
        text-align: center;
    }

    .titulo-vicion {
        transform: none;
        font-size: 25px;
        font-family: 'Krona One', sans-serif;


    }

    .titulo-Mision {
        transform: none;
        font-size: 25px;
        font-family: 'Krona One', sans-serif;


    }

    .texto-Mision {
        text-align: left;

    }

    .texto-vicion {
        text-align: right;


    }


    @media (min-width: 834px) {
        .container-M-v {
            flex-direction: row;


        }
        .box {
            width: calc(50% - 0.5rem);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .texto-Mision {
            text-align: left;
            line-height: none;

        }

        .texto-vicion {
            text-align: right;
            line-height: none;
        }


        .titulo-Mision {
            transform: translateX(-140px);
            margin: 5;
            margin-bottom: 0.5rem;
            font-size: 30px;
            font-family: 'Krona One', sans-serif;


        }

        .titulo-vicion {
            transform: translateX(140px);
            margin: 5;
            margin-bottom: 0.5rem;
            font-size: 30px;
            font-family: 'Krona One', sans-serif;

        }

    }
</style>
<br><br>

<body>
<div class="container-M-v">

        <div class="box">
            <h2 class="titulo-Mision">Misión</h2>
            <p class="texto-Mision">Lorem ipsum dolor sit amet, consectetur adipis<br>
                Integer nec odio. Praesent libero. Sed cursus<br>
                ante dapibus diam. Sed nisi. Nulla quis sem at<br>
                nibh elementum imperdiet.ante dapibus diam nisi<br>
                Nulla quis sem at nibh elementum imperdiet</p>
        </div>
        <div class="box">
            <h2 class="titulo-vicion">Visión</h2>
            <p class="texto-vicion">Lorem ipsum dolor sit amet, consectetur adipis<br>
                Integer nec odio. Praesent libero. Sed cursus<br>
                ante dapibus diam. Sed nisi. Nulla quis sem at<br>
                nibh elementum imperdiet.ante dapibus diam nisi<br>
                Nullas quis sem at nibh elementum imperdiet</p>
        </div>
    </div>
</body>
<br>


<!-- ICONOS CON ANIMACIONES -->
<script src="https://kit.fontawesome.com/b8c17d689d.js" crossorigin="anonymous"></script>



<h1 class="titulo-valores">Valores</h1>
<div class="icon-container">
    <div class="icon-column">
        <span class="icon-circle">
            <i class="fas fa-user"></i>
        </span>
        <p>Lorem ipsum</p>
    </div>
    <div class="icon-column">
        <span class="icon-circle">
            <i class="fas fa-lock"></i>
        </span>
        <p>Lorem ipsum</p>
    </div>
    <div class="icon-column">
        <span class="icon-circle">
            <i class="fas fa-envelope"></i>
        </span>
        <p>Lorem ipsum</p>
    </div>
</div>
<div class="icon-container">
    <div class="icon-column">
        <span class="icon-circle">
            <i class="fas fa-phone"></i>
        </span>
        <p>Lorem ipsum</p>
    </div>
    <div class="icon-column">
        <span class="icon-circle">
            <i class="fas fa-map-marker-alt"></i>
        </span>
        <p>Lorem ipsum</p>
    </div>
    <div class="icon-column">
        <span class="icon-circle">
            <i class="fas fa-camera"></i>
        </span>
        <p>Lorem ipsum</p>
    </div>
</div>
<style>
    /* Estilos para los iconos */
    .fas {
        font-size: 2rem;
        color: #000000;
    }

    /* Estilos para los contenedores de iconos */
    .icon-container {
        display: flex;
        justify-content: center;
        margin: 2rem 0;
    }

    /* Estilos para cada columna de icono */
    .icon-column {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
        margin: 0 1rem;
    }

    /* Estilos para el círculo que rodea el icono */
    .icon-circle {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 3.5rem;
        height: 3.5rem;
        border-radius: 50%;
        background-color: #ffffff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
        border: 1px solid rgba(69, 69, 69, 0.48);
    }

    /* Estilos para el círculo cuando el cursor está encima */
    .icon-circle:hover {
        transform: scale(1.1);
        background-color: #f9a03f;
    }

    /* Estilos para el título */
    .titulo-valores {
        text-align: center;
        margin-top: 3rem;
        font-size: 25px;
        font-family: 'Krona One', sans-serif;
        ;
    }

    /* Estilos para dispositivos móviles */
    @media (max-width: 300px) {
        .icon-container {
            flex-direction: column;
        }
    }
</style>




<style>
    .container-contac {
        display: flex;
        flex-direction: column;
        align-items: center;
        min-height: 40vh;
        padding: 1rem;
        box-sizing: border-box;
    }

    .text-container {
        max-width: 800px;
        /* ajusta el ancho máximo según tus necesidades */
        margin: 0 auto;
        /* centra el contenedor */
    }

    .titulo-contacto {
        font-size: 1.7rem;
        margin-bottom: 1rem;
        font-family: 'Krona One', sans-serif;
    }

    .text-contacto {
        font-size: 20px;
        font-weight: 400;
        padding: 10px 0px;
        line-height: 1.2;
        text-align: center;


    }

    @media screen and (max-width: 600px) {
        .titulo-contacto {
            font-size: 1.2rem;
        }

        .text-contacto {
            font-size: 0.9rem;

        }

        .text-container {
            max-width: 90%;
        }
    }
</style>
<div class="container-contac">
    <h1 class="titulo-contacto">Contacto</h1>
    <div class="text-container">
        <p class="text-contacto">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio.
            Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at
            nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec
            sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla.

        </p>
    </div>
</div>








<?php include 'footer.html' ?>
</body>

</html>