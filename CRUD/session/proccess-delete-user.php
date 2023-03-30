<?php 
    //chamada de inclusao do arquivo de conexao com o bd
    include("../configuration/connection.php");

    // Recupera o Id do usuario via metodo get. 
    $id = $_GET["id"];

    //Instruçao que faz a exclusao logica do usuario. 
    $SQL = "UPDATE usuario SET ativo = 0 WHERE id= $id;";

    //Executar a instruçao SQL e pegar o resultado. 
    if(mysqli_query($connect, $SQL)){

         //Fecha a conexao com o BD
         mysqli_close($connect);

         //Cria uma mensagem de retorno da operaçao. 
        $retorno = "O usuário foi excluido com sucesso!!!";

        //Redireciona o usuário. 
        header("location: proccess-list-users.php?retorno=" . $retorno );

    }else{
        //Fecha a conexao com o BD
        mysqli_close($connect);

        //Cria uma mensagem de retorno da operaçao. 
       $retorno = "Nao foi possivel excluir o usuario!!!";

       //Redireciona o usuário. 
       header("location: proccess-list-users.php?retorno=" . $retorno );

    }

?>