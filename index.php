
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

    <div class="index container">
        <div class="row">
            <div class="card-login">
                <div class="card">
                    <div class="card-header">
                        Login
                    </div>
                    <img src="css/perfil.png">
                    <div class="card-body">
                        <form action="valida_login.php" method="post">
                        <div class="form-group">
                            <input name="email" type="email" class="form-control" placeholder="E-mail">
                        </div>
                        <div class="form-group">
                            <input name="senha" type="password" class="form-control" placeholder="Senha">
                        </div>
                        <? if(isset($_GET['login']) && $_GET['login'] == 'erro'){ ?>
                        <div class="text-danger">
                            Usuario ou senha inválido(s);
                        </div>
                        <? } ?>
                        <? if(isset($_GET['login']) && $_GET['login'] == 'erro2'){ ?>
                        <div class="text-danger">
                            Não é possivel acessar sem antes fazer login;
                        </div>
                        <? } ?>
                        <button class="btn btn-lg btn-info btn-block" type="submit">Entrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>
</html>