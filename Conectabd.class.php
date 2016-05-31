<?php
    
Abstract Class ConectaBD
{
    private static $instance = null;
 
    private static function ConexaoBD() //metodo de conexao com o banco utilizando PDO 
    {
        try
        {
            if(self::$instance==NULL) //se for NULL
            {
                self::$instance = new PDO('pgsql:host=localhost;dbname=banco_i', 'postgres', 'admvictor'); //inserção dos parâmetros no PDO
                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //setando atributos de ERRO do PDO 'PDO::ATTR_ERRMODE', 'PDO::ERRMODE_EXCEPTION'
            }
        }catch (PDOException $ex){
          echo $ex->getMessage(); //informa o tipo de erro
        }
        return self::$instance; 
    }
    
    protected function getBD() //método para pegar a conexão
    {
        return self::ConexaoBD();
    }
}

?>