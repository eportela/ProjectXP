<?php
    require'Conectabd.class.php';
    Class Login Extends ConectaBD
    {
        private $login;
        private $senha;
        
        public function getLogin()
        {
            return $this->login;
        }
        
        public function setLogin()
        {
            $this->login = $login;
        }
        
        public function getSenha()
        {
            return $this->senha;
        }
        
        public function setSenha()
        {
            $this->senha = $senha;
        }
        
        public function ConectarBD()
        {
            $con = parent::getBD();
            if($con)
                echo 'conectou';
        }
    }
?>