<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="dist/output.css" rel="stylesheet">
    <link rel="stylesheet" href="css/banner.css">
</head>

<body>
<?php include 'assets/header.html' ?>
    <div class="container_carrusel">
        <div class="mySlides">
        <img src="img/BANNERPRIN.webp" alt="imagen-1">
        </div>
        <div class="mySlides">
            <img src="img/BANNER 2.webp" alt="">
        </div>
        <div class="mySlides">
            <img src="img/BANNER-3.webp" alt="">
        </div>

        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>

        <div class="elements">
            <button class="quadrate" onclick="currentSlide(1)"></button>
            <button class="quadrate" onclick="currentSlide(2)"></button>
            <button class="quadrate" onclick="currentSlide(3)"></button>
        </div>
    </div>
    <!--
    <div class="nosotros">
        <h2>Sobre Nosotros</h2>
    </div>
    <div class="container_nosotros">

        
        <img src="img/logoNosotros.webp" alt="Mi imagen">
        <div class="texto">
            <h3> ¿ QUE ES VAPING CLOUD?</h3>
            <p>Lorem Ipsum es simplemente el texto de relleno de
                las imprentas y archivos de texto. Lorem Ipsum ha
                sido el texto de relleno estándar de las industrias
                desde el año 1500, cuando un impresor (N. del T.
                persona que se dedica a la imprenta) desconocido usó
                una galería de textos y los mezcló de tal manera que
                logró hacer un libro de textos especimen.
        </div>
    </div>
          -->
    <script>
    let slideIndex = 1;
    showSlides(slideIndex)

    setInterval(function() {
        plusSlides(1);
    }, 4000);

    function plusSlides(n) {
        showSlides(slideIndex += n)
    }

    function currentSlide(n) {
        showSlides(slideIndex = n)
    }

    function showSlides(n) {
        let i;
        let slides = document.querySelectorAll(".mySlides");
        let quadrates = document.querySelectorAll(".quadrate");
        if (n > slides.length) slideIndex = 1
        if (n < 1) slideIndex = slides.length
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none"
        }
        for (i = 0; i < quadrates.length; i++) {
            quadrates[i].className = quadrates[i].className.replace("active", "")
        }
        slides[slideIndex - 1].style.display = "block";
        quadrates[slideIndex - 1].className += " active";
    }
    </script>




 <!-- pruena    -->

<body>
    <br>
    <div style="width: 80%; margin: auto;">
        <h1 class="titulo" style="text-align: center;  font-family: 'Krona One', sans-serif; font-style: normal;">
            ¡Promociones del mes!</h1>
        <div class="card-container">
            <div class="card"> <img src="img/Pruebac.png" alt="">
                <p style="font-family: 'Krona One', sans-serif; font-style: normal;  color: #131111e1">Relx Essential</p>
                <p style="font-family: 'Krona One', sans-serif; font-style: normal color: #131111e1;">x 2 Pods</p>
                <p style="font-family: 'Krona One', sans-serif; font-style: normal;">S/ 115</p><button
                    style="background-color: #fff;  border: 1px solid #aaa8a8; font-family: sans-serif; font-style: normal;">Comprar</button>
            </div>
            <div class="card"> <img src="img/Pruebac.png" alt="">
                <p style="font-family: 'Krona One', sans-serif; font-style: normal; color: #131111e1 ">Relx Essential</p>
                <p style="font-family: 'Krona One', sans-serif; font-style: normal; color: #131111e1">x 2 Pods Pro</p>
                <p style="font-family: 'Krona One', sans-serif; font-style: normal;">S/ 115</p> <button
                    style="background-color: #fff;  border: 1px solid #aaa8a8; font-family: sans-serif; font-style: normal;">Comprar</button>
            </div>
            <div class="card"> <img src="img/Pruebac.png" alt="">
                <p style="font-family: 'Krona One', sans-serif; font-style: normal; color: #131111e1">Relx Essential</p>
                <p style="font-family: 'Krona One', sans-serif; font-style: normal;color: #131111e1">x 3 Pods</p>
                <p style="font-family: 'Krona One', sans-serif; font-style: normal;">S/ 115</p> <button
                    style="background-color: #fff;  border: 1px solid #aaa8a8;font-family: sans-serif; font-style: normal;">Comprar</button>
            </div>
        </div>
    </div>
</body>



<style>


    body {
        box-shadow: none;
    }

    .card-container {
        display: flex;
        justify-content: center;
    }

    .card {
        margin: 10px;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .card img {
        width: 200px;
        height: 200px;
        border: 1px solid #aaa8a8;
    
    }

    .card p {
        margin: 5px 0;
    }

    .card button {
        width: 200px;
        height: 40px;
        
    }
    
    h1 .titulo{
        font-size: 24px;
    }

    @media (max-width: 700px) {
        .card-container {
            flex-direction: column;
        }
    }

    @media (max-width: 220px) {
        .card img {
            width: 150px;
            height: 150px;
        }

        h1 {
            font-size: 10px;
        }

        .card button {
            width: 150px;
            height: 30px;
        }
    }
    body {
        background-color: white;
    }
    

</style>








    <?php require_once("assets/footer.html") ?>
</body>

</html>