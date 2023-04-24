 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- CSS only -->
        <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
         <!-- Stylos Css propios texto -->
         <link href="https://fonts.googleapis.com/css2?family=Krona+One&display=swap" rel="stylesheet">
</head>
<body>
<?php include 'assets/header.html' ?>

 <!-- 
    <body>
        <div class="container">
            <div class="img_container">
                <span class="prev_arrow">&#10094;</span>
                <img src="img1.jpg" alt="" class="main_img">
                <span class="next_arrow">&#10095;</span>
            </div>

            <div class="thumbnail_container">
                <img class="thumbnail active" src="img1.jpg" alt="">
                <img class="thumbnail" src="img2.jpg" alt="">
                <img class="thumbnail" src="img3.jpg" alt="">
                <img class="thumbnail" src="img4.jpg" alt="">
            </div>
        </div>



<script>
   document.addEventListener('DOMContentLoaded', function() {
  const prevArrow = document.querySelector('.prev_arrow');
  const nextArrow = document.querySelector('.next_arrow');
  const currentImg = document.querySelector('.main_img');
  const thumbnailImgs = document.querySelectorAll('.thumbnail');

  // Evento "click" para la flecha previa
  prevArrow.addEventListener('click', () => {
    const currentImgSrc = currentImg.getAttribute('src');
    let prevImgSrc = '';

    // Encontrar la imagen anterior en la lista de miniaturas
    for (let i = 0; i < thumbnailImgs.length; i++) {
      if (thumbnailImgs[i].getAttribute('src') === currentImgSrc) {
        if (i === 0) {
          prevImgSrc = thumbnailImgs[thumbnailImgs.length - 1].getAttribute('src');
        } else {
          prevImgSrc = thumbnailImgs[i - 1].getAttribute('src');
        }
        break;
      }
    }

    // Cambiar la imagen principal a la imagen anterior
    currentImg.setAttribute('src', prevImgSrc);
  });

  // Evento "click" para la flecha siguiente
  nextArrow.addEventListener('click', () => {
    const currentImgSrc = currentImg.getAttribute('src');
    let nextImgSrc = '';

    // Encontrar la siguiente imagen en la lista de miniaturas
    for (let i = 0; i < thumbnailImgs.length; i++) {
      if (thumbnailImgs[i].getAttribute('src') === currentImgSrc) {
        if (i === thumbnailImgs.length - 1) {
          nextImgSrc = thumbnailImgs[0].getAttribute('src');
        } else {
          nextImgSrc = thumbnailImgs[i + 1].getAttribute('src');
        }
        break;
      }
    }

    // Cambiar la imagen principal a la siguiente imagen
    currentImg.setAttribute('src', nextImgSrc);
  });

  // Evento "click" para las miniaturas
  thumbnailImgs.forEach((thumbnailImg) => {
    thumbnailImg.addEventListener('click', () => {
      const newImgSrc = thumbnailImg.getAttribute('src');
      currentImg.setAttribute('src', newImgSrc);

      // Remover la clase "active" de todas las miniaturas
      thumbnailImgs.forEach((img) => {
        img.classList.remove('active');
      });

      // Agregar la clase "active" a la miniatura seleccionada
      thumbnailImg.classList.add('active');
    });
  });
});
</script>


<script>







</script>
<style>
   * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}



body {
  display: flex;
  align-items: center;
  justify-content: center;
  min-height: 100vh;
  background: #f0f0f0;
}

.container .img_container {
  position: relative;
  width: 350px;
  height: 450px;
  margin-bottom: 20px;
}

.container .img_container .main_img {
  width: 100%;
  height: 100%;
  border-radius: 5px;
  box-shadow: 0 5px 5px rgba(1, 23, 46, 0.6);
  object-fit: cover;
}

.container .img_container .prev_arrow,
.container .img_container .next_arrow {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  width: 30px;
  height: 30px;
  font-size: 30px;
  color: white;
  background-color: rgba(0, 0, 0, 0.5);
  border-radius: 50%;
  cursor: pointer;
  display: flex;
  justify-content: center;
  align-items: center;
}

.container .img_container .prev_arrow {
  left: 20px;
}

.container .img_container .next_arrow {
  right: 20px;
}

.container .thumbnail_container {
  height: 80px;
  display: flex;
  justify-content: space-between;
}

.container .thumbnail_container .thumbnail {
  width: 80px;
  height: 80px;
  border-radius: 5px;
  cursor: pointer;
  object-fit: cover;
  opacity: 0.7;
  transition: 0.3s;
}

.container .thumbnail_container .thumbnail:hover {
  opacity: 1;
}

.active {
  opacity: 1 !important;
  box-shadow: 0 5px 5px rgba(1, 23, 46, 0.6);
}

</style>

















<style>
    .gallery {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
  position: relative;
}

.main_img {
  height: 400px;
  margin: 20px;
  cursor: zoom-in;
}

.thumbnail_container {
  display: flex;
  justify-content: center;
  align-items: center;
  margin-top: 20px;
}

.thumbnail {
  height: 80px;
  margin: 10px;
  cursor: pointer;
}

.thumbnail.active {
  border: 2px solid red;
}

.arrow_container {
  display: flex;
  justify-content: space-between;
  align-items: center;
  position: absolute;
  top: calc(50% - 15px);
  width: 100%;
}

