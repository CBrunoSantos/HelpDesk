<? 
    require_once "validador_acesso.php";
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
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="logoff.php">Sair</a>
            </li>
        </ul>
    </nav>

    <div class="container">
        <div class="row">
            <div class="card-home">
                    <div class="card">
                        <div class="card-header">
                            Menu
                        </div>
                        <div class="card-body">
                        <div class="row">
                                <div class="col-6 d-flex justify-content-center">
                                    <a href="abrir_chamado.php">
                                    <img src="css/formulario_abrir_chamado.png" alt="">
                                    </a>
                                </div>
                                <div class="col-6 d-flex justify-content-center">
                                    <a href="consultar_chamado.php">
                                    <img src="css/formulario_consultar_chamado.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>


</body>
</html>