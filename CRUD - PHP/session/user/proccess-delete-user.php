<?php
    //Chamada de inclusão do arquivo de conexão com o BD.
    include("../configuration/connection.php");

    //Chamada para o arquivo que verifica se o usuário está logado.
    include("../configuration/user-session.php");

    //Recuperar o ID do usuário via método GET.
    $id = $_GET["id"];

    //Instrução que faz a exclusão lógica do usuário.
    $SQL = "UPDATE usuario SET ativo = 0 WHERE id = $id;";

    //Executar a instrução SQL e pegar o resultado.
    if(mysqli_query($connect, $SQL)){

        //Fecha a conexão com o BD.
        mysqli_close($connect);

        //Cria uma mensagem de retorno da operação.
        $retorno = "O usuário foi excluído com sucesso!!!";

        //Redireciona o usuário.
        header("location: proccess-list-users.php?retorno=" . $retorno);
    }else{
        //Fecha a conexão com o BD.
        mysqli_close($connect);

        //Cria uma mensagem de retorno da operação.
        $retorno = "Não foi possivel excluir o usuário...";

        //Redireciona o usuário.
        header("location: proccess-list-users.php?retorno=" . $retorno);
    }
?>