<?php
/**
 * Created by PhpStorm.
 * User: vunix
 * Date: 04/06/16
 * Time: 13:28
 *
 */
    include '../DAO/Usuario.class.php';
    if(isset($_POST['entrar']))
    {
        $tipo_usuario = 'p';
        $inst = new Usuario();
        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_MAGIC_QUOTES);
        $pass = filter_input(INPUT_POST, "pass", FILTER_SANITIZE_MAGIC_QUOTES);
        $inst->setEmail($email);
        $inst->setSenha($pass);
        $inst->setUser($tipo_usuario);
        if($inst->Cadastrar())
        {
            echo 'Cadastrado com sucesso!';
            $_SESSION['login'] = $email;
            $_SESSION['senha'] = $pass;
            header("Location:professor.php");
        }else
           echo "Já um usuário com este email. Por favor, informe um outro email";
    }
?>

<html>
 <head>
 </head>
 <body>
<form action="" method="post">
<!-- DADOS DE LOGIN -->
    <fieldset>
        <a href="index.php">Ir para início</a>
        <legend>Dados de login</legend>
        <table cellspacing="10">
        <tr>
            <td>
                <label for="email">E-mail: </label>
            </td>
            <td align="left">
                <input type="text" name="email">
            </td>
        </tr>
         <tr>
            <td>
                <label for="pass">Senha: </label>
            </td>
             <td align="left">
                <input type="password" name="pass" <a href="index.php"></a>
            </td>
        </tr>
    </fieldset>
    <br/>
    <input type="submit" value="Entrar" name="entrar">
    </form>
 </body>
</html>
