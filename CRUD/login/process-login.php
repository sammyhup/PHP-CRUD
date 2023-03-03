<?php
//Chamada para o arquivo de conexao com o BD. 
include("../configuration/connection.php");

//Recupera os dados via método POST. 
$email = $_POST["email"];
$senha = SHA1($_POST["senha"]);

//Monta e executa uma consulta SQL
$SQL = "SELECT senha FROM usuario WHERE email = '$email' ;";
$consulta = mysqli_query($connect, $SQL);

//Verifica se a consulta deu certo e retorna algo.
if($consulta){

        //Recebe os dados consultados do BD. 
        $linha = mysqli_fetch_assoc($consulta);
        $senhaBD = $linha["senha"];

    // Verifica se a senha do formulario é igual a do BD. 
        if($senha == $senhaBD){

            //Fecha a conexao com o BD. 
            mysqli_close($connect);

            print( "As senhas conferem!!");

        }else{

            //Fecha a conexao com o BD. 
            mysqli_close($connect);

            //Retorna pro usuario uma mensagem de erro. 
            $retorno = "As informações não conferem !!";
            header("location: form-login.php?retorno=?" .$retorno);
        }

} else{

        //Fecha a conexao com o BD. 
        mysqli_close($connect);
        
     //Retorna pro usuario uma mensagem de erro. 
     $retorno = "As informações não conferem !!";
     header("location: form-login.php?retorno=?" .$retorno);
}
?>