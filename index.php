<?php
    require 'connection.php';
    $sel = 'select * from perfil';
    $query = $pdo->prepare($sel);
    $query -> execute();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="./css/estilo.css">
</head>
<body>
    <div class="forms">
        <p><a href="./forms/new-profile.php">Novo Perfil</a></p>
        <p><a href="./forms/new-activity.php">Nova Actividade</a></p>
    </div>
    <div>
        <div class="center">
            <h2>Perfis</h2>
            <ol>
                <?php
                    while($perfil=$query->fetch(PDO::FETCH_ASSOC)){
                        echo '<li><a href="./activity.php?name='.$perfil['nome'].'&id='.$perfil['id']
                        .'">'.$perfil['nome'].'</a></li>';
                    }
                ?>
                <li><a href="./users.php">Utilizadores</a></li>
            </ol>
        </div>
    </div>
    
</body>
</html>