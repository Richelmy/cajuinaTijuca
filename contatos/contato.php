<?php session_start(); ?>

<html>

    <head>
        <title>Cajuína Tijuca - Contato</title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">    
        <link rel="stylesheet" href="../css/style.css">

        <script src="//code.jquery.com/jquery-3.3.1.min.js"></script>

        <script src='https://www.google.com/recaptcha/api.js?hl=pt-BR'></script>

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-141596579-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-141596579-1');
        </script>
    </head>

    <body>

    <script type="text/javascript">// <![CDATA[
        $(document).ready(function(){
            $(document).bind("contextmenu",function(e){
            return false;
            });
        });
        // ]]>
    </script>

    <nav class="navModBG">
        <ul>

        <a href="../index.php"><img id="logo_tijuca" src="../img/logo_tijuca.png"></a>
            
            <img id="navbar-solid" src="../img/bars-solid.svg">

            <li class="nav_item"><a tabindex="6" class="active" href="contato.php">CONTATO</a></li>
            <li class="nav_item"><a tabindex="5" href="../parceria_com_embrapa.php">PARCERIA COM A EMBRAPA</a></li>
            <li class="nav_item"><a tabindex="4" href="../tabela_nutricional.php">TABELA NUTRICIONAL</a></li>
            <li class="nav_item"><a tabindex="3" href="../a_cajuina.php">A CAJUÍNA</a></li>
            <li class="nav_item"><a tabindex="2" href="../historia_cajuina.php">HISTÓRIA</a></li>
            <li class="nav_item"><a tabindex="1" href="../index.php">INÍCIO</a></li>
        </ul>

        <div class="sideNav">
            
            <img id="navbar-times" src="../img/times-solid.svg">

            <div class="sideNav_items">
                <a tabindex="1" class="sideItem" href="../index.php">INÍCIO</a></li>
                <a tabindex="2" class="sideItem" href="../historia_cajuina.php">HISTÓRIA</a></li>
                <a tabindex="3" class="sideItem" href="../a_cajuina.php">A CAJUÍNA</a></li>
                <a tabindex="4" class="sideItem" href="../tabela_nutricional.php">TABELA NUTRICIONAL</a></li>
                <a tabindex="5" class="sideItem" href="../parceria_com_embrapa.php">PARCERIA COM A EMBRAPA</a></li>
                <a tabindex="6" class="sideItem active" href="contato.php">CONTATO</a></li>
            </div>

            <div id="sideNav_footer">
                <a href="https://www.instagram.com/tijucalimentos/" target="_blank"><img class="sideNav_instagramIcon" src="../img/instagram_icon.svg"></a>
                <a href="https://www.facebook.com/TijucaAlimentos/" target="_blank"><img class="sideNav_facebookIcon" src="../img/facebook_icon.svg"></a>
                <a href="https://www.youtube.com/watch?v=bmuwMmFbm_w" target="_blank"><img class="sideNav_youtubeIcon" src="../img/youtube_icon.svg"></a>
            </div>
        </div>

        <script>
            $("#navbar-solid").click(function()
            {
                $(".sideNav").css('opacity', '1');
                $(".sideNav").css('width', '100%');
            });
            
            $("#navbar-times").click(function()
            {
                $(".sideNav").css('opacity', '0');
                $(".sideNav").css('width', '0%');
            });
        </script>
    </nav>

    <div id="image_contact">
        
        <div class="contactInfo">
            <p class="title_contact">Contato</p>
            <p class="subtitle_contact">Av. Dionísio Leonel Alencar, 2500 - Messejana</p>
            <p class="subtitle_contact">CEP 60870-576 - Fortaleza - Ceará,</p>
            <p class="subtitle_contact">Tel: +55 85 3229-9777</p>
        </div>

        <form method="post" action="send.php">

            <div class="contact_container">
                <div class="formContact_container">

                    <label for="nomeUsuario">Nome *</label>
                    <input class="inputContact" name="nomeUsuario" type="text" placeholder="Seu Nome..." required>

                    <label for="enderecoEmail">Email *</label>
                    <input class="inputContact" name="enderecoEmail" type="email" placeholder="Endereço de Email..." required>

                    <label for="textoContato">Texto *</label>
                    <textarea class="inputContact" name="textoContato" placeholder="Digite Aqui..." required></textarea>
                    
                    <div class="g-recaptcha" data-sitekey="6LclTqcUAAAAAGhsQDiWjiwOErTR3Rj6ghomnkeC"></div>

                    <div class="statusForm"><center><?php echo $_SESSION['response-captcha']; unset($_SESSION['response-captcha']); ?></center></div>

                    <button type="submit" id="submitContact">Enviar</button>
                </div>
            </div>
        </form>
    </div>

    </body>
</html>