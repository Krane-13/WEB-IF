<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method = "GET" action="processa_mensagem.php">
        <fieldset>
            <legend>
                Formulario para contato
            </legend>
            Nome Completo: <input type="text" name="nome"> <br>

            Data de Nascimento: <input type="date" name="nasc"> <br>

            CPF: <input type="text" maxlength="14"  name="cpf"> <br>

            Telefone: <input type="tel" maxlength="15" placeholder="(51) 9 1234 5678" name="fone"> <br>

            E-mail: <input type="email" name="email"> <br>

            Sexo: <input type="checkbox" name="sexo">Masculino
            <input type="checkbox" name="sexo">Feminino <br>

            Horario para entrar em contato: <input type="time"> <br>

            Dia da semana para entrar em contato:
            <input type="checkbox" name="seg">Segunda
            <input type="checkbox" name="ter">Terça
            <input type="checkbox" name="qua">Quarta
            <input type="checkbox" name="qui">Quinta
            <input type="checkbox" name="sex">Sexta <br>

            Campo para Mensagem:<br><textarea cols="50" rows="5" name="mensagem"></textarea> <br>
            <button>Enviar</button>

        </fieldset>
    </form>
</body>

</html>