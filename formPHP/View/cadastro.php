<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <title>Formulario de Login</title>
</head>
<body>
  <div class="container">
    <h1>Cadastro</h1>
    <div>
      <form action="cadastrar.php" id="form_cadastro" method="POST">
        <br></br>
        <label class="form-label">Digite seu nome</label>
        <input type="text" name="nomeC" id="nome" class="form-control" placeholder="Fulano Silva Pereira">
        <br></br>
        <label class="form-label">Digite seu nome de usuario</label>
        <input type="text" name="usuarioC" class="form-control" id="usuario" placeholder="Fulano">
        <br></br>
        <label class="form-label">Digite seu Email</label>
        <input type="email" name="emailC" class="form-control" placeholder="name@example.com">
        <br></br>
        <label class="form-label">Digite sua senha</label>
        <input type="password" name="senhaC"  class="form-control" id="senha">
        <br></br>
        
        <input type="submit" id="submit" class="btn btn-primary" value="Cadastrar" placeholder="Cadastrar">
        <a href="./View/login.php">Logar</a>
      </form>
    </div>
  </div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</html>