<!DOCTYPE html>
<html>
<head>
  <title>Arana-Consulting</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" type="text/css" href="css/style.css">

 <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@300&family=Poppins:wght@600&display=swap" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@300&family=Poppins:wght@800&display=swap" rel="stylesheet">
   <script src="https://use.fontawesome.com/af52601e74.js"></script>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<?php
  include('pvisit.php');
  $x = utf8_decode($_GET['x']);
  $iduser_1=2;
  if (strlen($x) > 0)
  addVisit($x);

  $Ip_1 = get_client_ip();
  $msn = utf8_decode($_GET['Msn_1']);
  if (strlen($msn) > 0) {
    updMsn($msn);
  }
$msn= "index";
addAct($msn);
  ?>
   </head>
<body>
   <div class="header">
     <a href="unsubscribe.php"><img src="img/spanish1.jpg" style="cursor:pointer;"></a>
   </div>
   <section class="home">
</section>
<section class="about">
   <h3>¡ESCOGE UNA DE ESTAS <br>OFERTAS QUE NUNCA VOLVERÁN!</h3>
<p>¡Reserva esta oferta por <span style="color:#FBC600;">10%</span> de inicial!</p>
   
</section>
<section class="deal deal_1">
  <div class="container">
<div class="main">
    <div class="image1">

       <img src="img/WEBINAR.PNG" class="pic"  alt=""> 
    
    </div>

    <div class="image1" style="text-align:left;">
       <h4>Marketing ideas para<br> negocios</h4>
        <p class="paragraph">Webinario de Marketing profesional para Pymes.<br> Encuentra ideas creativas para tu negocio y clientes<br><span>3</span> Horas en vivo.</p>
       <a href="busniess_marketing.php"><img src="img/Button1.png" ></a>
      
         
    </div>
  </div>
</div>
</section>
<section class="deal deal_1">
  <div class="container">
<div class="main">
    <div class="image1">

      <img src="img/fb.PNG" class="pic" alt=""> 
    
    </div>

    <div class="image1 " style="text-align:left;">
       <h4>Asegure su cuenta en Facebook</h4>
        <p class="paragraph">Protege tu cuenta de Facebook y de Instagram contra hackeos con los trucos internos de Facebook y como hacer cuando has perdido tu cuenta.</p>
          <a href="facebook.php"><img src="img/Button1.png" ></a>

      
         
    </div>
  </div>
</div>
</section>
<section class="deal deal_1">
  <div class="container">
<div class="main">
    <div class="image1">

       <img src="img/NNNN.PNG" class="pic" alt=""> 
    
    </div>

    <div class="image1" style="text-align:left;">
       <h4>Diseño corporativo pequeño</h4>
        <p class="paragraph">iComienza tu propio Negocio!<br>
5 Productos en un Paquete.<br>
1x Logotipo<br>
1x Carjeta de visita*<br>
1x Membrete*<br>
1x Signatura del correo electrónico<br>
1x Logotipos para todas las redes sociales<br>
10 Días laborables deentrega<br>
*Solo diseño, ni impresión, ni instalación incluida.</p>
         <a href="Diseno_corporativo.php"><img src="img/Button2.png" ></a>
      
         
    </div>
  </div>
</div>
</section>
<section class="deal deal_1">
  <div class="container">
<div class="main">
    <div class="image1">

         <img src="img/medina.PNG" class="pic" alt=""> 
    
    </div>

    <div class="image1" style="text-align:left;">
       <h4>Pagina Web
Mediana</h4>
        <p class="paragraph">Tu página web profesional para que tengas<br>
las métricas de ventas que necesitas<br>
Máximo 35 páginas.<br>
Diseño de la página web<br>
Creación de la página web + instalación<br>
Diseño Responsive<br>
Iconos para las Redes Sociales<br>
Diseño para móviles<br>
Fotos,textos y videos no estan incluidos<br>
10 Días laborables de entrega</p>
        <a href="Mediana.php"><img src="img/Button2.png" ></a>
      
         
    </div>
  </div>
</div>
</section>

<section class="deal deal_1">
  <div class="container">
<div class="main">
    <div class="image1">

         <img src="img/EM.PNG" class="pic" alt=""> 
    
    </div>

    <div class="image1" style="text-align:left;">
       <h4>Pagina Web
E-Commerce</h4>
        <p class="paragraph">Tu propia tienda online. ¡Aumenta tus ventas!<br>
Máximo de 10 a 40 productos / servicios<br>
Diseño, programación e instalación de tu<br>
propia Página Web<br>
Subimos tu contenido<br>
Diseño Responsive / Diseño para Móviles<br>
Iconos para las Redes Sociales<br>
Nota: Fotos, textos y video no están incluidos.<br>
Todos los textos legales provienen del cliente<br>
10 Días laborables de entrega.</p>
       <a href="ecommerce.php"> <img src="img/Button2.png" ></a>
      
         
    </div>
  </div>
</div>
</section>
<section class="deal deal_1">
  <div class="container">
<div class="main">
    <div class="image1">

        <img src="img/LOGO.PNG" class="pic" alt="">
    
    </div>

    <div class="image1" style="text-align:left;">
       <h4>Logotipo
Profesional</h4>
        <p class="paragraph">Obtén tu Logotipo moderno, único y profesional.<br>
5 Días laborables de entrega<br>
20 Revisiones máx.</p>
        <a href="Logotipo_profesional.php"> <img src="img/Button2.png" ></a>
      
         
    </div>
  </div>
</div>
</section>
<section class="deal deal_1">
  <div class="container">
<div class="main">
    <div class="image1">

        <img src="img/SO.PNG" class="pic" alt="">
    
    </div>

    <div class="image1" style="text-align:left;">
       <h4>Paquete mediano de Redes Sociales</h4>
        <p class="paragraph">16 Posts de Redes Sociales<br>
2 Post por semana<br>
Mínimo 2 meses de contrato<br>
Nota: Mandatorio que el cliente sea el<br>
proveedor del texto legal.</p>
        <a href="Sociales_Profesionaliza.php"> <img src="img/Button2.png" ></a>
      
         
    </div>
  </div>
</div>
</section>
<section class="deal deal_1">
  <div class="container">
<div class="main">
    <div class="image1">

        <img src="img/SOM.PNG" class="pic" alt=""> 
    
    </div>

    <div class="image1" style="text-align:left;">
       <h4>Campaña de profesional de Marketing</h4>
        <p class="paragraph">25¢ por Lead<br>
Pedido mínimo por 250 USD<br>
Nota: Es obligatorio que el<br>
cliente nos entregue<br>
el contenido.</p>
         <a href="social.php"><img src="img/Button2.png" ></a>
      
         
    </div>
  </div>
</div>
</section>


<div class="footer">
<img src="img/bottom-banner1920x1048-.jpg" width="800px">
</div>
<div class="modal" id="myPopup">
  <div class="modal-dialog1 ">
    <div class="modal-content1 ">

      <!-- Modal Header -->
      <div class="modal-header border-0">
       
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body" style="text-align:center;">
         <h4 class="modal-title">Deseas salir </h4>
         <span  >¿Qué le hace abandonar la página?</span>
<form action="index.php" method="GET" >
<input name="x" type="hidden" value="<?php echo  utf8_decode($_GET['x']); ?>">
<textarea class="text" name="Msn_1" placeholder="Introduzca su mensaje" required="required"></textarea><br>
  <input  src="img/Group 9015.png" type="image" id="myBtn"/>
  </form>  
      </div>

    </div>
  </div>
</div>
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>
