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
        $inst = new Usuario();
        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_MAGIC_QUOTES);
        $pass = filter_input(INPUT_POST, "pass", FILTER_SANITIZE_MAGIC_QUOTES);
        $inst->setEmail($email);
        $inst->setSenha($pass);
        $inst->Cadastrar();
    }
?>
<html>
 <head>
 </head>
 <body>
<form action="" method="post">
<!-- DADOS DE LOGIN -->
    <fieldset>
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
                <input type="password" name="pass">
            </td>
        </tr>
    </fieldset>
    <br />
    <input type="submit" value="Entrar" name="entrar">
    </form>
 </body>
</html>
