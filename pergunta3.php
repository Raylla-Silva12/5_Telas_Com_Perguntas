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
        <form method="post" action="pergunta3.php">
            <p>Quem é o ser mais "pão duro" da fenda do biquíni?</p>
            <input type="radio" name="resposta" value="cr1"> Sirigueijo </input><!-- essa -->
            <br>
            <input type="radio" name="resposta" value="cr2"> Patrick </input>
            <br>
            <input type="radio" name="resposta" value="cr3"> Pérola </input>
            <br><br>
            <input type="submit"></input>
        </form>
    </div>

    <?php
    $valor = 0;
    $sim = 0;

    if (isset($_POST['resposta'])) {
        if ($_POST['resposta'] == 'cr1') {
            $valor = $sim + 1;
            header('Location: pergunta4.php');
        }
        if ($_POST['resposta'] == 'cr2') {
            $valor = $sim;
            header('Location: pergunta4.php');
        }
        if ($_POST['resposta'] == 'cr3') {
            $valor = $sim;
            header('Location: pergunta4.php');
        }
    }
    session_start();
    $_SESSION["cr1"] = $valor;

    ?>

</body>

</html>