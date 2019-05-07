<?php
/**
*Template name: Página de inicio
*Jehaann Theme - Function and Definitions

@package wordpress
@subpackage jehaann
@since 1.0.0
@Version 1.0.0/
*/
?>
<?php get_header();?>
<section id="main-slider" class="main-slider">
    <div class="container-main">
      <div class="img-slider fadeInLeft">
           <figure>
              <img src= '<?php echo RutaImagenes?>/Perfil-jehaann-manzanares.png' alt="jehaann-manzanares.png">
           </figure>
      </div>
        <div class="info-grapich slide fadeInRight ">
            <div class="info-slider centrado">
                <h2 class="titles"> <strong>Soy Desarrallador Web</strong></h2>
                <p class="subtitles">Diseño y desarrollo sistemas completos, interfaces funcionales que se adaptan a todos los dispositivos y con el mas alto rendimiento.</p>
                <div class="bloque">
                  <a href="#contact" class="btn">Contactar</a>
                  <a href="#portfolio" class="btn works">Ver trabajos</a>
                </div>
            </div>
        </div>
    </div>
   </section>
   <section id="about-me" class="about-me">
        <div class="container-aboutme ">
        <h2 class="titles title-about fadeInUp">Sobre mí</h2>
        <div class="about-me-subtitle-one">
            <!-- <h3 class="titles ">Mis perfiles</h3> -->
            <p class="subtitles-black">Soy un profesional amante de la tecnología, <strong> Desarrollador FullStack</strong>, <strong>Desarrollador E-Learning</strong>, <strong>Diseñador</strong>, <strong>Docente</strong> y sobre todo <strong>Creativo.</strong></p>
            <br>
            <!-- <p>
              he desarrollado habilidades de:
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
            </div> -->
        </div>
        <div class="about-me-img">
            <figure>
                <img src='<?php echo RutaImagenes?>/web-developer-about.jpg' alt="sobre-jehaann-manzanares" class="img-about-me">
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
                        <div class="level three">72%</div>
                </div>
            </div>
            <span class="line"></span>
            <div class="call-to-action-about">
                <a href="https://jehaann-manzanares.com/wp-content/uploads/2019/05/cv-Jehaann-Manzanares-.pdf" class="btn blue download">Descargar CV </a>
                <a href="#contact" class="btn sent"> Enviar mensaje </a>
            </div>
        </div>
        </div>

    </section>
    <section class="services">
      <div class="container-services">
        <h2 class="titles centrado title-service">Mis servicios</h2>
        <div class="service development">
          <div class="content-icon">
            <i class="icon-development"></i>
          </div>
            <h3>Desarrollo web</h3>
            <p>Desarrollo de sistemas, Sitios web dinámicos, estáticos y Wep Apps.</p>
            <!-- <a href="#" class="btn">Más información</a> -->
        </div>
        <div class="service web-desing">
          <div class="content-icon">
            <i class="icon-web-desing"></i>
          </div>
            <h3 >Diseño web </h3>
            <p>Diseño profesional, pensados en brindar la mejor experiencia a los usuarios.</p>
            <!-- <a href="#" class="btn">Más información</a> -->
        </div>
        <div class="service graphic-desing">
          <div class="content-icon">
              <i class="icon-graphic-desing"></i>
          </div>
            <h3 >Diseño Gráfico</h3>
            <p>Diseños creativos que comuniquen los objetivos que deseas, desde logos, papeleria y más.</p>
            <!-- <a href="#" class="btn">Más información</a> -->
        </div>
      </div>
    </section>
    <section id="portfolio" class="portfolio">
      <div class="container-portfolio">

        <div class="portfolio-titles">
             <h2 class="titles">Porfolio</h2>
             <p class="subtitles-black">Te presento los proyectos más destacados que he desarrollado </p>
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
                            <span class="titles-project">Desarrollo Sistema Web</span>
                            <!-- <span class="subtitles-project">Sistema de ventas, desarrollado desde el boceto hasta ser pueso en producción. </span> -->
                            <a href="https://jehaann-manzanares.com/desarrollo-de-sistema-web/"class="btn" >ver proyecto</a>
                        </p>
                    </span>
                </div>
        </article>
        <article class="project">
            <div  class="project-container">
                <figure>
                    <img src='<?php echo RutaImagenes?>/TechTing-Training-and-Consulting.png' alt="projecto1" class="img-project">
                </figure>
                <span class="project-info">
                    <p >
                        <span class="titles-project">Desarrollo Página web</span>
                        <!-- <span class="subtitles-project">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</span> -->
                        <a class="btn" href="https://jehaann-manzanares.com/pagina-web-techting/">ver proyecto</a>
                    </p>
                </span>
            </div>
        </article>
        <article class="project">
            <div  class="project-container">
                <figure>
                    <img src='<?php echo RutaImagenes?>/web-golden-suply.jpg' alt="projecto1" class="img-project">
                </figure>
                <span class="project-info">
                    <p >
                        <span class="titles-project">Diseño Página web</span>
                        <!-- <span class="subtitles-project">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</span> -->
                        <a class="btn" href="https://jehaann-manzanares.com/Diseno-web-golden-supply-cr">ver proyecto</a>
                    </p>
                </span>
            </div>
        </article>
      </div>
    </section>
    <section class="call-to-action">
        <div class="container-call">
            <p class="titles">¿Sabes como transformar en digital tu empresa?</p>
            <a href="#" class="btn">Leer más</a>
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
                <?php if (is_active_sidebar('contact-widget')) {
                    dynamic_sidebar('contact-widget');
                }?>
          <!-- <form action="" class="contact-form">
              <input type="text" placeholder="Hola mi Nombre es">
              <input type="email" placeholder="Mi email">
              <textarea name="mensage" id="" cols="30" rows="10" placeholder="Comentame de las ideas de tu proyecto y yo las hago realidad.."></textarea>
              <button class="btn">Enviar mensaje</button>
          </form> -->
        </div>
    </div>
    </section>
    <?php get_footer();?>
