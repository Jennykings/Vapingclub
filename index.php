<!doctype html>
<html>
<head>
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <!-- custom css -->
    <link href="https://fonts.googleapis.com/css2?family=Krona+One&display=swap" rel="stylesheet">
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



    <script>
        let slideIndex = 1;
        showSlides(slideIndex)

        setInterval(function () {
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

    <body> <br>
        <div style="width: 80%; margin: auto;">
            <h1 class="titulo" style="text-align: center; font-family: 'Krona One', sans-serif; font-style: normal;">
                ¡Promociones del mes!</h1>
            <div class="card-container">
                <div class="card"> <img src="img/Pruebac.png" alt="">
                <p style="font-family: 'Krona One', sans-serif; font-style: normal; color: #131111e1 ;   margin-top: 25px;">Relx
                        Essential</p>
                    <p style="font-family: 'Krona One', sans-serif; font-style: normal color: #131111e1;">x 2 Pods</p>
                    <p style="font-family: 'Krona One', sans-serif; font-style: normal;">S/ 115</p> <button
                        style="background-color: #fff; border: 1px solid #aaa8a8; font-family: sans-serif; font-style: normal;margin-top: 5px">Comprar</button>
                </div>
                <div class="card"> <img src="img/Pruebac.png" alt="">
                    <p style="font-family: 'Krona One', sans-serif; font-style: normal; color: #131111e1 ;  margin-top: 25px">Relx
                        Essential</p>
                    <p style="font-family: 'Krona One', sans-serif; font-style: normal; color: #131111e1">x 2 Pods Pro
                    </p>
                    <p style="font-family: 'Krona One', sans-serif; font-style: normal;">S/ 115</p> <button
                        style="background-color: #fff; border: 1px solid #aaa8a8; font-family: sans-serif; font-style: normal;margin-top: 5px">Comprar</button>
                </div>
                <div class="card"> <img src="img/Pruebac.png" alt="">
                    <p style="font-family: 'Krona One', sans-serif; font-style: normal; color: #131111e1;  margin-top: 25px" >Relx Essential
                    </p>
                    <p style="font-family: 'Krona One', sans-serif; font-style: normal;color: #131111e1">x 3 Pods</p>
                    <p style="font-family: 'Krona One', sans-serif; font-style: normal;">S/ 115</p> <button
                        style="background-color: #fff; border: 1px solid #aaa8a8;font-family: sans-serif; font-style: normal; margin-top: 5px">Comprar</button>
                </div>
            </div>
        </div>
    </body>



    <style>
    .card-container {
        display: flex;
        justify-content: center;
        margin-top: 40px;
    }

    .card {
        display: flex;
        flex-direction: column;
        align-items: center;
        border: 9px solid #fff;
        margin: 40px;
        transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        box-shadow: 0 0 0 rgba(0, 0, 0, 0.2);
    }
    
    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
    }

    .card img {
        width: 200px;
        height: 200px;
        border: 1px solid #aaa8a8;
        transition: transform 0.3s ease-in-out;
    }

    .card img:hover {
        transform: scale(1.1);
    }

    .card p {
        margin: 5px 0;
    }

    .card button {
        width: 200px;
        height: 40px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        transition: 0.3s;
    }

    .card button:hover {
        transform: translateY(-2px);
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2), 0 4px 8px rgba(0, 0, 0, 0.19);
    }

    h1 .titulo {
        font-size: 24px;
    }

    @media (max-width: 927px) {
        .card {
            margin: 0px;
        }
    }

    @media (max-width: 767px) {
        .card-container {
            flex-direction: column;
        }

        .card {
            margin: 0px;
        }
    }

    @media (max-width: 220px) {
        .card img {
            width: 150px;
            height: 150px;
        }

        .titulo {
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


    <!-- pruena  2   -->
    <h1 class="titulo"
        style=" font-size: 25px; text-align: center;  font-family: 'Krona One', sans-serif; font-style: normal;    margin-top: 40px;">
        Sobre nosotros</h1>
    <style>
        {
            padding: 0;
            margin: 0;
            box-sizing: border-box;

        }

        .wrapper {
            display: flex;
            justify-content: center;

        }

        .about-container {
            width: 85vw;
            background-color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 2rem;
            border-radius: 5px;
        }

        .image-container {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .image-container img {
            width: 30vw;
            max-height: 40vh;
            height: auto;

        }

        .text-container {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
            font-size: 1.2rem;
        }

        .text-container h1 {
            font-size: 4rem;
            margin-bottom: 2rem;
        }

        .text-container p {

            font-size: 1.4rem;
            text-align: left;
        }

        @media (max-width: 700px) {
            .about-container {
                flex-direction: column;
            }

            .image-container,
            .text-container {
                width: 100%;
            }

            .image-container img {
                width: 70vw;
            }
        }
    </style>
    </head>

    <body>
        <div class="wrapper">
            <div class="about-container">
                <div class="image-container">
                    <img src="img/SobreNosotros.jpeg" alt="">
                </div>
                <div class="text-container">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br>
                        Sed diam nonummy nibh euismod tincidunt ut laoreet <br>
                        dolore magna aliquam erat volutpat.<br> <br>
                        <br>
                        Ut Lorem ipsum dolor sit amet consectetur adipisicing
                        elit., sed diam nonummuy nibh euismod tincidunt ut laoreet
                        dolore magna alliqueam erat volutpat. Ut wisi anim ad
                        minim veniam, quis nostrud exerci tation uliamcorper
                        suscipit.
                    </p>

                </div>
            </div>
        </div>
    </body>
    <?php require_once("assets/footer.html") ?>
</body>

</html>