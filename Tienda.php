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
          <li><a href="index.php">Home</a></li>
          <li><a href="#modal1" class=" modal-trigger">Login</a></li>
          <li><a href="#"><i class="material-icons">shopping_cart</i></a></li>
        </ul>
        
      </div>
       
    </nav>

  </div>

    <ul class="sidenav" id="mobile">
           <li><a href="index.php">Home</a></li>
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
<h1 class="center-align tienda1"><a id="Tienda" class="section scrollspy"></a>TIENDA EN LINEA</h1>
<div class="row">
  <div class="col s12 m3 l3 filters">
    <!-- Mostrar el total de productos con respecto a los productos disponibles en la bd -->
    <h4 class="center-align productos">Todos los productos(x)</h4>
    <!-- Los precios seran dinamicos, cambiaran con respecto a la cantidad minima que se pueda adquirir por producto, mayoreo > 5 veces de compra el mismo producto  -->
    <div class="col s12 m12 l12 center-align">
      <a class="waves-effect waves-light btn mayoreo">Precios por mayoreo</a>
    </div>
    <div class="col s12 m12 l12 center-align">
      <a class="waves-effect waves-light btn menudeo">Precios por menudeo</a>
    </div>
    <p><b>Filtros</b></p>
    <div class="col s12 m12 l12 center-align">
      <ul class="collapsible expandable">
        
        <li class="active">
          <div class="collapsible-header"><i class="material-icons">attach_money</i>Precio</div>
          <div class="collapsible-body">
            <div class="row">
            <div class="input-field col s4">
              <input  id="minimunP" type="number"  name="minimumP">
              <label for="minimun">Min</label>
            </div>
            <div class="input-field col s4">
              <input  id="maximumP" type="number"  name="maximumP">
              <label for="maximumP">Max</label>
            </div>
            <div class="input-field col s4">
            <a class="waves-effect waves-light btn">Ir</a>
            </div>
            </div>
          </div>
        </li>
        <li class="active">
          <div class="collapsible-header"><i class="material-icons">category</i>Empaque</div>
          <div class="collapsible-body">
            <div class="row left-align">
                <form action="#">
                    <p>
                      <label>
                        <input type="checkbox" />
                        <span>Caja Plastica</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input type="checkbox" />
                        <span>Caja Madera</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input type="checkbox" />
                        <span>Bolsa Selofan</span>
                      </label>
                    </p>
                     <p>
                      <label>
                        <input type="checkbox" />
                        <span>Envoltura Selofan</span>
                      </label>
                    </p>
                     <p>
                      <label>
                        <input type="checkbox" />
                        <span>Canasta</span>
                      </label>
                    </p>
                </form>                                
            </div>
          </div>
        </li>
        <li class="active">
          <div class="collapsible-header"><i class="material-icons">local_pizza</i>Sabores</div>
          <div class="collapsible-body">
            <div class="row left-align">
                <form action="#">
                    <p>
                      <label>
                        <input type="checkbox" />
                        <span>Chocolate</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input type="checkbox" />
                        <span>Fresa</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input type="checkbox" />
                        <span>Vainilla</span>
                      </label>
                    </p>
                     <p>
                      <label>
                        <input type="checkbox" />
                        <span>Cafe</span>
                      </label>
                    </p>
                     <p>
                      <label>
                        <input type="checkbox" />
                        <span>Natural</span>
                      </label>
                    </p>
                </form>                                
            </div>
          </div>        </li>
    </ul>
    </div>
  </div>
  <div class="col s12 m9 l9">
    <div class="row"> 
      <div class="col s1 m1 l1"></div>
      <div class="col s5 m5 l5">
        
      </div>
      <div class="col s5 m5 l5">
        <form>
            <div class="input-field">
               <i class="material-icons prefix">search</i>
              <input id="search" type="search" >    
              <i class="material-icons">close</i>
            </div>
        </form>
      </div>
      <div class="col s1 m1 l1"></div>
    </div>
      <!-- Div para Carga de informacion de productos mediante la bd (foreach) -->
    <div class="row">
      <!-- Maquetacion estatica para 8 productos -->
      <div class="col s6 m4 l4">
          <div class="card hoverable ">
              <div class="card-image top3">
                <img class="responsive-img top3" src="images/Tienda/SELMAC_Proy_Amaranto-12.png">
                <span class="card-title"><b>Alegrias de amaranto circulares</b></span>
              </div>
              <div class="card-content">
                <p class="left-align"><b>Descripción:</b></p>
                <div class="hr"></div>
                <p class="left-align previewDesc">Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur</p>

                <p style="padding-top: 10px;"><b>$49.90</b></p>
                <a class="waves-effect waves-light btn-small comprar">Agregar al carrito</a>
              </div>
      
              
          </div>
      </div>
      <div class="col s6 m4 l4">
          <div class="card hoverable " >
              <div class="card-image top3">
                <img class="responsive-img top3" src="images/Tienda/SELMAC_Proy_Amaranto-13.png">
                <span class="card-title"><b>Alegrias de amaranto circulares</b></span>
              </div>
              <div class="card-content">
                <p class="left-align"><b>Descripción:</b></p>
                <div class="hr"></div>
                <p class="left-align previewDesc">Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock.</p>

                <p style="padding-top: 10px;"><b>$49.90</b></p>
                <a class="waves-effect waves-light btn-small comprar">Agregar al carrito</a>
              </div>
      
             
          </div>
      </div>
      <div class="col s6 m4 l4">
        <div class="card hoverable " >
              <div class="card-image top3">
                <img class="responsive-img top3" src="images/Tienda/SELMAC_Proy_Amaranto-15.png">
                <span class="card-title"><b>Alegrias de amaranto circulares</b></span>
              </div>
              <div class="card-content">
                <p class="left-align"><b>Descripción:</b></p>
                <div class="hr"></div>
                <p class="left-align previewDesc">Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur</p>

                <p style="padding-top: 10px;"><b>$49.90</b></p>
                <a class="waves-effect waves-light btn-small comprar">Agregar al carrito</a>
              </div>
      
              
          </div>
      </div>
      <div class="col s6 m4 l4">
          <div class="card hoverable ">
              <div class="card-image top3">
                <img class="responsive-img top3" src="images/Tienda/SELMAC_Proy_Amaranto-21.png">
                <span class="card-title"><b>Alegrias de amaranto circulares</b></span>
              </div>
              <div class="card-content">
                <p class="left-align"><b>Descripción:</b></p>
                <div class="hr"></div>
                <p class="left-align previewDesc">Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. </p>

                <p style="padding-top: 10px;"><b>$49.90</b></p>
                <a class="waves-effect waves-light btn-small comprar">Agregar al carrito</a>
              </div>
      
              
          </div>
      </div>
      <div class="col s6 m4 l4">
          <div class="card hoverable " >
              <div class="card-image top3">
                <img class="responsive-img top3" src="images/Tienda/SELMAC_Proy_Amaranto-19.png">
                <span class="card-title"><b>Alegrias de amaranto circulares</b></span>
              </div>
              <div class="card-content">
                <p class="left-align"><b>Descripción:</b></p>
                <div class="hr"></div>
                <p class="left-align previewDesc">Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock.</p>

                <p style="padding-top: 10px;"><b>$49.90</b></p>
                <a class="waves-effect waves-light btn-small comprar">Agregar al carrito</a>
              </div>
      
             
          </div>
      </div>
      <div class="col s6 m4 l4">
        <div class="card hoverable " >
              <div class="card-image top3">
                <img class="responsive-img top3" src="images/Tienda/SELMAC_Proy_Amaranto-18.png">
                <span class="card-title"><b>Alegrias de amaranto circulares</b></span>
              </div>
              <div class="card-content">
                <p class="left-align"><b>Descripción:</b></p>
                <div class="hr"></div>
                <p class="left-align previewDesc">Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintockr</p>

                <p style="padding-top: 10px;"><b>$49.90</b></p>
                <a class="waves-effect waves-light btn-small comprar">Agregar al carrito</a>
              </div>
      
              
          </div>
      </div>
    </div>
  </div>
</div>

<!-- Footer de la pagina -->

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
    $('.collapsible').collapsible({
      accordion:false
    });
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
