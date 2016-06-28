<?php
include 'Conectabd.class.php';
Class Login Extends ConectaBD
{

    private $login;
    private $senha;
    private $user;
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
    public function getUser()
    {
        return $this->user;
    }

    public function setUser($user)
    {
        $this->user = $user;
    }
    public function ValidaLogin()
    {
        $pdo = parent::getBD();
        $query = $pdo->prepare("SELECT *FROM USUARIO WHERE NOME = ? AND SENHA = ?");
        $query->bindValue(1, $this->getLogin());
        $query->bindValue(2, $this->getSenha());
        $query->execute();
        if($query->rowCount()==1)
        {
            $dados = $query->fetch(PDO::FETCH_OBJ);
            if ($dados->tipo_usuario == 'A'){

                return true;
            }else if($dados->tipo_usuario == 'P'){
                return true;
            }
        }
        return false;
    }
}