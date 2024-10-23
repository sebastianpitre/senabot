<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Seguimiento de Etapa Productiva</title>
    <link rel="shortcut icon" href="imagenes/logo/logosena.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/unicons.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/logo.css">
    <!-- MAIN STYLE -->
    <link rel="stylesheet" href="css/tooplate-style.css">
    <link rel="stylesheet" href="css/intro.css">
       <!-- Favicon -->
   <link href= "../assets/img/favicon.ico" rel="icon">

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&family=Open+Sans:wght@400;500;600&display=swap" rel="stylesheet">  
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" /> 

  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

</head>
<body>

   <style>

    section{
      padding-bottom: 100px;
    }

    .menu{
      position: fixed;
      bottom: 7px;
      left: 50%;
      transform: translate(-50%);
      z-index: 998;
      width: auto;
      min-width: 288px;
    }

      .base{
        z-index: 3; 
        position: relative; 
        width: 900px;
        margin: auto;
        padding: 17px;
      }

      .pasos{
        position: absolute; 
        z-index: 9;
        border: 0px solid black;
      }

      .paso1{top: 0px; left: 0px; width: 899px; height: 100%;}

      .paso2{top: 19px; left: 18px; width: 863px; height: 57px;}
      .paso3{top: 75px; left: 18px; width: 863px; height: 135px;}
      .paso4{top: 210px; left: 18px; width: 863px; height: 674px;}
      .paso5{top: 245px; left: 18px; width: 446px; height: 640px;}
      .paso6{top: 245px; left: 463px; width: 417px; height: 640px;}
      
      .paso7{top: 18px; left: 18px; width: 863px; height: 30px;}
      .paso8{top: 48px; left: 18px; width: 447px; height: 527px;}
      .paso9{top: 48px; left: 464px; width: 417px; height: 527px;}
      .paso10{top: 574px; left: 18px; width: 447px; height: 77px;}
      .paso11{top: 574px; left: 464px; width: 417px; height: 77px;}
      .paso12{top: 650px; left: 18px; width: 863px; height: 88px;}
      .paso13{top: 750px; left: 18px; width: 863px; height: 174px;}


      @media (max-width: 768px) {

        .base{
          z-index: 3; 
          position: relative; 
          width: 350px;
          margin: auto;
          padding:0px;
        }

        .paso1{top: 0px; left: 0px; width: 348px; height: 100%;}

        .paso2{top: 0px; left: 0px; width: 348px; height: 24px;}
        .paso3{top: 23px; left: 0px; width: 348px; height: 55px;}
        .paso4{top: 77px; left: 0px; width: 348px; height: 271px;}
        .paso5{top: 92px; left: 0px; width: 180px; height: 256px;}
        .paso6{top: 92px; left: 180px; width: 168px; height: 256px;}
        
        .paso7{top: 0px; left: 0px; width: 349px; height: 19px;}
        .paso8{top: 18px; left: 0px; width: 180px; height: 207px;}
        .paso9{top: 18px; left: 180px; width: 169px; height: 207px;}
        .paso10{top: 224px; left: 0px; width: 181px; height: 31px;}
        .paso11{top: 224px; left: 180px; width: 169px; height: 31px;}
        .paso12{top: 254px; left: 0px; width: 349px; height: 36px;}
        .paso13{top: 289px; left: 0px; width: 349px; height: 78px;}

      }
      

    </style>
    
    <!-- CARD -->
    <section  class="bg-gray-200">

      <div class="menu card px-3">
        <div class="row">
          <a class="btn mx-1 my-2 text-white bg-danger col-auto" href="menu-formatos.php" style="height: 37px;">
              <span class="material-symbols-outlined text-white">undo </span><h4 class="float-right mt-1" style="font-size: 13px;">Volver</h4>
          </a>
          <a class="btn mx-1 my-2 text-white col-auto" href="informes/GFPI-F-023-V5.xlsx" style="background-color: #00304D;height: 37px;">
            <span class="material-symbols-outlined text-white">download </span><h4 class="float-right mt-1" style="font-size: 13px;">Descargar F023</h4>
          </a>
          <div class="btn bg-success mx-1 my-2 col-auto" style="height: 37px;" onclick="intro_calcular()"><i class="fas fa-play text-white mx-auto mt-1" aria-hidden="true"></i></div>
        </div>
      </div>


      <div class=" mt-n5">
        <h4 class="text-center">Formato F023-02 Version 5</h4>


        <div class="card base">
          <div id="intro1" class="pasos paso1" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-original-title="Escriba su regional, el centro de formación al que pertenece, nombre del programa que cursa y su numero de ficha"></div>

          <div class="row">
            <div class="col-6">
              <img class="border" src="imagenes/formatos/f023_v5_1.png" width="100%" alt="">
            </div>
            <div class="col-6">
              <img class="border" src="imagenes/formatos/f023_v5_2.png" width="100%" alt="">
            </div>
          </div>
        </div>
        <!-- hoja 1 -->
        <div class="card base">
          <img class="border" src="imagenes/formatos/f023_v5_3.png" alt="">

          <div id="intro2" class="pasos paso2" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-original-title="información..."></div>
          <div id="intro3" class="pasos paso3" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="información..."></div>
          <div id="intro4" class="pasos paso4" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="información..."></div>
          <div id="intro5" class="pasos paso5" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-original-title="información..."></div>
          <div id="intro6" class="pasos paso6" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-original-title="información..."></div>
        </div>

        <!-- hoja 2 -->
        <div class="card base">
          <img class="border" src="imagenes/formatos/f023_v5_4.png" alt="">
          
          <div id="intro7" class="pasos paso7" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-original-title="información..."></div>
          <div id="intro8" class="pasos paso8" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-original-title="información..."></div>
          <div id="intro9" class="pasos paso9" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-original-title="información..."></div>
          <div id="intro10" class="pasos paso10" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-original-title="información..."></div>
          <div id="intro11" class="pasos paso11" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-original-title="información..."></div>
          <div id="intro12" class="pasos paso12" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-original-title="información..."></div>
          <div id="intro13" class="pasos paso13" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-original-title="información..."></div>
        </div>

      </div>
    
    </section>


   

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/Headroom.js"></script>
    <script src="js/jQuery.headroom.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/custom.js"></script>
    <script  src="js/alerts.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/intro.js/4.2.2/intro.min.js"></script> -->
    <script src="js/introweb.js"></script>
    <script  src="js/intro2-f023.js"></script>
    <script  src="js/config.js"></script>
    <script>
      // intro_calcular()

      function mostrarImagen() {
        document.getElementById('mensaje_click').style.display = 'block';
      }

      function ocultarImagen() {
        document.getElementById('mensaje_click').style.display = 'none';
      }

      // Mostrar imagen al cargar la página
     
        mostrarImagen();
      
    </script>

    
</body>
</html>