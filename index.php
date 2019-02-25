<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jehaann Manzanares</title>
    <?php wp_head(); ?>
</head>
<body>
    <i class="icon-menu burger-button" id="burger-menu"></i>
    <header class="menu" id="navbar">
        <a href="#main-slider"><h1 class="logo"></h1></a>
        <nav class="container-menu fadeIn">
             <ul>
                 <li><a href="#about-me">Sobre mi</a></li>
                 <li><a href="#portfolio">Portfolio</a></li>
                 <li><a href="#contact"><button class="btn">Contactar</button></a></li>
             </ul>
        </nav>
    </header>
<section id="main-slider" class="main-slider ">

    <div class="container-main">
        <div class="img-slider fadeInLeft">
            <figure>
                <img src= '<?php echo RutaImagenes?>/Perfil-jehaann-manzanares.png' alt="jehaann-manzanares.png">
            </figure>
        </div>


        <div class="info-grapich slide fadeInRight ">
            <div class="info-slider-titles">
                <h2 class="titles"> <strong>Soy<br>FullStack Developer</strong></h2>
                <p class="subtitles">Diseño y desarrollo sistemas completos, interfaces funcionales que se adaptan a todos los dispositivos y con el mas alto rendimiento</p>
            </div>

            <div class="graphic-slider">
                <div id="container">
                </div>
            </div>
        </div>
    </div>
   </section>
    <section id="about-me" class="about-me">
        <div class="container-aboutme ">

        <h2 class="titles title-about fadeInUp">Sobre mí</h2>
        <div class="about-me-subtitle-one">
            <h3 class="titles ">Mis perfiles</h3>
            <p class="subtitles-black">Soy un profesional amante de la tecnología, <strong> Desarrollador FullStack</strong>, <strong>Desarrollador E-Learning</strong>, <strong>Diseñador Gráfico</strong>, <strong>Facilitador del aprendizaje</strong> y sobre todo <strong>Creativo.</strong></p>
            <br>
            <p>
              Cada proyecto me ha permitido desarrolladar :
            </p>
            <div class="profiles">
                <div class="profiles-container" >
                    <i class="lead"></i>
                    <p> Líderazgo de equipo</p>
                </div>
                <div  class="profiles-container">
                    <i class="comunicator"></i>
                    <p>Habilidades de comunicación</p>
                </div>
                 <div class="profiles-container"><i class="time"></i>
                    <p>Cordinación del tiempo</p>
                </div>
            </div>
        </div>
        <div class="about-me-img">
            <figure>
                <img src='<?php echo RutaImagenes?>/jehaann-Manzanares.png' alt="sobre-jehaann-manzanares" class="img-about-me">
            </figure>
        </div>
        <div class="about-me-subtitle-two">
            <h3 class="titles">Conocimientos</h3>
            <div class="skills">
                <h4>SCRUM</h4>
                <div class="skill ">
                    <div class="level one">70%</div>
                </div>
            </div>
            <div class="skills">
                <h4>Lean Six Sixma</h4>
                <div class="skill">
                        <div class="level two">50%</div>
                </div>
            </div>
            <div class="skills">
                <h4>SEO</h4>
                <div class="skill">
                        <div class="level three">62%</div>
                </div>
            </div>
        </div>
    </section>
    <section id="portfolio" class="portfolio">
      <div class="container-portfolio">

        <div class="portfolio-titles">
             <h2 class="titles">Porfolio</h2>
             <p class="subtitles">te presento los proyectos mas destacados que he tenido el placer de desarrollar</p>
        </div>
        <div class="porfolio-category">
            <ul>
                <li><a href="#">Todos </a></li>
                <li><a href="#">FrontEnd </a></li>
                <li><a href="#">BackEnd </a></li>
                <li><a href="#">Wordpress</a></li>
                <li><a href="#">Diseño</a></li>
            </ul>
        </div>

        <article class="project">
                <div  class="project-container">
                    <figure class="image-container">
                        <img src='<?php echo RutaImagenes?>/work1.jpg' alt="sistema web" class="img-project">
                    </figure>
                    <span class="project-info">
                        <p >
                            <span class="titles-project">Desarrollo Web FullStack</span>
                            <span class="subtitles-project">Sistema de ventas, desarrollado desde el boceto hasta ser pueso en producción. </span>
                            <button class="btn">ver proyecto</button>
                        </p>
                    </span>
                </div>
        </article>
        <article class="project">
            <div  class="project-container">
                <figure>
                    <img src='<?php echo RutaImagenes?>/portfolio_details.jpg' alt="projecto1" class="img-project">
                </figure>
                <span class="project-info">
                    <p >
                        <span class="titles-project">Project one</span>
                        <span class="subtitles-project">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</span>
                        <button class="btn">ver proyecto</button>
                    </p>
                </span>
            </div>
        </article>
        <article class="project">
            <div  class="project-container">
                <figure>
                    <img src='<?php echo RutaImagenes?>/portfolio_details.jpg' alt="projecto1" class="img-project">
                </figure>
                <span class="project-info">
                    <p >
                        <span class="titles-project">Project one</span>
                        <span class="subtitles-project">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</span>
                        <button class="btn">ver proyecto</button>
                    </p>
                </span>
            </div>
        </article>
      </div>


    </section>
    <section id="contact" class="contact">
      <div class="container-contact">

        <div class="contact-titles">
            <h2 class="titles">¿Creamos algo juntos?</h2>
            <p class="subtitles-black">si estas aqui es por algo bueno, no dejes ir esta oportunidad</p>
        </div>
        <div class="contact-info">
            <div class="contact-icon-container">
                <i class="icon-ni"></i>
                <p>Managua, Nicaragua</p>
            </div>
            <div class="contact-icon-container">
                <i class="icon-phone"></i>
                <p>(505) 82724327</p>
            </div>
            <div class="contact-icon-container">
                <i class="icon-mail"></i>
                <p>developer@jehaann-manzanares.com</p>
            </div>
        </div>
        <div class="contact-form">
          <form action="" class="contact-form">
              <input type="text" placeholder="Hola mi Nombre es">
              <input type="email" placeholder="Mi email">
              <textarea name="mensage" id="" cols="30" rows="10" placeholder="Comentame de las ideas de tu proyecto y yo las hago realidad.."></textarea>
              <button class="btn">Enviar mensaje</button>
          </form>
        </div>
    </div>
    </section>

    <footer class="footer">
        <h2 class="titles">Sigueme en las redes</h2>
        <div class="social-icons">
            <a href="https://www.facebook.com/JehaannManzanares/"><i class="facebook"></i></a>
            <a href="https://twitter.com/JehanManzanares"><i class="twitter"></i></a>
            <a href="https://www.instagram.com/jehaannmanzanares/"><i class="intagram"></i></a>
            <a href="https://www.linkedin.com/in/jehaann-manzanares-153740140/"><i class="linkedIn"></i></a>
            <a href="https://github.com/Jehaann07"><i class="github"></i></a>
        </div>
        <span>d</span>
        <div class="sub-footer">
                <p class="subtitles">De LATAM  para el mundo</p>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>


</html>
