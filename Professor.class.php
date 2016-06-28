<?php
    include '../DAO/Conectabd.class.php';
    Class Professor extends ConectaBD
    {
        private $textoPesquisa;
        private $grupo;

        public function getGrupo()
        {
            return $this->grupo;
        }

        public function setGrupo($grupo)
        {
            $this->grupo = $grupo;
        }

        public function getTipoUsuario()
        {
            return $this->tipo_usuario;
        }

        public function setTipoUsuario($tipo_usuario)
        {
            $this->tipo_usuario = $tipo_usuario;
        }

        public function getTextoPesquisa()
        {
            return $this->textoPesquisa;
        }

        public function setTextoPesquisa($textoPesquisa)
        {
            $this->textoPesquisa = $textoPesquisa;
        }

        public function Pesquisa()
        {
            $pdo = self::getBD();
            $consulta =  $pdo->prepare("SELECT *FROM USUARIO WHERE NOME = ?");
            $this->getTextoPesquisa();
            $consulta->bindValue(1, $this->getTextoPesquisa());
            $consulta->execute();
            if($consulta->rowCount()==1)
                return true;
            else
                return false;
        }
        public function Grupo()
        {

        }

    }
