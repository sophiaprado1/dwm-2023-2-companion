<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Color Buttons</title>
    <style>
        .container {
            margin: 20px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }

        .color-button {
            padding: 5px;
            margin: 2px;
            cursor: pointer;
        }
    </style>
</head>
<body>

<div class="container">
    <table id="table">
        <tr>
            <th>Periodos</th>
            <th>Materias</th>
        </tr>
        <?php
        $buttonInfo = array(
            1 => array("LM", "Lógica Matemática", "#FF5733"),
            2 => array("LP", "Lógica de Programação", "#33FF57"),
            3 => array("ICC", "Introdução à Ciência da Computação", "#5733FF"),
            4 => array("EL", "Empreendedorismo e Inovação", "#FF5733"),
            5 => array("IPE", "Introdução à Prática Extensionista", "#33FF57"),
            6 => array("FANTASMA", "oooHhhOOoooHhhHoOOo", "#FF5733"),
            7 => array("PBE", "Probalidade e Estatistica", "#FF5733"),
            8 => array("PH8", "Placeholder 8", "#CCCCCC"),
            9 => array("PH9", "Placeholder 9", "#CCCCCC"),
            10 => array("PH10", "Placeholder 10", "#CCCCCC"),
            11 => array("PH11", "Placeholder 11", "#CCCCCC"),
            12 => array("PH12", "Placeholder 12", "#CCCCCC"),
            13 => array("PH13", "Placeholder 13", "#CCCCCC"),
            14 => array("PH14", "Placeholder 14", "#CCCCCC"),
            15 => array("PH15", "Placeholder 15", "#CCCCCC"),
            16 => array("PH16", "Placeholder 16", "#CCCCCC"),
            17 => array("PH17", "Placeholder 17", "#CCCCCC"),
            18 => array("PH18", "Placeholder 18", "#CCCCCC"),
            19 => array("PH19", "Placeholder 19", "#CCCCCC"),
            20 => array("PH20", "Placeholder 20", "#CCCCCC"),
            21 => array("PH21", "Placeholder 21", "#CCCCCC"),
            22 => array("PH22", "Placeholder 22", "#CCCCCC"),
            23 => array("PH23", "Placeholder 23", "#CCCCCC"),
            24 => array("PH24", "Placeholder 24", "#CCCCCC"),
            25 => array("PH25", "Placeholder 25", "#CCCCCC"),
            26 => array("PH26", "Placeholder 26", "#CCCCCC"),
            27 => array("PH27", "Placeholder 27", "#CCCCCC"),
            28 => array("PH28", "Placeholder 28", "#CCCCCC"),
            29 => array("PH29", "Placeholder 29", "#CCCCCC"),
            30 => array("PH30", "Placeholder 30", "#CCCCCC"),
            31 => array("PH31", "Placeholder 31", "#CCCCCC"),
            32 => array("PH32", "Placeholder 32", "#CCCCCC"),
            33 => array("PH33", "Placeholder 33", "#CCCCCC"),
            34 => array("PH34", "Placeholder 34", "#CCCCCC"),
            35 => array("PH35", "Placeholder 35", "#CCCCCC"),
            36 => array("PH36", "Placeholder 36", "#CCCCCC"),
            37 => array("PH37", "Placeholder 37", "#CCCCCC"),
            38 => array("PH38", "Placeholder 38", "#CCCCCC"),
            39 => array("PH39", "Placeholder 39", "#CCCCCC"),
            40 => array("PH40", "Placeholder 40", "#CCCCCC"),
            41 => array("PH41", "Placeholder 41", "#CCCCCC"),
            42 => array("PH42", "Placeholder 42", "#CCCCCC"),
            43 => array("PH43", "Placeholder 43", "#CCCCCC"),
            44 => array("PH44", "Placeholder 44", "#CCCCCC"),
            45 => array("PH45", "Placeholder 45", "#CCCCCC"),
            46 => array("PH46", "Placeholder 46", "#CCCCCC"),
            47 => array("PH47", "Placeholder 47", "#CCCCCC"),
            48 => array("PH47", "Placeholder 47", "#CCCCCC"),
        );

        for ($i = 1; $i <= 8; $i++) {
            echo "<tr>";
            echo "<td>$i</td>";
            echo "<td>";
            for ($j = 1; $j <= ($i == 1 ? 5 : 6); $j++) {
                $button = $buttonInfo[($i - 1) * 6 + $j];
                $buttonText = $button[0] . " - " . $button[1];
                $buttonColor = $button[2];
                echo "<button class='color-button' data-row='$i' data-info='" . implode(",", $button) . "' style='background-color: $buttonColor;'>$buttonText</button>";
            }
            echo "</td>";
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
