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

    public function Cadastrar()
    {
        $pdo = parent::getBD();
        $insere = $pdo->prepare("INSERT INTO CADASTRO (EMAIL,SENHA) VALUES (?,?)");
        $insere->bindValue(1, $this->getEmail());
        $insere->bindValue(2, $this->getSenha());
        $insere->execute();
        if($insere)
            echo "Cadastrado";
        else
            echo "Erro ao cadastrar";
    }
}
