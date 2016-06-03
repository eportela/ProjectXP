<?php

include 'Conectabd.class.php';

Class Login Extends ConectaBD
{

    private $login;
    private $senha;

    public function getLogin()
    {
        return $this->login;
    }

    public function setLogin($login)
    {
        $this->login = $login;
    }

    public function getSenha()
    {
        return $this->senha;
    }

    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    public function ValidaLogin()
    {
        $pdo = parent::getBD();
        $logar = $pdo->prepare("SELECT *FROM login WHERE nome= ? AND senha = ?");
        $logar->bindValue(1, $this->getLogin());
        $logar->bindValue(2, $this->getSenha());
        $logar->execute();
        if ($logar->rowCount()== 1)
            return true;
        else
            return false;
    }
}