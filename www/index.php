<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste PHP</title>
</head>
<body>  
    <form method="post">
        <input type="text" name="nome">
        <input type="submit" name="submit" value="enviar">
    </form>

    <?php         
            $nome = $_POST['nome'];

            if($nome)
            echo "Olá $nome, tudo bem?";
    ?>
</body>
</html>