.prev_arrow,
.next_arrow {
  font-size: 30px;
  color: white;
  cursor: pointer;
}

.zoom {
  position: fixed;
  z-index: 999;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.8);
  display: none;
  justify-content: center;
  align-items: center;
}

.zoom img {
  max-width: 80%;
  max-height: 80%;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  cursor: move;
  position: absolute;
}

.zoomed {
  transform: scale(1.5);
  transition: transform 0.3s ease-in-out;
}
</style>



<script>
    document.addEventListener('DOMContentLoaded', function() {
  const prevArrow = document.querySelector('.prev_arrow');
  const nextArrow = document.querySelector('.next_arrow');
  const currentImg = document.querySelector('.main_img');
  const thumbnailImgs = document.querySelectorAll('.thumbnail');
  const zoomContainer = document.createElement('div');
  const zoomImg = document.createElement('img');

  // Agregar contenedor y imagen de zoom a la página
  zoomContainer.classList.add('zoom');
  zoomContainer.appendChild(zoomImg);
  document.body.appendChild(zoomContainer);

  // Evento "click" para la imagen principal
  currentImg.addEventListener('click', () => {
    zoomImg.setAttribute('src', currentImg.getAttribute('src'));
    zoomContainer.style.display = 'flex';
    currentImg.classList.add('zoomed');
  });

  // Evento "click" para la miniatura
  thumbnailImgs.forEach((thumbnailImg) => {
    thumbnailImg.addEventListener('click', () => {
      const newImgSrc = thumbnailImg.getAttribute('src');
      currentImg.setAttribute('src', newImgSrc);

      // Remover la clase "active" de todas las miniaturas
      thumbnailImgs.forEach((img) => {
        img.classList.remove('active');
      });

      // Agregar la clase "active" a la miniatura seleccionada
      thumbnailImg.classList.add('active');
    });
  });

  // Evento "click" para el contenedor de zoom
  zoomContainer.addEventListener('click', () => {
    zoomContainer.style.display = 'none';
    currentImg.classList.remove('zoomed');
  });

  // Evento "click" para la flecha previa
  prevArrow.addEventListener('click', () => {
    const currentImgSrc = currentImg.getAttribute('src');
    let prevImgSrc = '';

    // Encontrar la imagen anterior en la lista de miniaturas
    for (let i = 0; i < thumbnailImgs.length; i++) {
      if (thumbnailImgs[i].getAttribute('src') === currentImgSrc) {
        if (i === 0) {
          prevImgSrc = thumbnailImgs[thumbnailImgs.length - 1].getAttribute('src');
        } else {
          prevImgSrc = thumbnailImgs[i - 1].getAttribute('src');
        }
        break;
      }
    }

    // Actualizar la imagen principal y la miniatura activa
    currentImg.setAttribute('src', prevImgSrc);
    thumbnailImgs.forEach((img) => {
      img.classList.remove('active');
      if (img.getAttribute('src') === prevImgSrc) {
        img.classList.add('active');
      }
    });
  });

  // Evento "click" para la flecha siguiente
  nextArrow.addEventListener('click', () => {
    const currentImgSrc = currentImg.getAttribute('src');
    let nextImgSrc = '';

    // Encontrar la imagen siguiente en la lista de miniaturas
    for (let i = 0; i < thumbnailImgs.length; i++) {
      if (thumbnailImgs[i].getAttribute('src') === currentImgSrc) {
        if (i === thumbnailImgs.length - 1) {
          nextImgSrc = thumbnailImgs[0].getAttribute('src');
        } else {
          nextImgSrc = thumbnailImgs[i + 1].getAttribute('src');
        }
        break;
      }
    }

    // Actualizar la imagen principal y la miniatura activa
    currentImg.setAttribute('src', nextImgSrc);
    thumbnailImgs.forEach((img) => {
      img.classList.remove('active');
      if (img.getAttribute('src') === nextImgSrc) {
        img.classList.add('active');
      }
    });
  });

  // Función para mover la imagen ampliada dentro del contenedor de zoom
  let isDragging = false;
  let currentX;
  let currentY;
  let initialX;
  let initialY;
  let xOffset = 0;
  let yOffset = 0;

  zoomContainer.addEventListener("mousedown", dragStart);
  zoomContainer.addEventListener("mouseup", dragEnd);
  zoomContainer.addEventListener("mousemove", drag);

  function dragStart(e) {
    initialX = e.clientX - xOffset;
    initialY = e.clientY - yOffset;

    if (e.target === zoomImg) {
      isDragging = true;
    }
  }

  function dragEnd(e) {
    initialX = currentX;
    initialY = currentY;

    isDragging = false;
  }

  function drag(e) {
    if (isDragging) {
      e.preventDefault();

      currentX = e.clientX - initialX;
      currentY = e.clientY - initialY;

      xOffset = currentX;
      yOffset = currentY;

      setTranslate(currentX, currentY, zoomImg);
    }
  }

  function setTranslate(xPos, yPos, el) {
    el.style.transform = "translate3d(" + xPos + "px, " + yPos + "px, 0)";
  }
});
</script>










-->








<?php include 'footer.html' ?>
</body>
</html>