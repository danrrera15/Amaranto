 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Amaranto de la rosa</title>
	<link rel="stylesheet" href="css/materialize.css">
	<link rel="stylesheet" href="css/theme.css">
  <link rel="stylesheet" href="css/animate.css">

	<!--FONTS-->
	<link href="https://fonts.googleapis.com/css?family=Oswald|Roboto" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/materialize.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
</head>
<body>
  <!-- NAVBAR MENU -->
	  <div class="navbar-fixed">
    <nav class="theme">
      <div class="nav-wrapper">
        <!-- Logo -->
        <a href="#!" class="brand-logo left hide-on-med-and-down"><img class="logo" src="images/logo2_Mesa de trabajo 1.png" alt="Logo"></a>
        <!-- Logo for movile -->
        <a href="#!" class="brand-logo left hide-on-med-and-up"><img class="right logoMovil" src="images/logo2_Mesa de trabajo 1.png" alt="Logo"></a>

        <a href="#" data-target="mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
          <li><a href="#Nosotros">Nosotros</a></li>
          <li><a href="#Historia">Historia</a></li>
          <li><a href="#Galeria">Galeria</a></li>
          <li><a href="#Productos">Productos</a></li>
           <li><a href="#Contacto">Contacto</a></li>
          <li><a href="Tienda.php">Tienda</a></li>
          <li><a href="#modal1" class=" modal-trigger">Login</a></li>
          <li><a href="badges.html"><i class="material-icons">shopping_cart</i></a></li>
        </ul>
        
      </div>
       
    </nav>

  </div>

    <ul class="sidenav" id="mobile">
           <li><a href="#Nosotros">Nosotros</a></li>
          <li><a href="#Historia">Historia</a></li>
          <li><a href="#Galeria">Galeria</a></li>
          <li><a href="#Productos">Productos</a></li>
          <li><a href="#Contacto">Contacto</a></li>
          <li><a href="Tienda.php">Tienda</a></li>
          <li><a href="#modal1" class=" modal-trigger">Login</a></li> 
          <li><a href="badges.html"><i class="material-icons">shopping_cart</i></a></li>
    </ul>
<!-- MODAL -->
  <div id="modal1" class="modal">

    <div class="modal-content ModalOption start" id="1">
      <div class="row ">
        <div class="col s4 m4 l4">
          <img class="responsive-img" src="images/logo2_Mesa de trabajo 1.png" alt="Logo"></a>
        </div>
        <div class="col s8 m8 l8">
          <!-- Formulario para el log-in -->
          <form action="">
            <!-- input correspondiente al email de usuario (email) -->
            <div class="input-field col s12 m12 l12">
              <i class="material-icons prefix">account_circle</i>
              <input name="email" id="email" type="text" class="validate">
              <label for="email">Email</label>
            </div>
             <!-- input correspondiente a contraseña de usuario (password) -->
            <div class="input-field col s12 m12 l12">
              <i class="material-icons prefix">vpn_key</i>
              <input name="password" id="password" type="text" class="validate">
              <label for="password">Contraseña</label>
            </div>

            <div class="col s12 m12 l12 center-align">
              <a class="waves-effect waves-light btn" style="background-color: #834a87;">Entrar</a>
            </div>
            
          </form>
        </div>
      </div>   
    </div>
    <div class="modal-content ModalOption" id="2">
      <div class="row  ">
        <div class="col s4 m4 l4">
          <img class="responsive-img" src="images/logo2_Mesa de trabajo 1.png" alt="Logo"></a>
        </div>
        <div class="col s8 m8 l8">
          <!-- Formulario para el log-in -->
          <form action="">
            <!-- input correspondiente al email de usuario (email) -->
            <div class="input-field col s12 m12 l12">

              <i class="material-icons prefix">account_circle</i>
              <input name="email" id="email" type="text" class="validate">
              <label for="email">Email</label>
            </div>
             <!-- input correspondiente a contraseña de usuario (password) -->

            <div class="col s12 m12 l12 center-align">
              <a class="waves-effect waves-light btn" style="background-color: #834a87;">Recupera Contraseña</a>
            </div>
            
          </form>
        </div>
      </div>  
    </div>
    <div class="modal-footer">
      <div class="row">
        <div class="col s6 m6 l6 center-align">
          <a class="login" page="2">¿Olvidaste tu contraseña? </a>
        </div>
        <div class="col s6 m6 l6 center-align" >
          <a class="login" page="3" >Registro</a>
        </div>
      </div>
    </div>
  </div>


   
