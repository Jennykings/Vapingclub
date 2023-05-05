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
  <?php include 'header.html' ?>

  <!-- GALERIA DE PRODUCTOS -->
  <br><br><br>
  <div class="product-container">
    <div class="product-list">
      <div class="product-item" data-name="Rexl Infinity" data-price="10" data-id="azul">
        <img src="../imgproduc/azul/azul-1.png" width="15%" alt="Producto 1">
      </div>
      <div class="product-item" data-name="Rexl Esential" data-price="20" data-id="negro">
        <img src="../imgproduc/negro/negro-1.png" width="15%" alt="Producto 1">
      </div>
      <div class="product-item" data-name="Rexl Pod " data-price="30" data-id="rojo">
        <img src="../imgproduc/rojo/rojo-1.png" width="15%" alt="Producto 1">
      </div>
      <div class="product-item" data-name="Rexl Pod Green " data-price="40" data-id="verde">
        <img src="../imgproduc/verde/verde-1.png" width="15%" alt="Producto 1">
      </div>
    </div>
    <!-- CAROUSEL DE PRODUCTOS -->

    <div id="carousel-container">
      <div class="img_container">
        <span class="prev_arrow">&#10094;</span>
        <img src="../imgproduc/azul/azul-1.png" alt="" class="main_img">
        <span class="next_arrow">&#10095;</span>
      </div>
      <div class="thumbnail_container">
        <img src="../imgproduc/azul/azul-1.png" alt="" class="thumbnail active_thumbnail">
        <img src="../imgproduc/azul/azul-2.png" alt="" class="thumbnail">
        <img src="../imgproduc/azul/azul-3.png" alt="" class="thumbnail">
        <img src="../imgproduc/azul/azul-4.png" alt="" class="thumbnail">
      </div>
    </div>
    <!--FORMULARIO DE PRODUCTOS -->
    <div class="product-details" style="float: right; position: absolute; margin-left: 900px;">
      <h2 class="product-name">Rexl Pod Dark Sparkle</h2>
      <p class="product-price">s/23</p> <label for="nicotina">Nicotina:</label> <select id="nicotina" name="nicotina">
        <option value="0">0%</option>
        <option value="3">3%</option>
        <option value="6">6%</option>
        <option value="9">9%</option>
      </select> <br><br> <label for="sabores">Sabores:</label> <select id="sabores" name="sabores">
        <option value="Fresa">Dark Sparkle</option>
        <option value="Menta">Menta</option>
        <option value="Uva">Uva</option>
        <option value="Manzana">Manzana</option>
      </select> <br><br> <label for="cantidad">Cantidad:</label> <input type="number" id="cantidad" name="cantidad"
        min="1" max="10"> <br><br> <button id="add-to-cart">AGREGAR AL CARRITO</button>
    </div>








    <style>
      #nicotina:hover,
