<html>

    <head>
        <title>Cajuína Tijuca - Início</title>
        <?php require("header.php") ?>
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

    <nav>
        <ul>

        <a href="index.php"><img id="logo_tijuca" src="img/logo_tijuca.png"></a>
            
            <img id="navbar-solid" src="img/bars-solid.svg">

            <li class="nav_item"><a tabindex="6" href="contatos/contato.php">CONTATO</a></li>
            <li class="nav_item"><a tabindex="5" href="parceria_com_embrapa.php">PARCERIA COM A EMBRAPA</a></li>
            <li class="nav_item"><a tabindex="4" href="tabela_nutricional.php">TABELA NUTRICIONAL</a></li>
            <li class="nav_item"><a tabindex="3" href="a_cajuina.php">A CAJUÍNA</a></li>
            <li class="nav_item"><a tabindex="2" href="historia_cajuina.php">HISTÓRIA</a></li>
            <li class="nav_item"><a tabindex="1" class="active" href="index.php">INÍCIO</a></li>
        </ul>

        <div class="sideNav">
            
            <img id="navbar-times" src="img/times-solid.svg">

            <div class="sideNav_items">
                <a tabindex="1" class="sideItem active" href="index.php">INÍCIO</a></li>
                <a tabindex="2" class="sideItem" href="historia_cajuina.php">HISTÓRIA</a></li>
                <a tabindex="3" class="sideItem" href="a_cajuina.php">A CAJUÍNA</a></li>
                <a tabindex="4" class="sideItem" href="tabela_nutricional.php">TABELA NUTRICIONAL</a></li>
                <a tabindex="5" class="sideItem" href="parceria_com_embrapa.php">PARCERIA COM A EMBRAPA</a></li>
                <a tabindex="6" class="sideItem" href="contatos/contato.php">CONTATO</a></li>
            </div> 

            <div id="sideNav_footer">
                <a href="https://www.instagram.com/tijucalimentos/" target="_blank"><img class="sideNav_instagramIcon" src="img/instagram_icon.svg"></a>
                <a href="https://www.facebook.com/TijucaAlimentos/" target="_blank"><img class="sideNav_facebookIcon" src="img/facebook_icon.svg"></a>
                <a href="https://www.youtube.com/watch?v=bmuwMmFbm_w" target="_blank"><img class="sideNav_youtubeIcon" src="img/youtube_icon.svg"></a>
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

    <div id="image_content"></div>

    <div class="mainContainer">

        <div class="container">  
            <img src="img/image_option1.png" alt="image_option1" class="image">
            
            <a href="historia_cajuina.php">
                <div class="overlay">
                    <div class="textOverlay">História</div>
                </div>
            </a>
        </div>

        <div class="container">  
            <img src="img/image_option2.png" alt="image_option2" class="image">
            
            <a href="a_cajuina.php">
                <div class="overlay">
                    <div class="textOverlay">A Cajuína</div>
                </div>
            </a>
        </div>
            
        <div class="container">  
            <img src="img/image_option3.jpg" alt="image_option3" class="image">
            
            <a href="tabela_nutricional.php">
                <div class="overlay">
                    <div class="textOverlay">Tabela Nutricional</div>
                </div>
            </a>
        </div>

        <div class="container">  
            <img src="img/image_option4.png" alt="image_option4" class="image">
            
            <a href="parceria_com_embrapa.php">
                <div class="overlay">
                    <div class="textOverlay">Parceria com a Embrapa</div>
                </div>
            </a>
        </div>

        <div class="container">  
            <img src="img/image_option5.png" alt="image_option5" class="image">
            
            <a href="https://www.youtube.com/watch?v=bmuwMmFbm_w" target="_blank">
                <div class="overlay">
                    <div class="textOverlay">Vídeo</div>
                </div>
            </a>
        </div>

        <div class="container">  
            <img src="img/image_option6.jpg" alt="image_option6" class="image">
            
            <a href="galeria.php">
                <div class="overlay">
                    <div class="textOverlay">Galeria</div>
                </div>
            </a>
        </div>

    </div>

    <?php require("footer.php") ?>
</body>

</html>