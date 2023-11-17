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
            1 => array("LM", "Lógica Matemática", "#ffff00", 1),
            2 => array("LP", "Lógica de Programação", "#009EA4", 2),
            3 => array("ICC", "Introdução à Ciência da Computação", "#981C9A", 3),
            4 => array("EL", "Empreendedorismo e Inovação", "#981C9A", 4),
            5 => array("IPE", "Introdução à Prática Extensionista", "#0EAF60", 5),
            6 => array("FANTASMA", "oooHhhOOoooHhhHoOOo", "#FF5733", 6),
            7 => array("PBE", "Probalidade e Estatistica", "#ffff00", 7),
            8 => array("EDI", "Estrutura de Dados I", "#009EA4", 8),
            9 => array("POO", "Programação Orientada a Objetos", "#009EA4", 9),
            10 => array("CALCI", "Cálculo I", "#ffff00", 10),
            11 => array("PEI", "Práticas Extensionistas I", "#0EAF60", 11),
            12 => array("MC", "Metodologia Científica", "#981C9A", 12),
            13 => array("MD", "Matemática Discreta", "#ffff00", 13),
            14 => array("EDII", "Estrutura de Dados II", "#009EA4", 14),
            15 => array("BD", "Banco de Dados", "#CC3A3A", 15),
            16 => array("CALCII", "Cálculo II", "#ffff00", 16),
            17 => array("PEII", "Práticas Extensionistas II", "#0EAF60", 17),
            18 => array("IHC", "Interface Homem-Computador", "#009EA4", 18),
            19 => array("TG", "Teoria dos Grafos", "#009EA4", 19),
            20 => array("SD", "Sistemas Digitais", "#009EA4", 20),
            21 => array("CN", "Cálculo Numérico", "#ffff00", 21),
            22 => array("GAAL", "Geometria Analítica e Álgebra Linear", "#ffff00", 22),
            23 => array("PEIII", "Práticas Extensionistas III", "#0EAF60", 23),
            24 => array("ES", "Engenharia de Software", "#CC3A3A", 24),
            25 => array("LFA", "Linguagens Formais e Autômatos", "#009EA4", 25),
            26 => array("OC", "Organização de Computadores", "#009EA4", 26),
            27 => array("RC", "Redes de Computadores", "#009EA4", 27),
            28 => array("CG", "Computação Gráfica", "#CC3A3A", 28),
            29 => array("PS", "Projeto de Sistemas", "#CC3A3A", 29),
            30 => array("DWB", "Desenvolvimento Web-Mobile", "#CC3A3A", 30),
            31 => array("TC", "Teoria da Computação", "#009EA4", 31),
            32 => array("IA", "Inteligência Artificial", "#CC3A3A", 32),
            33 => array("PO", "Pesquisa Operacional", "#CC3A3A", 33),
            34 => array("PI", "Processamento de Imagens", "#CC3A3A", 34),
            35 => array("ES", "Estágio Supervisionado", "#981C9A", 35),
            36 => array("PAA", "Projeto e Análise de Algoritmos", "#009EA4", 36),
            37 => array("OPTI", "Optativa I", "#FFFFFF", 37),
            38 => array("SD", "Sistemas Distribuídos", "#CC3A3A", 38),
            39 => array("CO", "Compiladores", "#CC3A3A", 39),
            40 => array("SAS", "Segurança e Auditoria de Sistemas", "#CC3A3A", 40),
            41 => array("PGI", "Projeto de Graduação I", "#981C9A", 41),
            42 => array("SO", "Sistemas Operacionais", "#009EA4", 42),
            43 => array("OPTII", "Optativa II", "#FFFFFF", 43),
            44 => array("OPTIII", "Optativa III", "#FFFFFF", 44),
            45 => array("OPTIV", "Optativa IV", "#FFFFFF", 45),
            46 => array("OPTV", "Optativa V", "#FFFFFF", 46),
            47 => array("PGII", "Projeto de Graduação II", "#981C9A", 47),
            48 => array("GPS", "Gestão de Projetos e Serviços", "#CC3A3A", 48),
        );

        for ($i = 1; $i <= 8; $i++) {
            echo "<tr>";
            echo "<td>$i</td>";
            for ($j = 1; $j <= ($i == 1 ? 5 : 6); $j++) {
                $button = $buttonInfo[($i - 1) * 6 + $j];
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
    var preRequisitos = {
        1 : 0,
        2 : 0,
        3 : 0,
        4 : 0,
        5 : 0,
        6 : 0,
        7 : 0,
        8 : 0,
        8 : 2,
        9 : 2,
        10 : 0,
        11 : 5,
        12 : 0,
        13 : 0,
        14 : 8,
        15 : 8,
        16 : 10,
        17 : 5,
        18 : 0,
        19 : 0,
        20 : 1,
        21 : 10,
        22 : 0,
        23 : 5,
        24 : 0,
        25 : 13,
        26 : 20,
        27 : 0,
        28 : 22,
        29 : 0,
        30 : 0,
        31 : 25,
        32 : 0,
        33 : 22,
        34 : 0,
        35 : 29,
        36 : 0,
        37 : 0,
        38 : 0,
        39 : 0,
        40 : 0,
        41 : 0,
        42 : 0,
        43 : 0,
        44 : 0,
        45 : 0,
        46 : 0,
        47 : 41,
        48 : 0,
    };

    var preRequisitosBackup = {
        1 : 0,
        2 : 0,
        3 : 0,
        4 : 0,
        5 : 0,
        6 : 0,
        7 : 0,
        8 : 0,
        8 : 2,
        9 : 2,
        10 : 0,
        11 : 5,
        12 : 0,
        13 : 0,
        14 : 8,
        15 : 8,
        16 : 10,
        17 : 5,
        18 : 0,
        19 : 0,
        20 : 1,
        21 : 10,
        22 : 0,
        23 : 5,
        24 : 0,
        25 : 13,
        26 : 20,
        27 : 0,
        28 : 22,
        29 : 0,
        30 : 0,
        31 : 25,
        32 : 0,
        33 : 22,
        34 : 0,
        35 : 29,
        36 : 0,
        37 : 0,
        38 : 0,
        39 : 0,
        40 : 0,
        41 : 0,
        42 : 0,
        43 : 0,
        44 : 0,
        45 : 0,
        46 : 0,
        47 : 41,
        48 : 0,
    };

    
    const buttons = document.querySelectorAll('.color-button');
    console.log(buttons);
    buttons.forEach(button => {
        button.addEventListener('click', () => {
            const info = button.dataset.info.split(",");
            const id = info[3];
            if(preRequisitos[id] == 0){
                const isBlack = button.style.backgroundColor === 'black';
                if(isBlack){
                    preRequisitos[id] = preRequisitosBackup[id];
                    button.style.backgroundColor = button.dataset.info.split(",")[2];
                }else{
                    button.style.backgroundColor = 'black';
                }
                
                for(i = 1; i<=48; i++){
                    if(preRequisitos[i] != 29){
                        if(preRequisitos[i] == id){
                            preRequisitos[i] = 0;
                        }
                    }else{
                        preRequisitos[i] = 30;
                    }
                    
                }
                
                const code = info[0];
                const description = info[1];
                const color = isBlack ? '' : info[2];

                console.log(`Código: ${code}, Descrição: ${description}, Cor: ${color}, Pre-Requisito: ${preRequisitos[id]}`);
            }else{
                var a = 1;
                if(preRequisitos[id]>=6){
                    a = 2;
                }
                var name = buttons[preRequisitos[id] - a].dataset.info.split(",");
                alert(`Para marcar este botão,\n você deve marcar seu pré requisito: {\n ${name[1]}, \n}`)
                console.log(name[1]);
            }
        });
    });
</script>

</body>
</html>
