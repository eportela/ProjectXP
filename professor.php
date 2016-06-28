<?php

include '../DAO/Professor.class.php';
    if (isset($_GET['btnGo']))
    {
        $pesquisa = filter_input(INPUT_GET, "pesquisa", FILTER_SANITIZE_MAGIC_QUOTES);
        $enviar = new Professor();
        $enviar->setTextoPesquisa($pesquisa);
        if ($enviar->Pesquisa())
            echo "Encontrou";
        else
            echo "Nenhum resultado";
        }else{
        //unset($_SESSION['login']);
        //session_destroy();
        header("Locale:index.php");
}
?>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
        <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="professor_css" rel="stylesheet" type="text/css">
  </head>
<body>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <form role="form" method="get">
              <div class="form-group">
                <div class="input-group">
                  <input type="text" name="pesquisa" class="form-control" placeholder="Deseja enviar uma mensagem para o seu professor? Digite aqui o email! ;D">
                  <span class="input-group-btn">
                    <button type="submit" name="btnGo" class="btn btn-success">Go</button>
                  </span>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title">XP</h3>
              </div>
              <div class="panel-body">
                <p></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <a class="btn btn-primary" name="criar" href="#" id="addGrupo">Criar Grupo</a>
          </div>
        </div>
      </div>
    </div>
</body>
</html>