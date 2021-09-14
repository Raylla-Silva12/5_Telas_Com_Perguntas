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
        <form method="post" action="pergunta2.php">
            <p>Qual o nome do esquilo que mora no fundo do mar?</p>
            <input type="radio" name="resposta" value="br1"> Candy </input>
            <br>
            <input type="radio" name="resposta" value="br2"> Mandy </input>
            <br>
            <input type="radio" name="resposta" value="br3"> Sandy </input> <!-- essa -->
            <br><br>
            <input type="submit"></input>
        </form>
    </div>

    <?php
    $valor = 0;
    $sim = 0;

    if (isset($_POST['resposta'])) {
        if ($_POST['resposta'] == 'br3') {
            $valor = $sim + 1;
            header('Location: pergunta3.php');
        }
        if ($_POST['resposta'] == 'br2') {
            $valor = $sim;
            header('Location: pergunta3.php');
        }
        if ($_POST['resposta'] == 'br1') {
            $valor = $sim;
            header('Location: pergunta3.php');
        }
    }
    session_start();
    $_SESSION["br3"] = $valor;

    ?>

</body>

</html>