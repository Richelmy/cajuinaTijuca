<html>

    <head>
        <title>Cajuína Tijuca - Galeria</title>
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
            <li class="nav_item"><a tabindex="4" href="tabela_nutricional.php">TABELA NUTRICIONAL</a></li>
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

    <div id="image_gallery">
        <p>Galeria</p>

        <div class="galleryContainer">
            <!-- <div class="itensGallery"> -->
                <div class="imageContainer"><a data-fancybox="gallery" href="img/gallery/image1.jpg"><img class="gallery" src="img/gallery/image1.jpg"></a></div>
                <div class="imageContainer"><a data-fancybox="gallery" href="img/gallery/image2.jpg"><img class="gallery" src="img/gallery/image2.jpg"></a></div>
                <div class="imageContainer"><a data-fancybox="gallery" href="img/gallery/image3.jpg"><img class="gallery" src="img/gallery/image3.jpg"></a></div>
                <div class="imageContainer"><a data-fancybox="gallery" href="img/gallery/image4.jpg"><img class="gallery" src="img/gallery/image4.jpg"></a></div>
                <div class="imageContainer"><a data-fancybox="gallery" href="img/gallery/image5.jpg"><img class="gallery" src="img/gallery/image5.jpg"></a></div>
                <div class="imageContainer"><a data-fancybox="gallery" href="img/gallery/image6.jpg"><img class="gallery" src="img/gallery/image6.jpg"></a></div>
                <div class="imageContainer"><a data-fancybox="gallery" href="img/gallery/image7.jpg"><img class="gallery" src="img/gallery/image7.jpg"></a></div>
                <div class="imageContainer"><a data-fancybox="gallery" href="img/gallery/image8.jpg"><img class="gallery" src="img/gallery/image8.jpg"></a></div>
                <div class="imageContainer"><a data-fancybox="gallery" href="img/gallery/image9.jpg"><img class="gallery" src="img/gallery/image9.jpg"></a></div>
                <div class="imageContainer"><a data-fancybox="gallery" href="img/gallery/image10.jpg"><img class="gallery" src="img/gallery/image10.jpg"></a></div>
                <div class="imageContainer"><a data-fancybox="gallery" href="img/gallery/image11.jpg"><img class="gallery" src="img/gallery/image11.jpg"></a></div>
                <div class="imageContainer"><a data-fancybox="gallery" href="img/gallery/image12.jpg"><img class="gallery" src="img/gallery/image12.jpg"></a></div>
                <div class="imageContainer"><a data-fancybox="gallery" href="img/gallery/image13.jpg"><img class="gallery" src="img/gallery/image13.jpg"></a></div>
                <div class="imageContainer"><a data-fancybox="gallery" href="img/gallery/image14.png"><img class="gallery" src="img/gallery/image14.png"></a></div>
            <!-- </div> -->
        </div>
    </div>
</body>

</html>