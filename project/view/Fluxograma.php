<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Color Buttons</title>
</head>
<?php
    include "./utils/header.html";
?>
<body>
<div class="return-button">
    <a href="./Home.php"><img src="./img/return.png" class="return-img"></a>
</div>
<div class="container">
    <table class="table-flux" id="table">
        <?php
        $buttonInfo = array(
            1 => array("LM", "Lógica Matemática", "#FF5733", array(), 0),
            2 => array("LP", "Lógica de Programação", "#33FF57", array(), 0),
            3 => array("ICC", "Introdução à Ciência da Computação", "#5733FF", array(), 0),
            4 => array("EL", "Empreendedorismo e Inovação", "#FF5733", array(), 0),
            5 => array("IPE", "Introdução à Prática Extensionista", "#33FF57", array(), 0),
            6 => array("FANTASMA", "oooHhhOOoooHhhHoOOo", "#FF5733", array(), 0),
            7 => array("PBE", "Probalidade e Estatistica", "#FF5733", array(), 0),
            8 => array("EDI", "Estrutura de Dados I", "#CCCCCC", array(2), 0),
            9 => array("POO", "Programação Orientada a Objetos", "#CCCCCC", array(2), 0),
            10 => array("CALCI", "Cálculo I", "#CCCCCC", array(), 0),
            11 => array("PEI", "Práticas Extensionistas I", "#CCCCCC", array(5), 0),
            12 => array("MC", "Metodologia Científica", "#CCCCCC", array(), 0),
            13 => array("MD", "Matemática Discreta", "#CCCCCC", array(), 0),
            14 => array("EDII", "Estrutura de Dados II", "#CCCCCC", array(8), 0),
            15 => array("BD", "Banco de Dados", "#CCCCCC", array(8), 0),
            16 => array("CALCII", "Cálculo II", "#CCCCCC", array(10), 0),
            17 => array("PEII", "Práticas Extensionistas II", "#CCCCCC", array(5), 0),
            18 => array("IHC", "Interface Homem-Computador", "#CCCCCC", array(), 0),
            19 => array("TG", "Teoria dos Grafos", "#CCCCCC", array(), 0),
            20 => array("SD", "Sistemas Digitais", "#CCCCCC", array(1), 0),
            21 => array("CN", "Cálculo Numérico", "#CCCCCC", array(10), 0),
            22 => array("GAAL", "Geometria Analítica e Álgebra Linear", "#CCCCCC", array(), 0),
            23 => array("PEIII", "Práticas Extensionistas III", "#CCCCCC", array(5), 0),
            24 => array("ES", "Engenharia de Software", "#CCCCCC", array(), 0),
            25 => array("LFA", "Linguagens Formais e Autômatos", "#CCCCCC", array(13), 0),
            26 => array("OC", "Organização de Computadores", "#CCCCCC", array(20), 0),
            27 => array("RC", "Redes de Computadores", "#CCCCCC", array(), 0),
            28 => array("CG", "Computação Gráfica", "#CCCCCC", array(22), 0),
            29 => array("PS", "Progeto de Sistemas", "#CCCCCC", array(), 0),
            30 => array("DWB", "Desenvolvimento Web-Mobile", "#CCCCCC", array(), 0),
            31 => array("TC", "Teoria da Computação", "#CCCCCC", array(25), 0),
            32 => array("IA", "Inteligência Artificial", "#CCCCCC", array(), 0),
            33 => array("PO", "Pesquisa Operacional", "#CCCCCC", array(22), 0),
            34 => array("PI", "Processamento de Imagens", "#CCCCCC", array(), 0),
            35 => array("ES", "Estágio Supervisionado", "#CCCCCC", array(29,30), 0),
            36 => array("PAA", "Projeto e Análise de Algoritmos", "#CCCCCC", array(), 0),
            37 => array("OPTI", "Optativa I", "#CCCCCC", array(), 0),
            38 => array("SD", "Sistemas Distribuídos", "#CCCCCC", array(), 0),
            39 => array("CO", "Compiladores", "#CCCCCC", array(), 0),
            40 => array("SAS", "Segurança e Auditoria de Sistemas", "#CCCCCC", array(), 0),
            41 => array("PGI", "Projeto de Graduação I", "#CCCCCC", array(), 0),
            42 => array("SO", "Sistemas Operacionais", "#CCCCCC", array(), 0),
            43 => array("OPTII", "Optativa II", "#CCCCCC", array(), 0),
            44 => array("OPTIII", "Optativa III", "#CCCCCC", array(), 0),
            45 => array("OPTIV", "Optativa IV", "#CCCCCC", array(), 0),
            46 => array("OPTV", "Optativa V", "#CCCCCC", array(), 0),
            47 => array("PGII", "Projeto de Graduação II", "#CCCCCC", array(41), 0),
            48 => array("GPS", "Gestão de Projetos e Serviços", "#CCCCCC", array(), 0),
        );

        for ($i = 1; $i <= 8; $i++) {
            echo "<tr>";
            echo "<td>$i</td>";
            for ($j = 1; $j <= ($i == 1 ? 5 : 6); $j++) {
                $button = array_slice($buttonInfo[($i - 1) * 6 + $j], 0, 3);
                $buttonText = $button[0] . " - " . $button[1];
                $buttonColor = $button[2];
                echo "<td class='dado-flux'><button class='color-button' data-row='$i' data-info='" . implode(",", $button) . "' style='background-color: $buttonColor;'>$buttonText</button></td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</div>

<script>
    const buttons = document.querySelectorAll('.color-button');

    buttons.forEach(button => {
        button.addEventListener('click', () => {
            const isBlack = button.style.backgroundColor === 'black';
            button.style.backgroundColor = isBlack ? button.dataset.info.split(",")[2] : 'black';

            const info = button.dataset.info.split(",");
            const code = info[0];
            const description = info[1];
            const color = isBlack ? '' : info[2];

            console.log(`Código: ${code}, Descrição: ${description}, Cor: ${color}`);
        });
    });
</script>

</body>
</html>
