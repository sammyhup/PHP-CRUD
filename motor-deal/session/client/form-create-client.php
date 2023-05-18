<?php
//Chamada para o arquivo que verifica se o usuario esta logado
include("../../configuration/user-session.php");
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD - Cadastro de Cliente</title>

    <!-- Link de referência ao CSS do Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  
  <body>

    <!-- Cabeçalho do website -->
    <header class="p-3 text-center">
        <h2 class="text-uppercase text-primary">Motor Deal - Dashboard</h2>
        <h4>Escola SENAI "Luiz Massa" - Botucatu (SP)</h4>
    </header>

    <!-- Menu do website -->
    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container-fluid">
          <a class="navbar-brand text-uppercase text-light" href="../dashboard.php">Dashboard</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          
          <!--itens dropdown do menu interno-->
          <div class="collapse navbar-collapse">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Usuários
                      </a>
                      <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="../user/form-create-user.php">Cadastrar</a></li>
                        <li><a class="dropdown-item" href="../user/proccess-list-users.php">Listar</a></li>
                      </ul>
                    </li>

                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Clientes
                      </a>
                      <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="form-create-cliente.php">Cadastrar</a></li>
                        <li><a class="dropdown-item" href="#">Listar</a></li>
                      </ul>
                    </li>

                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Veiculos
                      </a>
                      <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Cadastrar</a></li>
                        <li><a class="dropdown-item" href="#">Listar</a></li>
                      </ul>
                    </li>

                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Vendas
                      </a>
                      <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Efetuar Venda</a></li>
                        <li><a class="dropdown-item" href="#">Listar Vendas</a></li>
                      </ul>
                    </li>
            </ul>

        </div> 

          <!--itens alinhados a direita do menu interno-->
          <div class="#">
            <a class="text-uppercase text-light"> Sair</a>
          </div> 
          </div>
        </div>
    </nav>
    <section class= "container py-5 text-center">
    <?php
              //Verifica se existe alguma mensagem de retorno.
              if(isset($_SESSION['retorno'])){

                //Apresenta a mensagem de retorno.
                print($_SESSION['retorno']);

                //DEleta a variavel de sessão.
                unset($_SESSION['retorno']);

              //Apresenta a mensagem de boas-vindas para o usuário.   
              }else{
                print("Preencha com as informações do novo cliente..");
              }
    ?>
    </section>
    
    <!-- Seção do formulário -->
    <section class="container">
        <div class="row">
            <form action="proccess-create-client.php" method="post" class="row">
                
                <!-- Nome e CPF -->
                <div class="row">
                    <div class="col-6 my-3">
                        <label for="nome" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome">
                    </div>
                    <div class="col-6 my-3">
                        <label for="cpf" class="form-label">CPF</label>
                        <input type="text" class="form-control" id="cpf" name="cpf">
                    </div>
                </div>

                <!-- Data de nascimento e genero -->
                <div class="row">
                    <div class="col-8 my-3">
                        <label for="dataNascimento" class="form-label">Data de Nascimento</label>
                        <input type="date" class="form-control" id="dataNascimento" name="dataNascimento">
                    </div>
                    <div class="col-4 my-3">
                        <label for="genero" class="form-label">Gênero</label>
                        <select id="genero" name="genero" class="form-select">
                          <option selected>Selecione o gênero...</option>
                          <option value="M">Masculino</option>
                          <option value="F">Feminino</option>
                          <option value="N">Não informar</option>
                        </select>
                    </div>
                </div>

                <!-- Endereço e Telefone -->
                <div class="row">
                    <div class="col-7 my-3">
                        <label for="logradouro" class="form-label">Endereço</label>
                        <input type="text" class="form-control" id="logradouro" name="logradouro">
                    </div>
                    <div class="col-5 my-3">
                        <label for="celular" class="form-label">Celular com DDD</label>
                        <input type="tel" class="form-control" id="celular" name="celular">
                    </div>
                </div>

        
                <!-- Botão de cadastrar -->
                <div class="row">
                    <div class="col-12 my-3">
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <!-- Link de referência ao JS do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>