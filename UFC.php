<?php

namespace PROJETOSITELUTAS\PHP;

require_once('./Header.php');

?>

<!DOCTYPE html>


<head>
    <link rel='stylesheet' href='./CSS/css-UFC.css' type='text/css' />
    <link rel="stylesheet" href="./CSS/post-format.css" type="text/css" />
</head>

<body>
    <div class='corpo-texto'>
        <div id="slider">
            <div id="demo" class="carousel slide" data-ride="carousel">

                <!-- Indicators -->
                <ul class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                    <li data-target="#demo" data-slide-to="1"></li>
                    <li data-target="#demo" data-slide-to="2"></li>
                    <li data-target="#demo" data-slide-to="3"></li>
                </ul>

                <!-- The slideshow -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="./Imagens/UFC1.jpg" alt="Los Angeles">
                    </div>
                    <div class="carousel-item">
                        <img src="./Imagens/CharlesBronx.jpg" alt="Charles">
                    </div>
                    <div class="carousel-item">
                        <img src="./Imagens/UFC3.webp" alt="Ufc3">
                    </div>
                    <div class="carousel-item">
                        <img src="./Imagens/UFC4.webp" alt="Ufc3">
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>

            </div>
        </div>
        <div id="como-entrar">
            <div class="container-informativo sr">
                <div class="container-texto-informativo" style="margin-right:20px;">
                    <h1>Como entrar no UFC</h1>
                    <p>
                        A origem do Muay Thai confunde-se com a origem do povo Tailand??s. Existem v??rias vers??es sobre a origem do Muay Thai. A mais aceita pela maioria dos Mestres de Muay Thai e tamb??m por v??rios historiadores Tailandeses ?? a seguinte: Segundo os Tailandeses, a origem de seu povo ?? a prov??ncia de Yunnam, nas margens do rio Yang Ts?? na China Central. Muitas gera????es atr??s eles migraram da China para o local onde atualmente ?? ?? Tail??ndia em busca de liberdade e de terras f??rteis para agricultura. Do seu local de origem, a China, at?? o seu destino, os Tailandeses foram constantemente hostilizados e sofreram muitos ataques de bandidos, de Senhores da Guerra, de animais, e tamb??m foram acometidos de muitas doen??as. Para protegerem-se e manterem ?? sa??de, eles criaram um m??todo de luta chamado ???Chupasart???. Este m??todo de luta e auto-defesa fazia uso de diversas armas como por exemplo: espadas, facas, lan??as, bast??es, escudos, machados, arco e flecha, etc. No treinamento do ???Chupasart???, freq??entemente ocorriam acidentes que causavam algumas vezes graves ferimentos aos praticantes. Para que eles pudessem treinar sem ferir-se, os tailandeses criaram um m??todo de luta sem armas, o percursor do atual Muay Thai.
                    </p>
                </div>


            </div>
        </div>
    </div>
</body>

<?php



require_once('./Footer.php');

?>

</html>