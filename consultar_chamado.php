<? require_once "validador_acesso.php"?>
<?php 
    // print_r($_SESSION);
    $chamados = array();
    $arquivo = fopen('../../../xampp/help_desk/arquivo.hd', 'r'); 
    while(!feof($arquivo) ){
        $registro = fgets($arquivo);
        $chamados[] = $registro;
    }
    fclose($arquivo);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Help Desk</title>
    <link rel="icon" href="css/logo.png">
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <a href="#" class="navbar-brand">
            <img src="css/logo.png" class="d-inline-block align-top"> Help Desk
        </a>
    </nav>

    <div class="container">
        <div class="row">
            <div class="card-consultar-chamado">
                <div class="card">
                    <div class="card-header">
                        Consulta de Chamada
                    </div>
                    <div class="card-consulta">

                        <? foreach($chamados as  $chamado){ ?>
                            <?php 
                                $chamado_dados = explode('-', $chamado);

                                if($_SESSION['perfil_id'] == 2){
                                    if($_SESSION['id'] != $chamado_dados[0]){
                                        continue;
                                    }
                                }

                                if(count($chamado_dados) < 3){
                                    continue;
                                }
                            ?>

                        <div class="card mb-3 bg-light">
                            <div class="card-consulta">
                                <h5 class="card-tittle"><?= $chamado_dados[1]?></h5>
                                <h6 class="card-subtitle mb-2 text-muted"><?= $chamado_dados[2]?></h6>
                                <p class="card-text"><?= $chamado_dados[3]?></p>
                            </div>
                        </div>

                        <? } ?>
                        <div class="row mt-5">
                            <div class="col-6">
                            <a class="btn btn-lg btn-warning btn-block" href="home.php">Voltar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>
</html>