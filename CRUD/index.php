<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD - Index</title>

    <!-- Link de referência ao CSS do Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>

    <!-- Cabeçalho do website -->
    <header class="p-3 text-center">
        <h2 class="text-uppercase text-success">CRUD - Index</h2>
        <h4>Escola SENAI "Luiz Massa" - Botucatu (SP)</h4>
    </header>

    <!-- Menu do website -->
    <nav class="navbar navbar-expand-lg bg-success">
        <div class="container-fluid">
          <a class="navbar-brand text-light" href="#">CRUD</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link text-light" href="user/form-create.php">Cadastro</a>
              <a class="nav-link text-light" href="login/form-login.php">Login</a>
            </div>
          </div>
        </div>
    </nav>

    <!-- Seção do formulário -->
    <section class="container py-5">

      <div class="row justify-content-center">

        <div class="text-center">
          <h5>Técnico em Desenvolvimento de Sistemas</h5>
          <h5>CRUD em PHP</h5>
        </div>

        <div class="text-justify mt-5">
          <p>
            CRUD é um acrônimo que significa <b>Create</b>, <b>Read</b>, <b>Update</b> 
            e <b>Delete</b> (Criar, Ler, Atualizar e Excluir).
            É um termo utilizado na programação de software para descrever as quatro
            operações básicas que um sistema de gerenciamento de banco de dados (SGBD)
            deve ser capaz de realizar em relação aos dados armazenados.
          </p>
        </div>

      </div>

    </section>

    <!-- Link de referência ao JS do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>