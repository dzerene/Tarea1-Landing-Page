<!doctype html>
<html lang="en">
<link href="../resources/css/app.css">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>NotiLog</title>    
    <link rel="shortcut icon" href="img/partelogo.png" type="image/x-icon">
    <link rel="stylesheet" href="css/estilos.css">
    

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="{{url('/static/css/connect.css?v='.time())}}">

    <script src="https://kit.fontawesome.com/69798bd598.js" crossorigin="anonymous"></script>
</head>
<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
</script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->

<body>
    <header>
        <nav>                 
            <a href="/login" styles="">Iniciar Sesión</a>
        </nav>
        <section class="textos-header">
            <h1>NotiLog</h1>
            <h2></h2>
        </section>
        <div class="wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 110%; width: 110%;"><path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: rgb(255, 255, 255);"></path> </svg></div>
        
    </header>
    <main>
       <!--- <section class="contenedor sobre-nosotros">
            <h2>Nuestro Trabajo</h2>
            <div class="contenedor-sobre-nosotros">
                <img src="img/ilustracion.svg" alt="" class="imagen-about-us">
                <div class="contenido-textos">
                    <h3><span>1</span>Grande Colo Colo</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                        In, voluptate. Rem necessitatibus, fuga veniam placeat 
                        quasi esse natus incidunt consequuntur!</p>
                    <h3><span>2</span>Oe zi</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Suscipit quos deleniti harum ut in iure necessitatibus magni 
                        ipsa doloribus excepturi?</p>
                </div>
            </div>
        </section> --->
        <section class="portafolio">
            <div class="contenedor">
                <h2 class="titulo">Nuestro Equipo</h2>
                <div class="galeria-port">
                    <div class="imagen-port">
                        <img src="img/Esteban.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="img/icono.png" alt="">
                            <p>Esteban Simon Vargas Aceña</p>
                            <p>Development Team</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="img/bella.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="img/icono.png" alt="">
                            <p>Diego Andres Zerené Avila</p>
                            <p>Development Team</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="img/bryansuazo.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="img/icono.png" alt="">
                            <p>Dario Alonso Martínez Toy</p>
                            <p>Product Owner</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="img/mati.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="img/icono.png" alt="">
                            <p>Francisco Javier Valdés Martínez</p> 
                            <p>Scrum Master</p>                           
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--
        <section class="cliente contenedor">
            <h2>Que dicen nuestros clientes</h2>
            <div class="cards">
                <div class="card">
                <img src="img/cara1.jpg" alt="">
                <div class="contenido-texto-card">
                    <h4>Diego Zerené</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, mollitia!!</p>
                </div>
            </div>
                <div class="card">
                    <img src="img/cara2.jpg" alt="">
                    <div class="contenido-texto-card">
                        <h4>Dario Martinez</h4>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Architecto, aliquid.</p>
                    </div>
                </div>
            </div> 
        </section>
        <section class="about-services">
            <div class="contenedor">
                <h2 class="titulo">Nuestros servicios</h2>
                <div class="servicio-cont">
                    <div class="servicio-ind">
                        <img src="img/perfil.svg" alt="">
                        <h3>Name</h3>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem, quia!</p>
                    </div>
                    <div class="servicio-ind">
                        <img src="img/ilustacion2.svg" alt="">
                        <h3>Name</h3>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem, quia!</p>
                    </div>
                    <div class="servicio-ind">
                        <img src="img/ilustracion3.svg" alt="">
                        <h3>Name</h3>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem, quia!</p>
                    </div>
                </div>
            </div>
        </section> ----->
    </main>
    <footer>
        <div class="contenedor-footer">
            <div class="content-foo">
                <h4>Telefono</h4>
                <p>913224456</p>
            </div>
            <div class="content-foo">
                <h4>Correo</h4>
                <p>Notilog@gmail.com</p>
            </div>
            <div class="content-foo">
                <h4>Ubicacion</h4>
                <p>Antonio Varas 810</p>
            </div>
        </div>
        <h2 class="titulo-final">&copy; Notilog Design | Dario Martinez - Esteban Vargas - Diego Zerené - Francisco
            Valdez</h2>
    </footer>
</body>

</html>
