<?php


include_once('db_conn1.php');


if(isset($_POST['main'])){

    $name = $_POST['name'];

    $email= $_POST['email'];

    $cellphone = $_POST['cellphone'];

    $message = $_POST['message'];

    $result = mysqli_query($conn1,"INSERT INTO consult(name,email,cellphone,message) VALUES('$name','$email','$cellphone','$message')");



    //si la data ha sido insertada exitosamente

    if($result){


     }else{

        echo "error de registro, intente nuevamente".mysqli_error($conn);

    }



}


?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Main</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" ></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="login.php">Cerrar sesion</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Bienvenido Roberto!</div>
                <div class="masthead-heading text-uppercase">Es un placer tenerte aquí</div>
                <a class="btn btn-primary btn-xl text-uppercase" href="#services">Cuentame más</a>
            </div>
        </header>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Servicios</h2>
                    <h3 class="section-subheading text-muted">Conoce un poco de lo que ofrecemos</h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fa-solid fa-headset fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Audifonos</h4>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fa-solid fa-keyboard fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Teclados</h4>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fa-solid fa-computer-mouse fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Ratones</h4>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Últimos lanzamientos</h2>
                    <h3 class="section-subheading text-muted">Estos son los lazmientos del últimos mes</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!--  item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="https://www.amazon.es/dp/B07W6HDNPG?tag=educacion-21&linkCode=ogi&th=1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/1a.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">ASTRO Gaming A10 Gen 2</div>
                                <div class="portfolio-caption-subheading text-muted">S/249.90 </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!--  item 2-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="https://www.amazon.es/dp/B092W4K8Z5?tag=educacion-21&linkCode=ogi&th=1&psc=1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/2a.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Trust GXT 992 YBAR</div>
                                <div class="portfolio-caption-subheading text-muted">S/69.90</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!--  item 3-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="https://www.amazon.es/dp/B07YMHGP86?tag=educacion-21&linkCode=ogi&th=1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/4a.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Logitech G635</div>
                                <div class="portfolio-caption-subheading text-muted">S/359.90</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <!--  item 4-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="https://www.amazon.es/dp/B07MTY5HH8/ref=sspa_dk_detail_4?psc=1&pd_rd_i=B07MTY5HH8&pd_rd_w=vOXoq&pf_rd_p=444f018a-62d7-48b2-a88a-cea784dc658f&pd_rd_wg=YA9dj&pf_rd_r=5NQ38BP3B78H4Q4TWDRQ&pd_rd_r=1f2f9dc0-52f5-49ca-88b3-1742fe2d86c2&s=computers&spLa=ZW5jcnlwdGVkUXVhbGlmaWVyPUEzQUozMDFMNVUzNUJPJmVuY3J5cHRlZElkPUEwMTc0NTM4NlhPR0gwOVc0TElVJmVuY3J5cHRlZEFkSWQ9QTAxOTU2MDUyRDUyOEJIMkQzMDBRJndpZGdldE5hbWU9c3BfZGV0YWlsJmFjdGlvbj1jbGlja1JlZGlyZWN0JmRvTm90TG9nQ2xpY2s9dHJ1ZQ==">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/3b.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">HyperX Alloy Core RGB</div>
                                <div class="portfolio-caption-subheading text-muted">S/279.90</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                        <!--item 5-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="https://www.amazon.es/dp/B07XVQVYPT?tag=educacion-21&linkCode=ogi&th=1&psc=1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/5a.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">The G-LAB K-Stand</div>
                                <div class="portfolio-caption-subheading text-muted">S/88.90</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <!--  item 6-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="https://www.amazon.es/dp/B08VJGTWQL/ref=sspa_dk_detail_2?pd_rd_i=B08VJGTWQL&pd_rd_w=qLiXB&pf_rd_p=444f018a-62d7-48b2-a88a-cea784dc658f&pd_rd_wg=GVIaI&pf_rd_r=9Q6QXH3BHGGZ37HEF7N5&pd_rd_r=78e089b0-361a-4987-b3cf-c45af1b401cc&s=electronics&spLa=ZW5jcnlwdGVkUXVhbGlmaWVyPUEyR0tIQ0E2WlI2TVY1JmVuY3J5cHRlZElkPUEwMDY1OTA2MUtPVlVCNUVSS1lENiZlbmNyeXB0ZWRBZElkPUEwMTU4MTE5OVZJWFFYUVFUOFpBJndpZGdldE5hbWU9c3BfZGV0YWlsJmFjdGlvbj1jbGlja1JlZGlyZWN0JmRvTm90TG9nQ2xpY2s9dHJ1ZQ&th=1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/6a.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Alfombrilla ratón Batman DC Comics</div>
                                <div class="portfolio-caption-subheading text-muted">S/79.90</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About-->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">¿Quienés somos?</h2>
                    <h3 class="section-subheading text-muted">Conoce acerca de nosotros</h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/1.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>2018-2019</h4>
                                <h4 class="subheading">Nuestros Comienzos</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/2.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Junio 2020</h4>
                                <h4 class="subheading">Un emprendimiento nacía</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                        </div>
                    </li>
                    <li >
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/3.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Noviembre 2021</h4>
                                <h4 class="subheading">Nos hacemos conocidos</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/4.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Enero 2022</h4>
                                <h4 class="subheading">Hacemos envíos a nivel nacional</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>
                                Sé parte
                                <br />
                                De
                                <br />
                                Nosotros!
                            </h4>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
    
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Contáctanos</h2>
                    <h3 class="section-subheading text-muted">Sea libre de expresar cualquier consulta</h3>
                </div>
                
                <!-- to get an API token!-->
                <form id="contactForm" action="main.php" method="POST">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <!-- Name input-->
                                <input class="form-control" name="name" type="text" placeholder="Su Nombre *" data-sb-validations="required" />
                                <div  data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <div class="form-group">
                                <!-- Email address input-->
                                <input class="form-control" name="email" type="email" placeholder="Su Email *" data-sb-validations="required,email" />
                                <div  data-sb-feedback="email:required">An email is required.</div>
                                <div  data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <div class="form-group mb-md-0">
                                <!-- Phone number input-->
                                <input class="form-control" name="cellphone" type="cellphone" placeholder="Su Celular *" data-sb-validations="required" />
                                <div  data-sb-feedback="phone:required">A phone number is required.</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <!-- Message input-->
                                <textarea class="form-control" name="message" type="message" placeholder="Su Mensaje *" data-sb-validations="required"></textarea>
                                <div  data-sb-feedback="message:required">A message is required.</div>
                            </div>
                        </div>
                    </div>
                    
                
                   
                    <!-- Submit Button-->
                    <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase " name="main" type="submit">Enviar consulta</button></div>
                </form>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Copyright &copy; Your Website 2022</div>
                
                    <div class="col-lg-4 text-lg-end">
                        <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                        <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>
       
    </body>
</html>
