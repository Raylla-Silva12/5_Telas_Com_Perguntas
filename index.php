<!--Faça um jogo de perguntas e respostas com 7 telas.
    Na primeira o usuário coloca o nome;
    Da segunda a sexta ele responde 5 perguntas alternativas (uma para cada tela);
    Na setima tela aparece a pontuação, o nome do jogador e um link pra recomeçar o jogo-->

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>PW</title>
</head>

<body>
    <div class="container">
        <form method="post" action="index.php">
            <input type="text" name="name">
            <br><br>
            <input type="submit"></input>
        </form>
    </div>

    <?php
    session_start();

    if (isset($_POST['name'])) {
        $_SESSION["name"] = $_POST["name"];
        header('Location: pergunta1.php');
    }

    ?>

</body>

</html>