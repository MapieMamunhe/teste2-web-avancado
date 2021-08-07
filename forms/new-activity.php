<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Nova Actividade</title>
    <link rel="stylesheet" href="../css/style-new-act.css">
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
    <div>
        <h2><a href="../index.php">Inicio</a></h2>
    </div>
    <div>
    <form action="" method="post">
        <fieldset>
            <legend>Nova Actividade</legend>
            <div class="center">
            <div>
                <label for="p">Permissao</label>
                <input type="text" name="permissao" id="p" maxlength="50">
            </div>
            <div>
                <label for="d">Descricao</label>
                <input type="text" name="descricacao" id="d">
            </div>
            <input type="submit" value="Cadastrar">
            </div>
        </fieldset>
    </form>
    </div>
    
</body>
</html>