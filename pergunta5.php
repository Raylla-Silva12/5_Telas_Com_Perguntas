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
        <form method="post" action="pergunta5.php">
            <p>O desenho Bob Espoja possui quantas temporadas?</p>
            <input type="radio" name="resposta" value="er1"> 11 </input>
            <br>
            <input type="radio" name="resposta" value="er2"> 12 </input>
            <br>
            <input type="radio" name="resposta" value="er3"> 13 </input> <!-- essa -->
            <br><br>
            <input type="submit"></input>
        </form>
    </div>

    <?php
    $valor = 0;
    $sim = 0;

    if (isset($_POST['resposta'])) {
        if ($_POST['resposta'] == 'er3') {
            $valor = $sim + 1;
            header('Location: pontuacao.php');
        }
        if ($_POST['resposta'] == 'er2') {
            $valor = $sim;
            header('Location: pontuacao.php');
        }
        if ($_POST['resposta'] == 'er1') {
            $valor = $sim;
            header('Location: pontuacao.php');
        }
    }
    session_start();
    $_SESSION["er3"] = $valor;

    ?>

</body>

</html>