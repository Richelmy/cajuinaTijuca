<html>

    <head>
        <title>Cajuína Tijuca - História</title>
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
            <li class="nav_item"><a tabindex="2" class="active" href="historia_cajuina.php">HISTÓRIA</a></li>
            <li class="nav_item"><a tabindex="1" href="index.php">INÍCIO</a></li>
        </ul>

        <div class="sideNav">
            
            <img id="navbar-times" src="img/times-solid.svg">

            <div class="sideNav_items">
                <a tabindex="1" class="sideItem" href="index.php">INÍCIO</a></li>
                <a tabindex="2" class="sideItem active" href="historia_cajuina.php">HISTÓRIA</a></li>
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

    <div id="image_cashewHistory"></div>
        
    <div class="titleText-container">
        <div class="titleText">História</div>
    </div>

    <div class="textContainer">
        <p class="subtitleText">
            Médico farmacêutico e escritor Rodolfo Teófilo, inventor da cajuína, 
            na última década do Século XIX, aplicou a técnica francesa de Appert (pasteurização por banho-maria), 
            a que chamou inicialmente de Vinho Seco de Caju.
        </p>

        <p class="textArea">
            A origem da cajuína está alicerçada na história indígena. O caju, originário da Amazônia, chegou ao Nordeste 
            no processo migratório e prosperou a ponto de se transformar em uma das frutas mais associadas à região. 
            O costume da “cauinagem” era tradicional entre as populações nativas brasileiras, merecendo ser descrito como um ritual. 
            Era a transformação do caju, fruto abundante, no cauim, bebida servida e sorvida por todos. Com a integração entre os indígenas 
            e os brancos, os descendentes de portugueses e os negros oriundos da África, vieram a miscigenação e a assimilação de costumes. 
            Dessa forma, o cauim se tornou cajuína, adotando uma nomenclatura feminina que fazia jus à sua atividade produtiva — a bebida era feita 
            apenas por mulheres. Levado pelas correntes indígenas que atravessavam o território nacional, o caju teve o consumo popularizado 
            na mesma proporção que seu uso como propriedade medicinal. Quando, no decorrer dos anos, a castanha atingiu alto valor mercadológico, 
            chegando a ser incluído no rol dos produtos a serem exportados, as políticas agroindustriais no Brasil valorizaram o caju e determinaram 
            o surgimento de grandes plantações, o que contribuiu também para a difusão da cajuína.
        </p>

        <p class="textArea">
            A cajuína é obtida após a realização de vários processos, alguns modificados com o passar dos tempos. 
            O primeiro passo é a extração do suco, originalmente utilizando-se panos que, torcidos com a polpa do pseudofruto colocada internamente, 
            já perfazia a essencial etapa posterior, a filtração: a cajuína é, por característica própria, um líquido extremamente límpido. 
            Métodos modernos do fabrico em quantidades consideráveis obrigam, atualmente, a separação desses estágios iniciais. 
            Em seguida adiciona-se gelatina que, por o suco ser um tanto adstringente, irá colaborar para a retirada do “travamento” que o caju causa na garganta, 
            além de facilitar na separação dos taninos (quando no meu tempo de criança, utilizava-se, no lugar da gelatina, cola em barras, dessas, tipo goma arábica, 
            vendidas em armazéns, que seriam derretidas no momento de ebulição). Finalmente, a clarificação, conseguida com a fervura do produto final em Banho Maria, 
            já acondicionado em garrafas de vidro, lacradas com tampinhas metálicas. No passado, arrolhavam-se os gargalos, aplicando-se breu derretido nos bocais, 
            para perfeita hermetização dos conteúdos. O inventor do intrincado processo foi o baiano Rodolfo Marcos Teófilo (Salvador, 06/maio/1853 – Fortaleza, 02/julho/1932), 
            farmacêutico pela Faculdade de Medicina da Bahia (1875) e estabelecido no Ceará desde muito cedo.
        </p>

        <div class="history_galleryContainer">
            <a data-fancybox="gallery" href="img/historia_gallery/image1.png"><img class="history_gallery" src="img/historia_gallery/image1.png"></a>
            <a data-fancybox="gallery" href="img/historia_gallery/image2.png"><img class="history_gallery" src="img/historia_gallery/image2.png"></a>
            <a data-fancybox="gallery" href="img/historia_gallery/image3.png"><img class="history_gallery" src="img/historia_gallery/image3.png"></a>
            <a data-fancybox="gallery" href="img/historia_gallery/image4.jpg"><img class="history_gallery" src="img/historia_gallery/image4.jpg"></a>
        </div>

        <p class="textArea">
            Com elevados pendores ao cientificismo, Rodolfo Teófilo chegou à sua formulação final em 1900,
            com o intuito de, com o seu elixir, combater o alcoolismo que predominava entre o povo cearense, 
            até hoje com tendências etílicas bastantes acentuadas. 
            Julgava-o um substituto benévolo da cachaça. Como de fato o era, 
            já que na época os consumidores não contavam com os paliativos disponíveis no mercado 
            às bebidas alcoólicas: refrigerantes, águas gaseificadas e/ou adicionadas de essências, 
            isotônicos, energéticos, etc. E é dele também o nome do produto, hoje, antes de mais nada, 
            universal.
        </p>

        <p class="subtitleText">
            É interessante perceber que o modo tradicional de produção da cajuína foi desenvolvido 
            e aperfeiçoado com o passar do tempo. Por mais que as técnicas sejam semelhantes, 
            cada núcleo produtor concebeu melhorias e buscou aprimorar técnicas específicas para 
            que os sabores ficassem distintos. É por isso que cada garrafa de cajuína apresenta o 
            gosto universal mas também as nuances da região onde é produzida.​​​​​​​
        </p>

    </div>

    <?php require("footer.php") ?>
</body>

</html>