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
        <form method="post" action="pergunta4.php">
            <p>Quantos filmes baseados na série de desenho Bob Esponja existem?</p>
            <input type="radio" name="resposta" value="dr1"> 2 </input>
            <br>
            <input type="radio" name="resposta" value="dr2"> 3 </input><!-- essa -->
            <br>
            <input type="radio" name="resposta" value="dr3"> 4 </input>
            <br><br>
            <input type="submit"></input>
        </form>
    </div>

    <?php
    $valor = 0;
    $sim = 0;

    if (isset($_POST['resposta'])) {
        if ($_POST['resposta'] == 'dr2') {
            $valor = $sim + 1;
            header('Location: pergunta5.php');
        }
        if ($_POST['resposta'] == 'dr3') {
            $valor = $sim;
            header('Location: pergunta5.php');
        }
        if ($_POST['resposta'] == 'dr1') {
            $valor = $sim;
            header('Location: pergunta5.php');
        }
    }
    session_start();
    $_SESSION["dr2"] = $valor;

    ?>

</body>

</html>