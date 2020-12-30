<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="estilos.css">
  <title>Formulario de Login</title>
</head>
<body>
  <div class="container login">
    <h1>Login</h1>
    <div class="div-form">
      <form action="../logar.php" id="form_cadastro" method="POST" class="form-login">
        <br></br>
        <label class="form-label">Digite seu Email</label>
        <input type="email" name="email" class="form-control" placeholder="name@example.com">
        <br></br>
        <label class="form-label">Digite sua senha</label>
        <input type="password" name="senha" placeholder="Senha"  class="form-control" id="senha">
        <br></br>
        <input type="submit" id="submit" class="btn btn-primary" value="Entrar" placeholder="Entrar">

      </form>
    </div>
  </div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</html>