<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@200&display=swap"
        rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet" />
    <link rel="icon" type="icon" href="eclat-icon.ico" />
    <link rel="stylesheet" href="styles.css" />
    <title>Éclat | Web Design</title>
</head>

<body>
    <div class="menu">
        <div class="add-nav-1">
            <p class="name">
                Éclat <span>Web Design</span>
            </p>
        </div>
        <nav>
            <input type="checkbox" id="check">
            <label for="check" class="checkbtn">
                ☰
            </label>
            <a href="#" class="enlace">
                <img src="icons/logo.png" alt="" class="logo">
            </a>
            <ul>
                <li><a href="#services-1-section">Servicios</a></li>
                <li><a href="#experience-1-section">Experiencia</a></li>
                <li><a href="#knowledge-1-section">Conocimientos</a></li>
                <li><a href="#personality-1-section">Personalidad</a></li>
                <li><a href="#contact-1-section">Contacto</a></li>
            </ul>
        </nav>
        <div class="options-nav">
            <ul class="horizontal-menu">
                <li><a href="#services-section">Servicios</a></li>
                <li><a href="#experience-section">Experiencia</a></li>
                <li><a href="#knowledge-section">Conocimientos</a></li>
                <li><a href="#contact-section">Contacto</a></li>
            </ul>
        </div>
        <div class="add-nav-2">
            <p class="number"><a href="tel:+523313327393">+52 33 13 32 7393</a></p>
        </div>
    </div>

    <div class="header">
        <div class="header-item item-1">
            <h3>Hola soy Alex</h3>
        </div>
        <div class="header-item item-2">
            <h3>
                Yo diseño hermosas y sencillas soluciones digitales. Y amo hacerlo.
            </h3>
        </div>
        <div class="header-item item-3">
            <h3>
                <a href="mailto:alejoglezlunajw@gmail.com">alejoluna@gmail.com</a>
            </h3>
        </div>
        <div class="header-item item-4">
            <img class="header-image" src="assets/images/header-img.jpeg" />
        </div>
        <div class="header-item item-5">
            <img class="education" src="assets/icons/educacion.png" />
            <h3 id="services-section">
                Acreditado por la Universidad de Guadalajara
            </h3>
        </div>
    </div>

    <div id="services-section" class="services">
        <div  class="services-column column-2">
            <h2>En qué puedo ayudarte</h2>
            <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quos,
                similique tenetur asperiores illum, ratione neque voluptatibus
                necessitatibus reprehenderit voluptates laudantium. 
            </p>
            <br>
            <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quos,
                similique tenetur asperiores illum, ratione neque voluptatibus
                necessitatibus reprehenderit voluptates laudantium. 
            </p>
            <br>
            <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quos,
                similique tenetur asperiores illum, ratione neque voluptatibus
                necessitatibus reprehenderit voluptates laudantium. 
            </p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        </div>
        <div class="services-column column-1">
            <div class="services-row">
                <img class="icon-services icon-1" src="assets/icons/design-icon.png" />
                <h3>Diseño Web y Móvil</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>

            <div class="services-row"></p>
                <img class="icon-services icon-2" src="assets/icons/social-media-icon.png" />
                <h3>Manejo de Redes Sociales</h3>
                <p >Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>

            <div class="services-row">
                
                <img class="icon-services icon-3" src="assets/icons/company-icon.png" />
                <h3 id="experience-section">Indentidad Corporativa</h3>
                <p id="personality-section" >
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </p>
                
            </div>
        </div>
    </div>

    <div id="experience-1-section" class="experience">
        <div class="experience-header" id="experience-section" >
            <h2 >Mi experiencia laboral</h2>
        </div>

        <div class="experience-row">
            <div class="experience-works">
                <h3 class="work-1">Fundación Nacional para la Gestión de Riesgos de Desastres A.C.</h3>
                <h3 class="work-2">Diseñador Web Independiente</h3>
                <h3 class="work-3">Mexican Cutre</h3>
            </div>

            <div class="experience-timeline">
                <div class="container-1 right">
                    <div class="content">
                        <h2>Consultoría TI</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio nobis nemo ex minus
                            possimus.
                            Magnam
                            ullam tempore dolorum voluptatibus ex?</p>
                    </div>
                </div>

                <div class="container-2 right">
                    <div class="content">
                        <h2>Diseño de Interfaz de Usuario</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio nobis nemo ex minus
                            possimus.
                            Magnam
                            ullam tempore dolorum voluptatibus ex?</p>
                    </div>
                </div>
                <div class="container-3 right">
                    <div class="content">
                        <h2>Desarrollador Web</h2>
                        <p id="knowledge-section">Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio nobis
                            nemo ex minus
                            possimus.
                            Magnam
                            ullam tempore dolorum voluptatibus ex?</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="knowledge" id="knowledge-1-section">
        <div class="knowledge-header">
            <h2>Conocimientos técnicos</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias,
                dolorum!
            </p>
        </div>
        <div class="knowledge-container">
            <div class="knowledge-card knowledge-card-1">
                <img src="assets/icons/code-icon.png" />
                <p>Web Technologies</p>
            </div>
            <div class="knowledge-card knowledge-card-1">
                <img src="assets/icons/ux-icon.png" />
                <p>UX/UI</p>
            </div>
            <div class="knowledge-card knowledge-card-1">
                <img src="assets/icons/content-icon.png" />
                <p>Content Creation</p>
            </div>
            <div class="knowledge-card knowledge-card-2">
                <img src="assets/icons/manager-icon.png" />
                <p>SM Management</p>
            </div>
            <div class="knowledge-card knowledge-card-2">
                <img src="assets/icons/branding-icon.png" />
                <p>Branding</p>
            </div>
            <div id="personality-1-section" class="knowledge-card knowledge-card-2">
                <img src="assets/icons/analytics-icon.png" />
                <p id="opinion-section">Web Analytics</p>
            </div>
        </div>
    </div>

    <div class="personality">
        <div class="personality-header">
            <h2>Aptitudes</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias,
                dolorum!
            </p>
        </div>
        <div class="personality-container">
            <div class="personality-item item-1">
                <h3>Capacidad de innovar</h3>
            </div>
            <div class="personality-item item-2">
                <h3>Dinámico</h3>
            </div>
            <div class="personality-item item-3">
                <h3>Capacidad de innovar</h3>
            </div>
            <div class="personality-item item-4">
                <h3>Perfeccionista</h3>
            </div>
            <div class="personality-item item-5">
                <h3>Constructor de relaciones</h3>
            </div>
            <div class="personality-item item-6">
                <h3>Estrátegico</h3>
            </div>
            <div class="personality-item item-7">
                <h3>Innovador</h3>
            </div>
            <div class="personality-item item-8">
                <h3>Analítico</h3>
            </div>
            <div class="personality-item item-9">
                <h3>Empático</h3>
            </div>
        </div>
    </div>

    <div class="opinion">
        <div class="opinion-header">
            <h2 class="opinion-header-title">Lo que dicen sobre mi</h2>
            <p class="opinion-header-paragraph">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias,
                dolorum!
            </p>
        </div>
        <div class="slideshow-container">
            <div class="mySlides fade">
                <img class="slide-image" src="assets/images/avatar.png" />
                <h3>Miguel Pérez</h3>
                <p class="coment-1">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas,
                    voluptatum!
                </p>
            </div>

            <div class="mySlides fade">
                <img class="slide-image" src="assets/images/avatar2.png" />
                <h3>María López</h3>
                <p class="coment-2">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas,
                    voluptatum!
                </p>
            </div>

            <div class="mySlides fade">
                <img class="slide-image" src="assets/images/avatar3.png" />
                <h3>Luisa García</h3>
                <p class="coment-3">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas,
                    voluptatum!
                </p>
            </div>
        </div>
        <br />

        <div id="contact-section" class="click" style="text-align: center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>
    </div>

    <div id="contact-1-section" class="contact">
        <div class="contact-container">
            <div class="contact-column contact-column-1">
                <div class="contact-phrase">
                    <h2>Juntos hagamos algo asombroso</h2>
                    <h3>Todo inicia diciendo <span>¡Hola!</span></h3>
                </div>

                <div class="contact-social-media">
                    <a href="mailto:alejoglezlunajw@gmail.com"><img src="assets/icons/email.png"></a>
                    <a href="https://wa.me/+523313327393"><img src="assets/icons/whatsapp.png"></a>
                    <a href="https://www.instagram.com/alejo_luna777/"><img src="assets/icons/instagram.png"></a>
                    <a href="https://www.linkedin.com/in/alejandro-luna-33865920b"><img
                            src="assets/icons/linkedin.png"></a>
                </div>
            </div>
            <div class="contact-column contact-column-2">
                <h3>Información</h3>
                <p>Guadalajara, Jalisco, México</p>
                <ul>
                    <li>Servicios</li>
                    <li>Aptitudes</li>
                    <li>Opiniones</li>
                    <li>Contacto</li>
                </ul>
            </div>
        </div>

        <hr />

        <div class="contact-bottom">
            <div class="contact-bottom-item name">
                <p>
                    <span>Alex Glez Luna </span><br class="break">| ©2022 Todos los derechos reservados
                </p>
            </div>
            <div class="contact-bottom-item sign">
                <p>Diseñado por Éclat Web Design</p>
            </div>
        </div>
    </div>

    <script src="scripts/script.js"></script>
</body>

</html>