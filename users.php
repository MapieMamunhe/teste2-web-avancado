<?php
    require 'connection.php';
    $sel = 'select u.nome '."'user'".', p.nome '."'profile'".' from utilizador u join perfil p on u.perfil=p.id';
    $query = $pdo->prepare($sel);
    $query->execute();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Utilizadores</title>
    <link rel="stylesheet" href="./css/estilo.css">
</head>
<body>
    <div class="forms">
        <p><a href="./index.php">Voltar</a></p>
        <p><a href="./forms/new-user.php">Novo utilizador</a></p>
    </div>
    <div>
        <h2>Utilizadores</h2>
    </div>
    <div>
        <div class="center">
            <ol>
                <h3>Perfil: Utilizador</h3>
                <?php
                    while($user=$query->fetch(PDO::FETCH_ASSOC)){
                            echo '<li>'.$user['profile'].': '.$user['user'].'</li>';
                    } 
                ?>
            </ol>
        </div>
    </div>
</body>
</html>