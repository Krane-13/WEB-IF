<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modalidades Selecionadas</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["esportes"])) {
            $modalidadesSelecionadas = $_POST["esportes"];
            echo "<h2>Modalidades Selecionadas:</h2>";
            echo "<ul>";
            foreach ($modalidadesSelecionadas as $modalidade) {
                echo "<li>$modalidade</li>";
            }
            echo "</ul>";
        } else {
            echo "<p>Nenhuma modalidade selecionada.</p>";
        }
    }
    ?>
</body>
</html>
