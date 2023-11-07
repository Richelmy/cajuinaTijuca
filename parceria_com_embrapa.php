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
            <li class="nav_item"><a tabindex="5" class="active" href="parceria_com_embrapa.php">PARCERIA COM A EMBRAPA</a></li>
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
                <a tabindex="5" class="sideItem active" href="parceria_com_embrapa.php">PARCERIA COM A EMBRAPA</a></li>
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

        <div id="image_embrapa"></div>

        <div class="textContainer">
            <p class="subtitleText">
                A Embrapa
            </p>

            <p class="subtitleText">
                Em parceria com a EMBRAPA - Empresa Brasileira de Pesquisa Agropecuária, 
                diversos produtores conseguiram melhorar o processo de produção, 
                foram aparecendo processos mais eficientes para extração de suco, 
                tempo correto de banho maria, processos de pasteurização e clarificação mais eficientes, 
                que inclusive retiram o tanino,  polifenólicos presentes no suco do caju, 
                que causam o ranço ou trava na garganta quando consumimos o suco, 
                com esses benefícios algumas empresas conseguiram tornar o processo industrial 
                com padrões de qualidade.
            </p>

            <p class="textArea">
                A bebida passa por um processo moderno de microfiltragem que a higieniza 
                e melhora sua aparência. O produto ainda apresenta um forte apelo comercial 
                por não conter químicos nem ingredientes de origem animal, como gelatina, por exemplo. 
                A embalagem de alumínio preserva o produto da luz e permite que ele seja comercializado 
                em áreas mais competitivas dos supermercados.
            </p>

            <p class="textArea">
                A embalagem de vidro da cajuína sempre foi uma tradição desde os tempos do farmacêutico 
                e sanitarista cearense Rodolfo Teófilo, que criou o produto em meados da década de 1930. 
                Com a modernização do processo produtivo a partir do uso de membranas de microfiltração, 
                a escala produtiva foi melhorada e o produto entrou em outro patamar de mercado. 
                As embalagens individuais, mais práticas de usar e em quantidades relativas ao consumo 
                total de uma só vez, levaram a indústria a optar por novos tipos de envasamento, 
                com um apelo visual moderno, tendo em vista os consumidores urbanos.
            </p>

            <p class="textArea">
                Segundo Fernando Abreu, engenheiro de alimentos da Embrapa Agroindústria Tropical, 
                outro aspecto está relacionado ao manuseio e à estocagem do produto acabado, 
                com maior facilidade de empilhamento e ajuste fácil às gondolas e balcões frigoríficos 
                dos pontos de venda. Assim, a cajuína apresentada ao consumidor nesse tipo de embalagem 
                foi concebida para estar em prateleiras onde já se encontra a maioria 
                de outras bebidas de pronto consumo.
            </p>

            <div class="embrapa_galleryContainer">
                <a data-fancybox="gallery" href="img/embrapa_gallery/image1.png"><img class="embrapa_gallery" src="img/embrapa_gallery/image1.png"></a>
                <a data-fancybox="gallery" href="img/embrapa_gallery/image2.jpg"><img class="embrapa_gallery" src="img/embrapa_gallery/image2.jpg"></a>
                <a data-fancybox="gallery" href="img/embrapa_gallery/image3.jpg"><img class="embrapa_gallery" src="img/embrapa_gallery/image3.jpg"></a>
            </div>

            <p class="subtitleText">
                O "pulo do gato" tecnológico na fabricação da cajuína    
            </p>

            <p class="subtitleText">
                Fernando Abreu, da Embrapa, considera que a cajuína disponível em lata representa 
                uma revolução no modo como a bebida é comercializada e consumida. 
                Essa mudança é um novo desdobramento das profundas transformações pelas quais o suco clarificado 
                de caju, nome técnico da cajuína, vem passando.  
            </p>

            <p class="textArea">
                A “nova” cajuína é resultado de uma tecnologia moderna de microfiltragem, 
                na qual o suco integral de caju passa por um tratamento em membranas. 
                Além de clarificar o suco, retirando todas as partículas em suspensão, 
                as membranas possuem capacidade de retenção em nível microbiológico, 
                possibilitando dessa forma um suco de alta qualidade do ponto de vista de higiene, 
                sem nenhum tipo de contaminação.
            </p>

            <p class="textArea">
                Ao ser embalada com uma carga microbiana muito baixa, 
                possibilitando um tratamento térmico mais brando, 
                a cajuína resulta em um produto mais saboroso e com menor perda de vitamina C 
                pelo calor excessivo do tratamento térmico da cajuína tradicional.
                Os processos de clarificação e estabilização (diminuição da oxidação no líquido por 
                meio da redução de componentes oxidativos) do suco foram desenvolvidos no Laboratório 
                de Processos Agroindustriais da Embrapa Agroindústria Tropical.
            </p>

            <p class="textArea">
                Fernando Abreu destaca ainda que a alta condutibilidade térmica do material da lata, 
                o alumínio, permite a fluidez e transferência do calor no contato com a água de 
                cozimento das embalagens. Com isso, o calor chega imediatamente ao produto, 
                com eficiente taxa de destruição de microrganismos ali presentes. “O vidro, nesse caso, 
                é menos eficiente e pode quebrar durante essa operação”, explica.
            </p>

            <p class="textArea">
                Além disso, a cajuína em lata é envasada sob atmosfera inerte, ou seja, 
                há uma injeção de nitrogênio líquido, que ao entrar em contato com o produto 
                transforma-se em um gás inerte e inócuo à saúde humana, 
                permitindo a eliminação do oxigênio dissolvido no suco, 
                a causa de processos oxidativos que culminam com a perda gradativa da vitamina C 
                e vai escurecendo o produto durante a etapa de armazenamento.
            </p>

            <p class="textArea">
                Por ser feita por tecnologia de membranas, a cajuína não usa gelatina 
                ou qualquer outro material de natureza animal ou aditivos químicos para sua produção. 
                O suco é simplesmente extraído da fruta, filtrado para a clarificação e envasado. 
                “A natureza se encarregou de dar ao caju as principais características desejadas 
                em um suco saboroso: a acidez, a doçura e o pH necessários a um processamento 
                térmico brando para sua total estabilização, além de ser uma generosa fonte de vitamina C 
                e um sabor tipicamente brasileiro-nordestino, de onde é originário o caju”, 
                pondera o engenheiro.
            </p>

            <p class="subtitleText">
                Vida útil prolongada e características preservadas   
            </p>

            <p class="textArea">
                Como a conservação da cajuína se dá à temperatura ambiente, 
                os processos oxidativos e microbiológicos são pontos críticos a serem considerados. 
                Tanto a cajuína em lata quanto a cajuína em garrafas de vidro possuem 
                uma forte barreira à entrada de oxigênio e bactérias do meio ambiente.
            </p>

            <p class="textArea">
                A lata apresenta, no entanto, uma barreira a mais contra a luminosidade, 
                que catalisa essas reações. O alumínio é barreira total ao oxigênio e à luz. 
                Além disso, a lata de cajuína é pressurizada com nitrogênio líquido frações 
                de segundos antes do seu fechamento. Daí é criada uma atmosfera inerte, 
                sem oxigênio, e que permite uma vida útil mais prolongada, 
                preservando muito mais seu sabor e coloração levemente âmbar.​​​​​​​
            </p>

            <p class="subtitleText">
                Processo de ultrafiltração por membrana mudou fabricação da cajuína
            </p>

            <p class="textArea">
                A produção da cajuína sem uso de gelatina foi viabilizada por meio da 
                tecnologia de membranas microporosas de micro e ultrafiltração. 
                O processo foi primeiramente desenvolvido em escala-piloto de bancada 
                nos laboratórios da Embrapa em Fortaleza, onde foram testados e avaliados 
                os principais parâmetros operacionais para a obtenção do suco clarificado, 
                límpido e livre da adstringência natural do suco de caju.
            </p>

            <p class="textArea">
                Em meados de 2008, a Embrapa lançou edital de incubação de empresas de base 
                tecnológica por intermédio do programa Proeta, no qual uma das selecionadas 
                foi a empresa cearense Natvita. O processo de incubação visava aos trabalhos 
                de desenvolvimentos finais e extrapolação de escala para uma linha de pesquisa 
                que tinha como base a utilização de membranas para o tratamento de derivados de caju,
                mais precisamente um extrato de fibras de pedúnculos de caju resultantes da extração 
                do suco. Esse extrato, quando concentrado, apresenta um forte potencial como fonte 
                de carotenoides (pigmentos naturais) e polifenois para uso na linha de produtos 
                funcionais obtidos de fontes naturais.
            </p>

            <p class="textArea">
                Esse material também tem potencial para ser usado como corante, 
                e foi trabalhado em membranas, definindo-se todas as etapas de obtenção 
                e concentração em escala-piloto e, paralelamente, 
                passando a usá-la para a clarificação do suco de caju e fabricação de cajuína, 
                inovação que resultou em uma nova oportunidade para o aproveitamento 
                e a valorização do pedúnculo de caju com um produto diferenciado.
            </p>

            <p class="textArea">
                Assim nasceu a cajuína microfiltrada, que representa um avanço no estado da técnica 
                em relação à cajuína tradicional. “Os trabalhos de laboratório com tecnologia 
                de membrana em suco de caju permitiram uma extrapolação de dados teóricos de engenharia 
                em laboratório para uma escala de produção industrial”, ressalta Fernando Abreu.
            </p>

            <p class="textArea">
                O engenheiro de alimentos ressalta ainda que essa cajuína, além de conter alto teor de vitamina C (250 mg/100 ml), não contém qualquer aditivo de origem química ou animal, como é o caso da gelatina geralmente usada nesse tipo de bebida, podendo ser portanto utilizada sem problemas mesmo por um consumidor vegano.
            </p>
        </div>
    
        <?php require("footer.php") ?>
    </body>
</html>