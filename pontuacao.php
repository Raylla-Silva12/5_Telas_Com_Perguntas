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

        <?php
        session_start();

        $pontos = $_SESSION["ar1"] + $_SESSION["br3"] + $_SESSION["cr1"] + $_SESSION["dr2"] + $_SESSION["er3"];

        echo "Nome: " . $_SESSION["name"] . "<br>" . "Pontuação: " . $pontos . "/5";
        ?>

        <a href="pergunta1.php"><input type="submit" value="Refazer"></input></a>

    </div>

</body>

</html>