<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CRUD - Login</title>

  <!-- Link de referência ao CSS do Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
  rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

  <!-- Cabeçalho do website -->
  <header class="p-3 text-center">
    <h2 class="text-uppercase text-success">CRUD - Login</h2>
    <h4>Escola SENAI "Luiz Massa" - Botucatu (SP)</h4>
  </header>

  <!-- Menu do website -->
  <nav class="navbar navbar-expand-lg bg-success">
    <div class="container-fluid">
      <a class="navbar-brand text-light" href="index.php">CRUD</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link text-light" href="../user/form-create.php">Cadastro</a>
          <a class="nav-link text-light" href="form-login.php">Login</a>
        </div>
      </div>
    </div>
  </nav>

  <?php
    //Recupera a variavel via metodo GET
    $retorno = $_GET["retorno"];

    // Verifica a variavel possui valor e a apresenta. 
    if(isset($retorno)){
   
   print ('
  
    <div class="container justify-content-center mt-5">
      <div class="alert alert-primary text-center" role="alert">
        '. $retorno. '
        </div>
    </div>

    ');

    }
    ?>

  <!-- Seção do formulário -->
  <section class="container py-5">

    <div class="row justify-content-center">

      <form action="process-login.php" method="post" class="border rounded p-3 col-4">

        <!-- E-mail -->
        <div class="mb-3">
          <label for="email" class="form-label">E-mail</label>
          <input type="email" class="form-control" id="email" name="email">
        </div>

        <!-- Senha -->
        <div class="mb-3">
          <label for="senha" class="form-label">Senha</label>
          <input type="password" class="form-control" id="senha" name="senha">
        </div>

        <!-- Lembrar-me -->
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="lembrar" name="lembrar">
          <label class="form-check-label" for="lembrar">Lembrar-me</label>
        </div>

        <button type="submit" class="btn btn-success">Entrar</button>
      </form>

    </div>

  </section>

  <!-- Link de referência ao JS do Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
  </script>
</body>