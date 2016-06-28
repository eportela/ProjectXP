<?php
    
Abstract Class ConectaBD
{
    private static $instance = null;
 
    private static function ConexaoBD()
    {
        try
        {
            if(self::$instance==NULL)
            {
                self::$instance = new PDO('pgsql:host=localhost;dbname=banco_i', 'postgres', 'admvictor');
                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
        }catch (PDOException $ex){
          echo $ex->getMessage();
        }
        return self::$instance; 
    }
    
    protected function getBD()
    {
        return self::ConexaoBD();
    }
}
