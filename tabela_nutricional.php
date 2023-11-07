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

    <nav class="navModBG">
        <ul>

        <a href="index.php"><img id="logo_tijuca" src="img/logo_tijuca.png"></a>
            
            <img id="navbar-solid" src="img/bars-solid.svg">

            <li class="nav_item"><a tabindex="6" href="contatos/contato.php">CONTATO</a></li>
            <li class="nav_item"><a tabindex="5" href="parceria_com_embrapa.php">PARCERIA COM A EMBRAPA</a></li>
            <li class="nav_item"><a tabindex="4" class="active" href="tabela_nutricional.php">TABELA NUTRICIONAL</a></li>
            <li class="nav_item"><a tabindex="3" href="a_cajuina.php">A CAJUÍNA</a></li>
            <li class="nav_item"><a tabindex="2" href="historia_cajuina.php">HISTÓRIA</a></li>
            <li class="nav_item"><a tabindex="1" href="index.php">INÍCIO</a></li>
        </ul>

        <div class="sideNav">
            
            <img id="navbar-times" src="img/times-solid.svg">

            <div class="sideNav_items">
                <a tabindex="1" class="sideItem" href="index.php">INÍCIO</a></li>
                <a tabindex="2" class="sideItem" href="historia_cajuina.php">HISTÓRIA</a></li>
                <a tabindex="3" class="sideItem" href="a_cajuina.php">A CAJUÍNA</a></li>
                <a tabindex="4" class="sideItem active" href="tabela_nutricional.php">TABELA NUTRICIONAL</a></li>
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

    <div class="bgtableNutri"></div>

    <div class="container_tabelaNutricional">
            
        <div id="image_tableNutri"></div>

        <div class="textContainer_tableNutri">

            <p class="text_tableNutri">
                (*) % Valores diários baseados em uma dieta de 2000 ou 8400 kJ. Seus valores diários podem ser maiores ou menores, dependendo de suas necessidades energéticas.(**) VD não estabelecidos.
            </p>

            <p class="text_tableNutri">
                INGREDIENTES: Suco de Caju. NÃO CONTÉM GLÚTEN. NÃO FERMENTADO E NÃO ALCOÓLICO. A cajuína é o suco integral de caju, filtrado e tratado termicamente.
            </p>

            <p class="text_tableNutri">
                CONSERVAÇÃO: Manter em local seco e arejado. Depois de aberto, conservar em geladeira (2 °C a 8 °C) e consumir em até 3 dias. VALIDADE: 12 meses.
            </p>
        </div>
    </div>
    </body>
</html>