#sabores:hover {
  background: #333;
  color: #fff; /* Agregar esta línea para cambiar el color del texto a blanco */
}
#cantidad:hover,
#add-to-cart:hover {
  background: #333;
  color: #fff; /* Agregar esta línea para cambiar el color del texto a blanco */
}
      .product-details {
        /* Estilos existentes... */
      }

      #nicotina,
      #sabores {
        padding: 10px 15px;
        border: 2px solid #333;
        border-radius: 5px;
        font-size: 1rem;
        font-weight: 400;
        background: transparent;
        color: #000;
        cursor: pointer;
        outline: none;
      }

      #nicotina:hover,
      #sabores:hover {
        background: #333;
      }

      #cantidad {
        padding: 10px 15px;
        border: 2px solid #333;
        border-radius: 5px;
        font-size: 1rem;
        font-weight: 400;
        width: 75px;
        text-align: center;
        background: transparent;
        color: #000;
      }

      #cantidad:focus {
        background: #333;
      }

      #add-to-cart {
        padding: 12px 25px;
        border: 2px solid #333;
        border-radius: 10px;
        font-size: 1rem;
        font-weight: 600;
        cursor: pointer;
        background: transparent;
        color: #000;
        transition: 0.3s ease-in-out;
      }

      #add-to-cart:hover {
        background: #333;
      }

      #add-to-cart.animate__bounceOut {
        animation: bounceOut 0.8s;
      }

      #add-to-cart.animate__bounceIn {
        animation: bounceIn 0.8s;
      }

      @keyframes bounceOut {
        0% {
          transform: scale(1);
        }

        25% {
          transform: scale(0.95);
        }

        50% {
          opacity: 1;
          transform: scale(1.1);
        }

        100% {
          opacity: 0;
          transform: scale(0.3);
        }
      }

      @keyframes bounceIn {
        0% {
          opacity: 0;
          transform: scale(0.3);
        }

        50% {
          opacity: 1;
          transform: scale(1.05);
        }

        70% {
          transform: scale(0.9);
        }

        100% {
          transform: scale(1);
        }
      }
    </style>









    <style>
      .product-container {
        display: grid;

        /* Dividimos en dos columnas */
        grid-gap: 20px;
        /* Agregamos un espacio entre las columnas */

      }

      .product-list {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        margin-left: auto;
        margin-right: auto;
        margin-left: 200px;
      }

      .product-item {
        flex: 1 1 25%;
        margin-bottom: 20px;
      }

      .product-item img {
        max-width: 100%;
        border: 1px solid black;
      }

      #carousel-container {
        position: absolute;
        left: 490px;
        padding-top: 410px;
        max-width: 2500px;
        z-index: 1;
        margin: 0 auto;
      }

      .img_container {
        position: absolute;
        top: 0;
        width: 500px;
        height: 270px;
        margin-bottom: 10px;
      }

      .img_container .main_img {
        width: 100%;
        height: 100%;
        border-radius: 5px;
        box-shadow: 0 5px 5px rgba(1, 23, 46, 0.6);
        object-fit: cover;
        border: 1px solid black;
      }

      .img_container .prev_arrow,
      .img_container .next_arrow {
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

      .img_container .prev_arrow {
        left: 10px;
      }

      .img_container .next_arrow {
        right: 10px;
      }

      .thumbnail_container {
        height: 80px;
        display: flex;
        flex-wrap: wrap;
        justify-content: flex-start;
        align-items: center;
        width: 350px;
        margin-left: 0px;

      }

      .thumbnail_container .thumbnail {
        width: 80px;
        height: 80px;
        border-radius: 5px;
        cursor: pointer;
        object-fit: cover;
        opacity: 0.7;
        transition: 0.3s;
        margin-right: 5px;
        border: 1px solid black;
      }

      .thumbnail_container .thumbnail:last-child {
        margin-right: 0;
      }

      .thumbnail.active {
        opacity: 1 !important;
        box-shadow: 0 5px 5px rgba(1, 23, 46, 0.6);
      }

      .img_container {
        position: absolute;
        top: 0;
        width: 340px;
        height: 400px;
        margin-bottom: 10px;
      }
    </style>


    <!---------------------------SCRIPT DE CAROUSEL PRODUCTOS-----------------------------------  -->

    <script>

      document.addEventListener('DOMContentLoaded', function () {
        const prevArrow = document.querySelector('.prev_arrow');
        const nextArrow = document.querySelector('.next_arrow');
        const currentImg = document.querySelector('.main_img');
        const thumbnailImgs = document.querySelectorAll('.thumbnail');
        const productItems = document.querySelectorAll('.product-item');

        // Evento "click" para la flecha previa
        prevArrow.addEventListener('click', () => {
          const currentImgSrc = currentImg.getAttribute('src');
          const thumbnailImgsArr = Array.from(thumbnailImgs);
          const currentThumbnailIndex = thumbnailImgsArr.findIndex((thumbnailImg) => thumbnailImg.getAttribute('src') === currentImgSrc);
          const previousThumbnailIndex = (currentThumbnailIndex - 1 + thumbnailImgsArr.length) % thumbnailImgsArr.length;
          const previousThumbnailImg = thumbnailImgsArr[previousThumbnailIndex];
          currentImg.setAttribute('src', previousThumbnailImg.getAttribute('src'));
          thumbnailImgs.forEach((thumbnailImg) => thumbnailImg.classList.remove('active'));
          previousThumbnailImg.classList.add('active');
        });

        // Evento "click" para la flecha siguiente
        nextArrow.addEventListener('click', () => {
          const currentImgSrc = currentImg.getAttribute('src');
          const thumbnailImgsArr = Array.from(thumbnailImgs);
          const currentThumbnailIndex = thumbnailImgsArr.findIndex((thumbnailImg) => thumbnailImg.getAttribute('src') === currentImgSrc);
          const nextThumbnailIndex = (currentThumbnailIndex + 1) % thumbnailImgsArr.length;
          const nextThumbnailImg = thumbnailImgsArr[nextThumbnailIndex];
          currentImg.setAttribute('src', nextThumbnailImg.getAttribute('src'));
          thumbnailImgs.forEach((thumbnailImg) => thumbnailImg.classList.remove('active'));
          nextThumbnailImg.classList.add('active');
        });

        // Evento "click" para las miniaturas
        thumbnailImgs.forEach((thumbnailImg) => {
          thumbnailImg.addEventListener('click', () => {
            currentImg.setAttribute('src', thumbnailImg.getAttribute('src'));
            thumbnailImgs.forEach((thumbnailImg) => thumbnailImg.classList.remove('active'));
            thumbnailImg.classList.add('active');
          });
        });

        // Evento "click" para los productos
        productItems.forEach((productItem) => {
          productItem.addEventListener('click', () => {
            const productId = productItem.getAttribute('data-id');
            const mainImg = document.querySelector('.main_img');
            const thumbnailImgs = document.querySelectorAll('.thumbnail');
            const mainImgSrc = `../imgproduc/${productId}/${productId}-1.png`;
            const thumbnailImgSrcs = [
              `../imgproduc/${productId}/${productId}-1.png`,
              `../imgproduc/${productId}/${productId}-2.png`,
              `../imgproduc/${productId}/${productId}-3.png`,
              `../imgproduc/${productId}/${productId}-4.png`,
            ];
            mainImg.setAttribute('src', mainImgSrc);
            thumbnailImgs.forEach((thumbnailImg, index) => {
              thumbnailImg.setAttribute('src', thumbnailImgSrcs[index]);
              thumbnailImg.classList.remove('active');
            });
            thumbnailImgs[0].classList.add('active');
          });
        });
      });
    </script>


    <!---------------------------SCRIPT DE FORMULARIO-----------------------------------  -->

    <script>
      // Seleccionar los elementos HTML relevantes
      const productList = document.querySelector('.product-list');
      const productName = document.querySelector('.product-name');
      const productPrice = document.querySelector('.product-price');
      const nicotina = document.querySelector('#nicotina');
      const sabores = document.querySelector('#sabores');
      const cantidad = document.querySelector('#cantidad');
      const addToCartButton = document.querySelector('#add-to-cart');

      // Añadir un event listener al botón "Add to Cart"
      addToCartButton.addEventListener('click', e => {
        // Obtener el nombre, precio, nicotina, sabor y cantidad del producto correspondiente
        const name = productName.textContent;
        const price = productPrice.textContent.substring(2);
        const selectedNicotina = nicotina.options[nicotina.selectedIndex].text;
        const selectedSabor = sabores.options[sabores.selectedIndex].text;
        const selectedCantidad = cantidad.value;

        // Imprimir los valores seleccionados en la consola
        console.log(`Nombre: ${name}`);
        console.log(`Precio: ${price}`);
        console.log(`Nicotina: ${selectedNicotina}`);
        console.log(`Sabor: ${selectedSabor}`);
        console.log(`Cantidad: ${selectedCantidad}`);
      });

      // Añadir un event listener a la lista de productos
      productList.addEventListener('click', e => {
        // Verificar si se hizo clic en una imagen dentro de un elemento con la clase "product-item"
        if (e.target.nodeName === 'IMG' && e.target.closest('.product-item')) {
          // Obtener el nombre y el precio del producto correspondiente
          const name = e.target.closest('.product-item').dataset.name;
          const price = e.target.closest('.product-item').dataset.price;

          // Actualizar los valores de los elementos HTML correspondientes
          productName.textContent = name;
          productPrice.textContent = `s/${price}`;

          // Actualizar el título de la página
          document.title = `${name} - ${price}`;

          // Limpiarla selección de nicotina, sabor y cantidad
          nicotina.selectedIndex = 0;
          sabores.selectedIndex = 0;
          cantidad.value = '';

          // Imprimir el nombre y el precio del producto en la consola
          console.log(`Producto seleccionado: ${name} - s/${price}`);
        }
      });
    </script>
    <br><br><br><br><br><br><br><br>


    <?php include 'footer.html' ?>

</body>

</html>