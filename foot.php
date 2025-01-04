<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimun-scale=1.0">
    <!-- Estilos -->
    <link rel="stylesheet" href="foot_styles.css">
    <link rel="stylesheet" href="style_width(1024).css">
    <link rel="stylesheet" href="style_width(768).css">
    <link rel="stylesheet" href="style_width(42_5).css">
    <link rel="stylesheet" href="style_width(375).css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- Fuentes Letra -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;1,200;1,300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@200;400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200;400&display=swap" rel="stylesheet">
    <!-- Info. Pestaña -->
    <link rel="icon" href="src/img/EHUA - ICON - CIRCLE.png">
    <title> EHUA: Escuela de lenguas </title>
</head>
<body>
        <!-- Form -->
        <div class="ct-info_valores">
            <h1> Nuestro Objetivo </h1>
            <hr><br>
            <div class="ct-info_valores-blocks">
                <div class="block-v">
                    <h2>Visión</h2>
                    <div class="icon_circle">
                        <i class="fa-regular fa-eye"></i>
                    </div>
                    <p>
                        En EHUA Online, nos apasiona brindarte las
                        herramientas necesarias para potenciar tu crecimiento
                        personal, académico y profesional. Nuestra red de
                        aprendizaje revolucionaria y rentable te guiará
                        hacia el éxito.
                    </p>
                </div>
                <div class="block-v">
                    <h2>Misión</h2>
                    <div class="icon_circle">
                        <i class="fa-solid fa-trophy"></i>
                    </div>
                    <p>
                        Lorem ipsum dolor, sit amet consectetur
                        adipisicing elit. Eius, eum ad. Praesentium
                        itaque ipsum amet voluptate ut eveniet possimus
                        adipisci cumque minus vero alias, asperiores
                        magni quisquam ex obcaecati provident!
                    </p>
                </div>
                <div class="block-v">
                    <h2>Valores</h2>
                    <div class="icon_circle">
                        <i class="fa-regular fa-paper-plane"></i>
                    </div>
                    <p>
                        Lorem ipsum dolor, sit amet consectetur
                        adipisicing elit. Eius, eum ad. Praesentium
                        itaque ipsum amet voluptate ut eveniet possimus
                        adipisci cumque minus vero alias, asperiores
                        magni quisquam ex obcaecati provident!
                    </p>
                </div>
            </div>
        </div>
        <!-- -->

        <!-- Form -->
        <div class="main_form" id="contact-us">
            <div class="sec_info">
                <ul>
                    <li>
                        <i class="fa-solid fa-location-dot"></i>
                        <h5>Dirección</h5>
                        <p>Dirección-Dirección</p>
                    </li>
                    <li>
                        <i class="fa-solid fa-envelope"></i>
                        <h5>Correo</h5>
                        <p>ehuaonline@zmail.com</p>
                    </li>
                    <li>
                        <i class="fa-solid fa-phone"></i>
                        <h5>Teléfono</h5>
                        <p>+52 722 894 2216</p>
                    </li>
                </ul>
            </div>
            <hr class="un">
            <form method="post">
                    <h3> Contáctanos </h3>
                    <p>Si necesitas asesoría o ayuda con alguno de nuestros servicios envíanos tu inquietud y un profesional se pondrá en contacto contigo.</p>
                    <input type="varchar" id="name" placeholder="Nombre">
                    <input type="email" id="email" placeholder="Email">
                    <textarea id="msg" placeholder="Mensaje" cols="50" rows="10" maxlength="200"></textarea>
                    <input type="submit" name="enter" value="Enviar" onclick="send_msg()">
            </form>
        </div>
        <!-- -->

        <!-- FAQ -->
        <div class="cont_faq" id="faq_cont">
            <div class="faq_txt">
                <h3>
                    Frequently <br>
                    Asked <br>
                    <b>Questions.</b>
                </h3><br>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Magnam nisi dolorum quaerat, quos facere cumque similique
                    est perferendis, molestias omnis magni non! Ea, architecto
                    corrupti alias perferendis quo doloremque quae?
                </p>
            </div>
            <div class="faq_faq">
                <ul>
                    <li class="faq" id="faq">
                        <div class="faq_faq_txt">
                            <p>Question 1</p>
                            <i class="fa-solid fa-chevron-down" id="faq_button"></i>
                        </div>
                        <div class="faq_ask">
                            <b>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                Natus quos omnis fuga eius dignissimos at accusamus assumenda.
                            </b>
                        </div>
                    </li>
                    <li class="faq_2" id="faq_2">
                        <div class="faq_faq_txt">
                            <p>Question 2</p>
                            <i class="fa-solid fa-chevron-down" id="faq_button_2"></i>
                        </div>
                        <div class="faq_ask">
                            <b>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                Natus quos omnis fuga eius dignissimos at accusamus assumenda.
                            </b>
                        </div>
                    </li>
                    <li class="faq_3" id="faq_3">
                        <div class="faq_faq_txt">
                            <p>Question 3</p>
                            <i class="fa-solid fa-chevron-down" id="faq_button_3"></i>
                        </div>
                        <div class="faq_ask">
                            <b>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                Natus quos omnis fuga eius dignissimos at accusamus assumenda.
                            </b>
                        </div>
                    </li>
                    <li class="faq_4" id="faq_4">
                        <div class="faq_faq_txt">
                            <p>Question 4</p>
                            <i class="fa-solid fa-chevron-down" id="faq_button_4"></i>
                        </div>
                        <div class="faq_ask">
                            <b>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                Natus quos omnis fuga eius dignissimos at accusamus assumenda.
                            </b>
                        </div>
                    </li>
                    <li class="faq_5" id="faq_5">
                        <div class="faq_faq_txt">
                            <p>Question 5</p>
                            <i class="fa-solid fa-chevron-down" id="faq_button_5"></i>
                        </div>
                        <div class="faq_ask">
                            <b>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                Natus quos omnis fuga eius dignissimos at accusamus assumenda.
                            </b>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <!-- -->
        <div class="foot">
            <div class="foot_info">
                <div class="foot_content">
                    <h3>EHUA ONLINE</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem
                        minus delectus iste labore deleniti! Aspernatur quibusdam ratione
                        quidem aliquam quia, esse molestiae voluptas illum amet debitis.
                        Deleniti voluptatum animi atque!
                    </p>
                    <ul>
                        <li><a href="" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
                        <li><a href="https://www.facebook.com/share/1GQdGW9zeG" target="_blank"><i class="fa-brands fa-facebook"></i></a></li>
                        <li><a href="https://www.instagram.com/idiomasehua?igsh=OWx3azQzNXlmdXJz" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                        <li><a href="" target="_blank"><i class="fa-brands fa-linkedin"></i></a></li>
                    </ul>
                </div>
                <div class="contact_div">
                    <ul id="">
                        <li><b class="bigger_nicer">Secciones</b></li>
                        <br>
                        <li><a href="#top">Inicio</a></li>
                        <li><a href="#us-info">Nosotros</a></li>
                        <li><a href="#faq_cont">FAQ</a></li>
                        <li><a href="">Terminos de Servicio</a></li>
                        <li><a href="">Política de Privacidad</a></li>
                    </ul>
                    <ul id="">
                        <li><b class="bigger_nicer">Contáctanos</b></li>
                        <br>
                        <li>
                            <p>Dirección</p>
                        </li>
                        <li>
                            <p>Dirección</p>
                        </li>
                        <li>&nbsp;</li>
                        <li><p><i class="fa-regular fa-envelope"></i> ehuaonline@zmail.com </li></p>
                        <li><p><i class="fa-solid fa-phone"></i> +52 722 894 2216</li></p>
                    </ul>
                </div>
            </div>
            <div class="copyright_div">
                <i class="fa-regular fa-copyright"></i> Copyright EHUA ONLINE. <br> All Rights Reserved
            </div>
        </div>

    <!-- JavaScript -->
    <script src="api.js"></script>
    <script src="app.js"></script>
    <!-- // -->

</body>
</html>