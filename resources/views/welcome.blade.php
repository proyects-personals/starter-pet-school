<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>DogWIse</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/progressbar_barfiller.css">
    <link rel="stylesheet" href="assets/css/gijgo.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/animated-headline.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <!-- ? Preloader Start -->
    
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header">
                <div class="header-bottom header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                    <img src="assets\img\gallery\lg.png" alt="Reserva Mascotas" width="100">
                                </div>
                            </div>
        
                            <!-- Menu -->
                            <div class="col-xl-10 col-lg-10">
                                <div class="menu-wrapper d-flex align-items-center justify-content-end">
                                    <!-- Main-menu -->
                                    <div class="main-menu d-none d-lg-block">
                                        <nav>
                                            <ul id="navigation">
                                                <li><a href="#portada">Inicio</a></li>
                                                <li><a href="#mision">Nuestra misión</a></li>
                                                <li><a href="#curso">Cursos</a></li>
                                                <li><a href="#preguntas">Preguntas</a></li>
                                                <li><a href="#contactos">Contactos</a></li>
                                                <li><a href="{{ route('login') }}">Iniciar sesión</a></li>
                                                <li><a href="{{ route('register') }}">Registrarse</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
        
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
        
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Header End -->
    </header>
    <main>
        
        <!-- slider Area Start-->
        <div class="slider-area position-relative">
                <!-- Single Slider -->     
                <div id="portada">
                    <img src="assets\img\gallery\portada.png"  style="max-width: 100%; height: auto; display: block;" alt="Imagen">
                </div>
        </div>
        <!-- slider Area End-->
        <!--? Visit Our Tailor Start -->
        <div id="mision" class="visit-tailor-area fix">
            <!--Right Contents  -->
            <div >
                <img src="assets\img\gallery\bb.jpeg"  style="max-width: 100%; height: auto; display: block;" alt="Imagen">
            </div>
            <!-- left Contents -->
            <div  style="max-width: 100%; padding: 10px; text-align: center;">
                <span style="font-size: 1.5em; font-weight: bold; color: #2ecc71; text-transform: uppercase; letter-spacing: 1px;">Nuestra misión</span>
                <h2 style="font-size: 2em; margin: 10px 0;">Nuestro principal objetivo es proteger a los animales</h2>
                <p style="font-size: 1em; line-height: 1.5; max-width: 600px; margin: auto;">
                    Nuestra misión es educar y entrenar a los perros con técnicas positivas, 
                    fortaleciendo su vínculo con sus dueños y promoviendo su bienestar, 
                    obediencia y socialización para una convivencia armoniosa.
                </p>
            </div>
            
        </div>
        <!-- Visit Our Tailor End -->
        <!--? Services Area Start -->
        <div id="curso" class="service-area section-padding30" style="padding-top: 30px; padding-bottom: 30px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-11">
                        <div class="single-cat text-center mb-3">
                            <div style="width: 100%; height: 200px; overflow: hidden; display: flex; justify-content: center; align-items: center; border: 1px solid #ddd; padding: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                                <img src="https://culturacanina.com/wp-content/uploads/2020/12/FB_IMG_1609448455028-1.jpg" alt="Clase de Perro" style="width: 100%; height: 100%; object-fit: cover; object-position: center;">
                            </div>
                            <h3 style="margin-top: 10px;">Entrenamiento para Perros</h3>
                            <p style="margin-bottom: 10px;">Ayuda a tu perro a aprender trucos.</p>
                            <a class="btn btn-primary" href="{{ route('register') }}">Registrate y Reserva tu Clase</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-11">
                        <div class="single-cat active text-center mb-3">
                            <div style="width: 100%; height: 200px; overflow: hidden; display: flex; justify-content: center; align-items: center; border: 1px solid #ddd; padding: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                                <img src="https://mxc.com.mx/wp-content/uploads/2024/08/perros.jpg-3.jpg" alt="Clase de Gato" style="width: 100%; height: 100%; object-fit: cover; object-position: center;">
                            </div>
                            <h3 style="margin-top: 10px;">Entrenamiento para Gatos</h3>
                            <p style="margin-bottom: 10px;">Mejora la obediencia y el comportamiento.</p>
                            <a class="btn btn-primary" href="{{ route('register') }}">Registrate y Reserva tu Clase</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-11">
                        <div class="single-cat text-center mb-3">
                            <div style="width: 100%; height: 200px; overflow: hidden; display: flex; justify-content: center; align-items: center; border: 1px solid #ddd; padding: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSQ5cX0mLIjuKTbaX9K6mk1ISF-OQSHOreyHQ&s" alt="Entrenamiento para otros animales" style="width: 100%; height: 100%; object-fit: cover; object-position: center;">
                            </div>
                            <h3 style="margin-top: 10px;">Otros Animales</h3>
                            <p style="margin-bottom: 10px;">Clases personalizadas para animales exóticos.</p>
                            <a class="btn btn-primary" href="{{ route('register') }}">Registrate y Reserva tu Clase</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

        <!--? Our Cases Start -->
        <div id="preguntas" class="container">
            <div class="row">
                <!-- Columna de preguntas frecuentes -->
                <div class="col-12 col-lg-6">
                    <div class="heading-section mb-5 mt-5 mt-lg-0">
                        <h2 class="mb-3">Preguntas frecuentes</h2>
                        <p>Donde hay amor, hay un amigo fiel que siempre te espera con el corazón lleno de alegría</p>
                    </div>
                    <div id="accordion" class="myaccordion w-100" aria-multiselectable="true">
                        <!-- Pregunta 1 -->
                        <div class="card">
                            <div class="card-header p-0" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link"
                                        data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                        aria-controls="collapseOne" style="text-decoration: none; border: none; box-shadow: none;">
                                        <p class="mb-0">¿Cómo entrenar a tu mascota?</p>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body py-3 px-0">
                                    <ol>
                                        <li>Entrenar a tu mascota es como construir una amistad</li>
                                        <li>Con paciencia, consistencia y refuerzos positivos,</li>
                                        <li>aprenderán juntos a comunicarse y entenderse</li>
                                        <li>mejor cada día.</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <!-- Pregunta 2 -->
                        <div class="card">
                            <div class="card-header p-0" id="headingTwo">
                                <h2 class="mb-0">
                                    <button class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link"
                                        data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                        aria-controls="collapseTwo" style="text-decoration: none; border: none; box-shadow: none;">
                                        <p class="mb-0">¿Cómo manejar a tus mascotas?</p>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                <div class="card-body py-3 px-0">
                                    <ol>
                                        <li>Manejar a tus mascotas con amor, paciencia y consistencia,</li>
                                        <li>brindándoles una rutina, ejercicio, socialización,</li>
                                        <li>y cuidados adecuados, fortalece su bienestar.</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <!-- Pregunta 3 -->
                        <div class="card">
                            <div class="card-header p-0" id="headingThree">
                                <h2 class="mb-0">
                                    <button class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link"
                                        data-toggle="collapse" data-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree" style="text-decoration: none; border: none; box-shadow: none;">
                                        <p class="mb-0">¿Cuál es el mejor cuidado para tus mascotas?</p>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                <div class="card-body py-3 px-0">
                                    <ol>
                                        <li>El mejor cuidado para tus mascotas incluye</li>
                                        <li>una alimentación adecuada, ejercicio regular,</li>
                                        <li>chequeos veterinarios, entrenamiento positivo, socialización,</li>
                                        <li>y ofrecerles mucho amor, atención y</li>
                                        <li>un ambiente seguro y enriquecido.</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <!-- Pregunta 4 -->
                        <div class="card">
                            <div class="card-header p-0" id="headingFour">
                                <h2 class="mb-0">
                                    <button class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link"
                                        data-toggle="collapse" data-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour" style="text-decoration: none; border: none; box-shadow: none;">
                                        <p class="mb-0">¿Cuáles son los requerimientos para tu mascota?</p>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                                <div class="card-body py-3 px-0">
                                    <p>Cuidar a tu mascota es ser su protector, su amigo y su refugio, ofreciéndole no solo lo
                                        necesario, sino también un hogar lleno de ternura, comprensión y momentos que fortalezcan
                                        el lazo de confianza y amor que comparten.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Columna de imagen a la derecha -->
                <div class="col-lg-6 d-flex align-items-center justify-content-center">
                    <img src="assets\img\gallery\mm.webp" class="img-fluid rounded" alt="Mascotas felices">
                </div>
            </div>
        </div>
        
    
        <!-- Our Cases End -->