<!-- END MODAL -->


	<div class="parallax_1 center row">
    <h2 style="color: #ffffffe0; margin-top: 250px;">LO MEJOR DE LA NATURALEZA </h2>
    <h3 style="color: #ffffffe0; margin-bottom: 300px;">PARA TI Y TU FAMILIA</h3>
  </div>
  <h1 class="center-align index2"><a id="Nosotros" class="section scrollspy"></a>NOSOTROS</h1>
  <!-- <div class="row">
    <div class="container">
      <div class="col s1 m1 l1"></div>
      <div class="col s10 m10 l10 center-align">
      
          <div class="card hoverable " style="top:-100px;">
              <div class="card-image top3">
                <img class="responsive-img top3" src="images/Tienda/SELMAC_Proy_Amaranto-12.png">
                <span class="card-title"><b>Alegrias de amaranto circulares</b></span>
              </div>
              <div class="card-content">
                <p class="left-align"><b>Descripcion:</b></p>
                <div class="hr"></div>
                <p class="left-align previewDesc">Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur</p>

                <p style="padding-top: 10px;"><b>$49.90</b></p>
                <a class="waves-effect waves-light btn-small comprar">Comprar</a>
              </div>
      
              <div class="card-action">
                      <a href="#">¡Ir a la tienda!</a>
              </div>
          </div>
      </div>
      <div class="col s1 m1 l1"></div>
    </div>
  </div> -->
  <div class="row ">
    <div class="container">
      <div class="col s12 m12 l12">
        <h4 class="center-align ">- Amaranto de la Rosa -</h4>
      <p>Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.</p>
      </div>
      <div class="col s6 m6 l6">
        
        <img src="images/about_us.jpg" alt="" class="responsive-img animated slideInLeft">

      </div>
       <div class="col s6 m6 l6">
        
        <img src="images/about_us2.jpg" alt="" class="responsive-img animated slideInRight">

      </div>

      

    </div>
  </div>
  <h1 class="center-align index1"><a id="Historia" class="section scrollspy"></a>HISTORIA</h1>
  <div class="parallax_2 center row">
      
  </div>
  <div class="row">
    <div class="col s12 m12 l12">

      <div class="col s12 m6 l6 antecedentes">
        <div class="col s0 m6 l6">
          
        </div>
        <div class="col s12 m6 l6 ">
          <h3 class="center-align" style="font-size: 2.0rem;">ANTECEDENTES</h3>
          <div class="hr"></div>
          <p>Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.</p>
        </div>
      </div>

      <div class="col s12 m6 l6 vidAnte">
         <div class="video-container">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/mOq_Bb4AEVk" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
          </div>
      </div>

    </div>
  </div>
  <h1 class="center-align index2"><a id="Galeria" class="section scrollspy"></a>GALERÍA</h1>
  <div class="row">
    <div class="container">
      <div class="s12 m12 l12">
          <div class="carousel carousel-slider">
            <a class="carousel-item" href="#one!"><img src="images/Recurso 05.png"></a>
            <a class="carousel-item" href="#two!"><img src="images/Recurso 5.png"></a>
            <a class="carousel-item" href="#three!"><img src="images/Recurso 03.png"></a>
            <a class="carousel-item" href="#four!"><img src="images/Recurso 04.png"></a>
            <a class="carousel-item" href="#five!"><img src="images/Recurso 07.png"></a>
          </div>
      </div>
    </div>
  </div>
  <h1 class="center-align index3"><a id="Productos" class="section scrollspy"></a>PRODUCTOS</h1>
  <div class="row">
    <div class="container">
      <div class="col s6 m3 l3">
        <div class="card hoverable product">
          <div class="card-image">
           <img src="images/Tienda/SELMAC_Proy_Amaranto-9.png">        
          </div>
          <div class="card-content">
            <a href="Tienda.php" class="product"><p>I am a very simple card. I am good at containing small bits of information.
            I am convenient because I require little markup to use effectively.</p></a>
          </div>
        </div>
      </div>
      <div class="col s6 m3 l3">
        <div class="card hoverable product">
          <div class="card-image ">
            <img src="images/Tienda/SELMAC_Proy_Amaranto-21.png">         
          </div>
          <div class="card-content">
            <a href="Tienda.php"class="product"><p>I am a very simple card. I am good at containing small bits of information.
            I am convenient because I require little markup to use effectively.</p></a>
          </div>
        </div>
      </div>
      <div class="col s6 m3 l3">
        <div class="card hoverable product">
          <div class="card-image">
            <img src="images/Tienda/SELMAC_Proy_Amaranto-18.png">        
          </div>
          <div class="card-content">
           <a href="Tienda.php" class="product"><p>I am a very simple card. I am good at containing small bits of information.
            I am convenient because I require little markup to use effectively.</p></a>
          </div>
        </div>
      </div>
      <div class="col s6 m3 l3">
        <div class="card hoverable product">
          <div class="card-image">
            <img src="images/Tienda/SELMAC_Proy_Amaranto-15.png">        
          </div>
          <div class="card-content">
            <a href="Tienda.php" class="product"><p>I am a very simple card. I am good at containing small bits of information.
            I am convenient because I require little markup to use effectively.</p></a>
          </div>
        </div>
      </div>
      <div class="col s12 m12 l12 center-align">
        <a class="waves-effect  waves-light btn-large comprar" href="Tienda.php">IR A LA TIENDA</a>
      </div>
    </div>
  </div>
  <h1 class="center-align index4"><a id="Contacto" class="section scrollspy"></a>CONTACTO</h1>
  <div class="row">
    <div class="col s0 m1 l1"></div>
   
    <div class="col s12 m5 l5">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3764.7329256567446!2d-99.12794368604004!3d19.337392148731205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ce01dfa5a835bf%3A0xa3d2ede8930e5eac!2sEjido+Tulyehualco%2C+Ex-Ejido+de+San+Francisco+Culhuacan%2C+04420+Ciudad+de+M%C3%A9xico%2C+CDMX!5e0!3m2!1ses!2smx!4v1540518040434" width="480" height="450" frameborder="0" style="border:0"></iframe>
    </div>
    <div class="col s12 m5 l5 contact">
      <form method="post">
      <!-- input de contacto para el nombre (contacName) -->
      <div class="input-field col s6 m6 l6">
          <i class="material-icons prefix">account_circle</i>
          <input  name="contactName" id="contactName" type="text" class="validate contact">
          <label for="contacName">Nombre</label>
      </div>
      <!-- input de contacto para los apellidos (contacLast) -->
      <div class="input-field col s6 m6 l6">

          <input  name="contactLast" id="contactLast" type="text" class="validate contact">
          <label for="contacLast">Apellidos</label>
      </div>
      <!-- input de contacto para Mail (contacMail) -->
      <div class="input-field col s12 m6 l6">
          <i class="material-icons prefix">mail</i>
          <input  name="contactMail" id="contactMail" type="email" class="validate contact">
          <label for="contacMail">Email</label>
      </div>
       <!-- input de contacto para Consulta (textarea1) -->
      <div class="input-field col s12 m12 l12">
        <i class="material-icons prefix">mode_edit</i>
        <textarea id="textarea1" name="textarea1" class="materialize-textarea contact"></textarea>
        <label for="textarea1">Consulta</label>
      </div>
      <div class="col s12 m12 l12 center-align">
         <a class="waves-effect waves-light btn-small comprar">ENVIAR</a>
      </div>
     
      </form>
    </div>
    <div class="col s0 m1 l1"></div>
  </div>

 <footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                  <h5 class="white-text">Terminos y condiciones <br>Aviso de privacidad</h5>
                <p class="grey-text text-lighten-4">Consulta los terminos y condiciones <a href="">aqui</a></p>
                <p class="grey-text text-lighten-4">Consulta nuestro aviso de privacidad <a href="">aqui</a></p>
              </div>
              <div class="col l4 offset-l2 s12">
              
                <ul>
                  <li><a class="white-text text-lighten-3" href="#Nosotros">NOSOTROS</a></li>
                  <li><a class="white-text text-lighten-3" href="#Historia">HISTORIA</a></li>
                  <li><a class="white-text text-lighten-3" href="#Galeria">GALERIA</a></li>
                  <li><a class="white-text text-lighten-3" href="#Productos">PRODUCTOS</a></li>
                  <li><a class="white-text text-lighten-3" href="#Contacto">CONTACTO</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2018 Amaranto de la Rosa
            </div>
          </div>
        </footer>
 

<script>
  $(".ModalOption a").click(function(){
            $(".ModalOption").hide();
            target = $(this).attr("page");
            $(".ModalOption[id="+target+"]").show();
          });

	 $(document).ready(function(){
    $(".start").show();
     $('.sidenav').sidenav();
     $('.scrollspy').scrollSpy();
    $('.modal').modal();
    $('.parallax').parallax();
    $('.carousel').carousel({
      fullWidth: true,
      indicators: true
    });
  });

  

  
</script>
	
</body>

</html>
