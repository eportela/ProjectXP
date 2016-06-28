<?php

/**
 * Created by PhpStorm.
 * User: vunix
 * Date: 03/06/16
 * Time: 00:38
 */
include 'Conectabd.class.php';

class Usuario extends ConectaBD
{
    private $nome;
    private $email;
    private $senha;
    private $user;

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
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

    public function Cadastrar()
    {
        $pdo = parent::getBD();
        $verificar = $pdo->prepare("SELECT *FROM USUARIO WHERE NOME = ?");
        $verificar->bindValue(1, $this->getEmail());
        $verificar->execute();
        if ($verificar->rowCount()== 0)
        {
            $insere = $pdo->prepare("INSERT INTO USUARIO (NOME, SENHA, TIPO_USUARIO) VALUES (?,?,?)");
            $insere->bindValue(1, $this->getEmail());
            $insere->bindValue(2, $this->getSenha());
            $insere->bindValue(3, $this->getUser());
            $insere->execute();
            return true;
        } else
            return false;
    }
}
