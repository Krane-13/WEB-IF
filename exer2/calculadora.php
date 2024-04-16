<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method = "GET" action= "verific.php">
        <fieldset>
            Número 1:<input type="number" name="num1"><br>
            Número 2:<input type="number" name="num2"><br>
            <select name="operacao">
                <option value="som" name="som">Soma</option>
                <option value="sub" selected>Subtração</option>
                <option value="mul">Multiplicação</option>
                <option value="div">Divição</option>
            </select>
            <input type="submit" Valor="resultado">
        </fieldset>
    </form>
</body>
</html>