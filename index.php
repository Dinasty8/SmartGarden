<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <title>Smart Garden</title>
  <link rel="shortcut icon" href="Imgs/favicon.ico" type="image/x-icon" />
  <link rel="icon" href="Imgs/favicon.ico" type="image/x-icon" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
  </script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
    integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
  </script>

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

  <link rel="stylesheet" media="screen" href="includes/logcadastr.css">

</head>

<body>

  <div class="container">

    <div class="kpx_login">
      <h3 class="kpx_authTitle"><a href="login.html">Login </a> or Sign up </h3>

      <h4>
        <?php
        
        if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
      }
        ?>
      </h4>

      <div class="row kpx_row-sm-offset-3">
        <div class="col-xs-12 col-sm-6">
          <form class="kpx_loginForm" action="processa.php" autocomplete="off" method="POST">
            <div class="input-group">
              <input class="form-control rounded" type="text" name="name" id="name" placeholder="Nome Completo"
                required="required">
            </div>
            <hr />
            <div class="input-group">

              <input class="form-control rounded" type="email" name="email" id="email" placeholder="Digite seu Email"
                required="required">
            </div>
            <hr />
            <div class="input-group">
              <input class="form-control rounded" type="password" name="senha" id="senha" placeholder="Digite sua Senha"
                required="required">
            </div>
            <hr />
            <div class="input-group">
              <input class="form-control rounded" type="password" name="confirmsenha" id="confirmsenha"
                placeholder="Confirme sua Senha" required="required">
            </div>
            <hr />
            <div class="dtnasc">
              <p> Data de nascimento:</p> <input class="form-control rounded" type="date" name="nascimento">
            </div>
            <hr />
            <div class="checar">
              <input type="checkbox" name="termos" required="required"> Li e Concordo com os Termos<br>
            </div>
            <hr />
          
 <script>
 let password = document.getElementById("senha"), confirm_password = document.getElementById("confirmsenha");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Senhas diferentes!");
  } else {
    confirm_password.setCustomValidity('');
  }
}
password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
</script>

            <button class="btn btn-lg btn-outline-primary btn-block" type="submit"><i
                class="fa fa-sign-in"></i>Cadastrar</button>
          </form>
        </div>
      </div>
    </div>

</body>

</html>