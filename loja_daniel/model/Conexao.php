<?php
class Conexao
{
    static function conectar()
    {
        //iniciando a conexão com mysql e o bd
        $con = new PDO("mysql:host=localhost;dbname=bdloja","root",""); 
        //ativando exibição de erros do PDO
        $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        return $con; //retornando a conexão com o BD
    }
}
?>