<br>
<br>
    </main>
    <footer>
        <div id="contactos" class="footer-wrapper">
           <!-- Footer Start-->
           <div class="footer-area footer-padding" style="padding: 20px 0;">
            <div class="container">
                <div class="row justify-content-between">
                    <!-- Columna 1 -->
                    <div class="col-xl-4 col-lg-3 col-md-8 col-sm-8">
                        <div class="single-footer-caption mb-30">
                            <!-- Logo -->
                            <div class="footer-logo mb-20">
                                <a href="index.html"><img src="assets\img\gallery\lg.png" alt="" style="max-width: 200px;"></a>
                            </div>
                            <div class="footer-tittle">
                                <div class="footer-pera">
                                    <p style="font-size: 22px; line-height: 1.5;">El proceso de aprendizaje comienza tan pronto como tu perro entra a nuestra escuela.</p>
                                </div>
                            </div>
                            <!-- Social -->
                            <div class="footer-social">
                                <a href="#"><i class="fab fa-twitter" style="font-size: 14px;"></i></a>
                                <a href="https://bit.ly/sai4ull"><i class="fab fa-facebook-f" style="font-size: 14px;"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p" style="font-size: 14px;"></i></a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Columna 2 -->
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4">
                        <div class="single-footer-caption mb-30">
                            <div class="footer-tittle">
                                <h4 style="font-size: 14px;">Nuestros servicios</h4>
                                <ul style="font-size: 12px;">
                                    <li><a href="#">Entrenamiento canino</a></li>
                                    <li><a href="#">Cuidado y bienestar</a></li>
                                    <li><a href="#">Socialización y comportamiento</a></li>
                                    <li><a href="#">Nutrición de perros</a></li>
                                    <li><a href="#">Actividades y ejercicios</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Columna 3 -->
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-4">
                        <div class="single-footer-caption mb-30">
                            <div class="footer-tittle">
                                <h4 style="font-size: 14px;">Contact us</h4>
                                <ul style="font-size: 12px;">
                                    <li><a href="mailto:maitecaizalitin09@gmail.com">maitecaizalitin09@gmail.com</a></li>
                                    <li><a href="#">Argelia Baja</a></li>
                                    <li><a href="#">Política de privacidad</a></li>
                                    <li class="number"><a href="tel:+593995540541">(593) 99 554 0541</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
           <!-- footer-bottom area -->
           <div class="footer-bottom-area">
               <div class="container">
                   <div class="footer-border">
                       <div class="row d-flex align-items-center">
                           <div class="col-xl-12 ">
                               <div class="footer-copy-right text-center">
                                   <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                      <a>Copyright ©2025 Todos los derechos reservados </a>
                                      <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <!-- Footer End-->
          </div>
      </footer>
      <!-- Scroll Up -->
      <div id="back-top" >
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <!-- JS here -->

    <script src="assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/animated.headline.js"></script>
    <script src="assets/js/jquery.magnific-popup.js"></script>

    <!-- Date Picker -->
    <script src="assets/js/gijgo.min.js"></script>
    <!-- Nice-select, sticky -->
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/jquery.sticky.js"></script>
    <!-- Progress -->
    <script src="assets/js/jquery.barfiller.js"></script>
    
    <!-- counter , waypoint,Hover Direction -->
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.countdown.min.js"></script>
    <script src="assets/js/hover-direction-snake.min.js"></script>

    <!-- contact js -->
    <script src="assets/js/contact.js"></script>
    <script src="assets/js/jquery.form.js"></script>
    <script src="assets/js/jquery.validate.min.js"></script>
    <script src="assets/js/mail-script.js"></script>
    <script src="assets/js/jquery.ajaxchimp.min.js"></script>
    
    <!-- Jquery Plugins, main Jquery -->	
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
    
</body>
</html>



