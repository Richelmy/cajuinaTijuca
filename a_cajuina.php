<html>

    <head>
        <title>Cajuína Tijuca - A Cajuina</title>
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
            <li class="nav_item"><a tabindex="3" class="active" href="a_cajuina.php">A CAJUÍNA</a></li>
            <li class="nav_item"><a tabindex="2" href="historia_cajuina.php">HISTÓRIA</a></li>
            <li class="nav_item"><a tabindex="1" href="index.php">INÍCIO</a></li>
        </ul>

        <div class="sideNav">
            
            <img id="navbar-times" src="img/times-solid.svg">

            <div class="sideNav_items">
                <a tabindex="1" class="sideItem" href="index.php">INÍCIO</a></li>
                <a tabindex="2" class="sideItem" href="historia_cajuina.php">HISTÓRIA</a></li>
                <a tabindex="3" class="sideItem active" href="a_cajuina.php">A CAJUÍNA</a></li>
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

    <div id="image_theCashew"></div>

    <div class="titleText-container">
        <div class="titleText">A Cajuína</div>
    </div>

    <div class="textContainer">
        <p class="subtitleText">A Cajuína</p>
        <p class="subtitleText">Segundo Julia Morim consultora FUNDAJ/UNESCO (2014), </p>
        <p class="textArea quoteText">
            "Sem álcool, clarificada, esterilizada e preparada do suco de caju, 
            com uma cor amarelo-âmbar extraída da caramelização dos açúcares naturais do suco, 
            a cajuína é uma típica bebida do Nordeste brasileiro. 
            Produzida e consumida nos estados do Maranhão, do Ceará e do Piauí, 
            é mais comum neste último, onde se tornou um dos mais conhecidos, 
            difundidos e festejados símbolos da cultura popular. 
            Seu nome deriva do “acaju” ou “acâi-ou”, do tupi “fruto que se produz, 
            fruto do pomo amarelo”, que é o caju como se conhece e se aprecia hoje".
        </p>

        <p class="textArea">
            A cajuína por muito tempo teve sua fabricação caseira, sem escala industrial, 
            sem controle e padrões de qualidade, sem padrão de sabor, cor, 
            algumas mais claras outras bem escuras, sem receita, sem tecnologia, 
            cada produtor faz o cajuína da maneira que aprendeu. 
            Com essas variações ficou bem difícil agradar o paladar de todos os consumidores, 
            fazendo com que a cajuína seja um produto cultural do nordestino, 
            com vendas apenas em canteiros de estradas em zona rural, 
            deixando de explorar um mercado bem maior, 
            com grande potencial por se tratar de um produto 100% natural.
        </p>

        <p class="textArea">
            Em parceria com a EMBRAPA - Empresa Brasileira de Pesquisa Agropecuária , 
            diversos produtores conseguiram melhorar o processo de produção, 
            foram aparecendo processos mais eficientes para extração de suco, 
            tempo correto de banho maria, processos de pasteurização e clarificação mais eficientes, 
            que inclusive retiram o tanino,  polifenólicos presentes no suco do caju, 
            que causam o ranço ou trava na garganta quando consumimos o suco, 
            com esses benefícios algumas empresas conseguiram tornar o processo industrial com padrões 
            de qualidade.
        </p>

        <p class="textArea">
            Hoje a produção de caju tem como principal produto final a amêndoa da castanha de caju, 
            por ser um produto que consegue agregar mais valor, 
            e o pedúnculo acaba se tornando muitas vezes um “problema” para os maiores produtores,
        </p>

        <p class="textArea">
            Segundo a SEBRAE, uma reportagem fala sobre soluções para minimizar esse problema 
            “Uma parte do caju, que normalmente era desperdiçada, 
            virou uma fonte de renda para pequenos produtores do Rio Grande do Norte. 
            A Cooperativa Central da Agricultura Familiar do Rio Grande do Norte (Coofarn) 
            está comercializando produtos derivados de caju. 
            A inovação é a utilização da fibra extraída do pedúnculo como matéria prima para 
            produtos derivados, como o hambúrguer. Após beneficiamento, a polpa é temperada e, 
            assim como acontece com a proteína de soja, serve para várias receitas como recheio de pizzas, 
            almôndegas e brusquetas, bem como bolos e doces.
        </p>

        <p class="textArea">
            Para mil toneladas de castanha, tem-se três mil toneladas de pedúnculo, 
            onde o principal consumo é polpa de caju para suco, mas o mercado não consumir toda essa polpa, 
            por isso a necessidade de novos produtos para reduzir o desperdício, 
            e acredita-se que a principal solução seja a fabricação da cajuína, 
            mas com um processo industrial de alto padrão de qualidade, 
            para reeducar os consumidores e conseguir explorar melhor o mercado.
        </p>
    
        <p class="subtitleText">A Latinha</p>

        <p class="textArea">
            Toda a plantação de cajueiros da Tijuca Alimentos está localizada na zona rural de Beberibe-CE, 
            buscando o mercado saudável, toda a área plantada tem selo de certificação orgânica, 
            buscando produzir uma cajuína diferenciada e orgânica, 
            mas o principal diferencial é uma membrana de ultrafiltração introduzida no processo 
            de fabricação onde conseguimos clarificar 100% o suco do caju, 
            tornando uma cajuína mais clarinha e com sabor leve, e bem refrescante quando consumido gelado. 
            Outro diferencial é a embalagem, toda a cajuína do mercado é envasada em garrafas de vidro, 
            já cajuína Tijuca, em latinhas de alumínio reciclado com 269 ml, buscando praticidade, 
            buscando um público jovem, praticantes de esporte, e aqueles que procuram o natural, 
            temos convicção de um produto saudável e que cairá no gosto de todo o tipo de consumidor.
        </p>

        <div class="cajuina_galleryContainer">
            <a data-fancybox="gallery" href="img/cajuina_gallery/image1.jpg"><img class="cajuina_gallery" src="img/cajuina_gallery/image1.jpg"></a>
            <a data-fancybox="gallery" href="img/cajuina_gallery/image2.jpg"><img class="cajuina_gallery" src="img/cajuina_gallery/image2.jpg"></a>
            <a data-fancybox="gallery" href="img/cajuina_gallery/image3.png"><img class="cajuina_gallery" src="img/cajuina_gallery/image3.png"></a>
            <a data-fancybox="gallery" href="img/cajuina_gallery/image4.png"><img class="cajuina_gallery" src="img/cajuina_gallery/image4.png"></a>
        </div>

    </div>

    <?php require("footer.php") ?>
</body>

</html>