<?php
    //Chama o arquivo de conexão com o BD.
    include("../configuration/connection.php");

    //Variáveis que irão receber os dados via POST do formulário.
    $nome = $_POST["nome"];
    $cpf = $_POST["cpf"];
    $dataNascimento = $_POST["dataNascimento"];
    $genero = $_POST["genero"];
    $cep = $_POST["cep"];
    $logradouro = $_POST["logradouro"];
    $numeroResidencia = $_POST["numeroResidencia"];
    $complemento = $_POST["complemento"];
    $bairro = $_POST["bairro"];
    $cidade = $_POST["cidade"];
    $estado = $_POST["estado"];
    $codigoArea = $_POST["codigoArea"];
    $celular = $_POST["celular"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $confirmaSenha = $_POST["confirmaSenha"];

    //Instrução SQL de inserção de dados no BD.
    $SQL = "INSERT INTO usuario (nome, 
                                 cpf, 
                                 data_nascimento, 
                                 genero, 
                                 cep, 
                                 logradouro, 
                                 numero_residencia,
                                 complemento, 
                                 bairro,
                                 cidade,
                                 estado,
                                 codigo_area, 
                                 numero_celular, 
                                 email, 
                                 senha, 
                                 ativo)
            VALUES ('" . $nome . "', 
                    '" . $cpf . "', 
                    '" . $dataNascimento . "', 
                    '" . $genero . "', 
                    '" . $cep . "', 
                    '" . $logradouro . "', 
                    '" . $numeroResidencia . "', 
                    '" . $complemento . "', 
                    '" . $bairro . "',
                    '" . $cidade . "',
                    '" . $estado . "',
                    '" . $codigoArea . "', 
                    '" . $celular . "', 
                    '" . $email . "', 
                    SHA1('" . $senha . "'),
                    1);";

    //Faz a tentativa de inserção dos dados no BD.
    if (mysqli_query($connect, $SQL)) {
        
        //Encerra a conexão com o BD.
        mysqli_close($connect);

        //Redireciona a página para o login.
        $retorno = "Usuário cadastrado com sucesso!!!";
        header("location: ../login/form-login.php?retorno=" . $retorno);
    } else {
        //Encerra a conexão com o BD.
        mysqli_close($connect);

        //Redireciona a página para o login.
        $retorno = "Não foi possível cadastrar o usuário!!!";
        header("location: form-create.php?retorno=" . $retorno);
    }
?>