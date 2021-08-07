<?php
    include '../connection.php';
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
    <title>Cadastrar Novo Utilizador</title>
    <link rel="stylesheet" href="../css/estilo.css">
    <style>
        a{
            text-decoration: none;
            color:darkmagenta;
        }
        div>div{
            display: flex;
            flex-direction: column;
        }
        
    </style>
</head>
<body>
    <div class="forms">
        <p><a href="../index.php">Inicio</a></p>
        <p><a href="../users.php">Voltar</a></p>
    </div>
    <div>
        <form action="" method="post">
            <fieldset>
                <legend>Novo Utilizador</legend>
                <div class="center">
                    <div>
                        <label for="n">Nome</label>
                        <input type="text" name="nome" id="n">
                    </div>
                    <div>
                        <label for="e">Email</label>
                        <input type="email" name="email" id="e">
                    </div>
                    <div>
                        <label for="us">Nome de utilizador</label>
                        <input type="text" name="user" id="us">
                    </div>
                    <div>
                        <label for="p">Palavra-passe</label>
                        <input type="text" name="password" id="p">
                    </div>
                    <div>
                        <label for="pf">Perfil</label>
                        <select name="perfil" id="pf">
                            <?php
                                while($profile=$query->fetch(PDO::FETCH_ASSOC)){
                                    echo '<option value='.$profile['id'].'>'.$profile['nome'].'</option>';
                                }
                            ?>
                        </select>
                    </div>
                    <input type="submit" value="Cadastrar" style="float:right;">
                </div>
            </fieldset>
        </form>
    </div>
</body>
</html>