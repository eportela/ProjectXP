<?php
include '../DAO/Login.class.php';
session_start();
if (isset($_POST['entrar'])) {
    $login = filter_input(INPUT_POST, "login", FILTER_SANITIZE_MAGIC_QUOTES);
    $senha = filter_input(INPUT_POST, "senha", FILTER_SANITIZE_MAGIC_QUOTES);
    $setar = new Login();
    $setar->setLogin($login);
    $setar->setSenha($senha);
    if ($setar->ValidaLogin()) {
        //echo "caiu";
        header("Location:professor.php");
    }else
        echo 'usuário e senha inválidos!';
}
?>

<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet"
          type="text/css">
    <link href="entrarcss" rel="stylesheet" type="text/css">
</head>
<body>
<div class="navbar navbar-default navbar-inverse navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navbar-ex-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="index.php"><b>Início</b></a>
                </li>
                <li>
                    <a href="entrar"><b>Entrar</b><i class="fa fa-fw fa-sign-in"></i></a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="cover">
    <div class="cover-image" style="background-image : url('../IMAGENS/study-with-books.jpg')"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center">
                <h1>XP</h1>
                <p>Conheça um pouco mais sobre o nosso trabalho!</p>
                <br>
                <br>
                <a class="btn btn-lg btn-primary">Clique aqui</a>
            </div>
            <br>
            <br>
            <div class="col-md-6">
                <form class="form-horizontal" method="post" role="form">
                    <div class="form-group">
                        <div class="col-sm-2">
                            <label for="inputEmail3" class="control-label">Email</label>
                        </div>
                        <div class="col-sm-10">
                            <input type="email" name="login" class="form-control" id="inputEmail3" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-2">
                            <label for="inputPassword3" class="control-label">Password</label>
                        </div>
                        <div class="col-sm-10">
                            <input type="password" name="senha" class="form-control" id="inputPassword3"
                                   placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox">Remember me</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" name="entrar" class="btn btn-info">Sign in</button>
                        </div>
                    </div>
                </form>
                <?php echo isset($error) ? "Usuário ou senha inválidos!" : '' ?>
            </div>
        </div>
    </div>
</div>


</body>
</html>