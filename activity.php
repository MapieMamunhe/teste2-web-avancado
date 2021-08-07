<?php
    require 'connection.php';
    $data = $_GET;
    $sel = 'select * from permissoes p join actividade a on p.actividade = a.id where p.perfil = :id';
    $consult=$pdo->prepare($sel);
    $consult->execute(["id"=>$data['id']]);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividades</title>
    <link rel="stylesheet" href="./css/style-act.css">
    <link rel="stylesheet" href="./css/estilo.css">
</head>
<body>
    <p><a href="./index.php">Voltar</a></p>
    <div>
        <h2>Actividades do <?=$data['name']?></h2>
    </div>
    <div>
        <div class="center">
            <ol>
                <?php
                    while($act=$consult->fetch(PDO::FETCH_ASSOC)){
                        echo '<li>'.$act['permissao'].'</li>';
                    }
                ?>
            </ol>
        </div>
    </div>
</body>
</html>