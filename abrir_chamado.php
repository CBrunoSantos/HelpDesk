<? require_once "validador_acesso.php"?>

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
        <div class="card-abrir-chamado">
                <div class="card">
                    <div class="card-header">
                        Abertura de chamado
                    </div>
                    <div class="chamado">
                        <div class="row">
                            <div class="col">
                                <form method="post" action="registra_chamado.php">
                                    <div class="form-group">
                                        <label >Titulo</label>
                                        <input name="titulo" type="text" class="form-control" placeholder="Titulo">
                                    </div>
                                    <div class="form-group">
                                        <label>Categoria</label>
                                        <select name="categoria" class="form-control">
                                            <option>Criação Usuário</option>
                                            <option>impressora</option>
                                            <option>Hardware</option>
                                            <option>Software</option>
                                            <option>Rede</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Descrição</label>
                                        <textarea name="descricao" class="form-control" rows="3"></textarea>
                                    </div>
                                    <div class="row mt-5">
                                        <div class="col-6">
                                            <a class="btn btn-lg btn-warning btn-block" href="home.php">Voltar</a>
                                        </div>
                                        <div class="col-6">
                                            <button class="btn btn-lg btn-info btn-block" type="submit">Abrir</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>
</html>