<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input:invalid{
            background-color:red;
        }
    </style>
</head>
<body>
    <form>
        <Fieldset>
            <legend>
                exemplo de input do html
            </legend>
            Text:<input type ="text">
            Quais destes serviços de strreaming você utiliza?(checkbox)
            <div>
                <input type="checkbox">
                <label for="netflix">Netflix</label>
            </div>
            <div>
                <input type="checkbox">
                <label for="amazon">Amazon Prime</label>
            </div>
            <div>
                <input type="checkbox">
                <label for="deezer">Deezer</label>
            </div>
            <div>
                <input type="checkbox">
                <label for="spotify">Spotify</label>
            </div>
            Para qual time você torce? (radio) <br>
            <input type="radio">Caxias
            <input type="radio">Grêmio
            <input type="radio">Internacional
            <input type="radio">Juventude

            que dia é hoje?<br>
            data: <input type="date"> <br>

            E-mail<input type="email"> <br>

            Qual sua cor favorita <input type="color"> <br>

            escolha um número:
            number <input type="number"> <br>

            que numero você calça?
            Range? <input type="range"  value="38" min="30" max="52" oninput="this.nextElementSibling.value=this.value">
            <output>38</output> <br>

            Qual seu telefon?
            Tel <input type="tel" maxlength="15" placeholder="(51) 9 1234 5678"> <br>

            que horas são? <input type="time"> <br>

            Qual é o seu instagram? (URL)
            <input type="url"> <br>

            O que procura: <input type="search"> <br>

            Envie sua foto (file)
            <input type="file" accept="imagem/jpeg">
        </Fieldset>
    </form>
</body>
</html>