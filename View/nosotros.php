<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VAPING</title>
    <link rel="shortcut icon" href=" " type="image/x-icon">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
        font-size: 90px;
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

    @media screen and (max-width: 347px) {
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

.container {
display: flex;
flex-direction: column;
gap: 2rem;
width: 100%;
justify-content: center;
align-items: center;
}

.box {
    border: 1px solid black;
    padding: 1rem;
   text-align: center;
}

.titulo-vicion{
transform: none;
font-size: 25px;
font-family: 'Krona One', sans-serif;


}
.titulo-Mision{
transform: none;
font-size: 25px;
font-family: 'Krona One', sans-serif;


}
.texto-Mision{
    text-align: left;
    line-height: 1.5;
}
.texto-vicion{
    text-align: right;
    line-height: 1.5;
   
}


@media (min-width: 834px) {
.container {
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


.titulo-Mision{
transform: translateX(-140px);
margin: 5;
margin-bottom: 0.5rem;
font-size: 30px;
font-family: 'Krona One', sans-serif;


}
.titulo-vicion{
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
<div class="container">
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
<br>
<br>

















    <?php include 'footer.html' ?>
</body>

</html>