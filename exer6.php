<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seleção de Esportes</title>
</head>
<body>
    <form action="dados.php" method="post">
        <label>
            <input type="checkbox" name="esportes[]" value="Futebol"> Futebol
        </label><br>
        <label>
            <input type="checkbox" name="esportes[]" value="Basquete"> Basquete
        </label><br>
        <label>
            <input type="checkbox" name="esportes[]" value="Voleibol"> Voleibol
        </label><br>
        <label>
            <input type="checkbox" name="esportes[]" value="Corrida"> Corrida
        </label><br>
        <label>
            <input type="checkbox" name="esportes[]" value="Natação"> Natação
        </label><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
