<?php
    $_SESSION['login'] = 'index';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/Assets/styles/login.css">
    <title>Login</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <!-- Título do Framework -->
    <span class="navbar-brand mb-0 h1">Mini-Framework</span>
    <!-- Botão de Collapse -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMF" aria-controls="navbarMF" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-md-center" id="navbarMF">
        <ul class="navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="?page=adm">Login<span class="sr-only">(Atual)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="?page=index">Página Inicial</a>
        </li>
        </ul>
    </div>
  </nav>

  <div class="container" role="main" style="padding-top: 4.5rem;">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <img src="/Assets/img/Logo200x200.png" class="border border-primary rounded-circle mx-auto d-block mb-3" width="128">
            <form class="form-signin" method="POST" action="?page=adm">
              <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus name ="email">
                <label for="inputEmail">Email</label>
              </div>

              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" placeholder="Senha" required name="senha">
                <label for="inputPassword">Senha</label>
              </div>

              <!-- Em desenvolvimento -->
              <!--               
              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Remember password</label>
              </div> 
              -->
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Logar</button>
              <hr class="my-4">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>
</html>