<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href=<?=PATH_CSS."/style.css"?>>
  <link rel="icon" type="imagem/png" href=<?=PATH_ASSETS."/icone.jpg"?> />
  <title>Smart Garden</title>
</head>

<body style="background-image:url(<?=PATH_ASSETS.'arvore.jpg'?>);height: 100vh;">

  <div class="container" id="container">

    <div class="form-container sign-up-container">
      <form action="<?=BASE_URL."/opa"?>" method="POST">
        <h1>CRIAR CONTA</h1>
        <div class="social-container">
          <!-- <a href="#" class="face"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="google"><i class="fab fa-google-plus-g"></i></a> -->

          <!-- <span>Ou cadastre uma conta</span> -->
        </div>
        
        <input type="text" name="name" id="name" placeholder="Nome Completo" required="required" />
        <input type="email" name="email" id="email" placeholder="Email" required="required" />
        <input type="password" name="senha" id="senha" placeholder="Senha" required="required"/>
        <input type="password" name="confirmsenha" id="confirmsenha" placeholder="Confirme sua Senha" required="required" />
        <br>
        <div class="cadastro" style="margin-top: 15px;">
          <button type="submit" style="color: black;">Cadastrar</button>
        </div>
      </form>
    </div>
    <div class="form-container sign-in-container">
      <form action="<?=BASE_URL."/entrar"?>" method="POST">
        <h1>ENTRAR</h1>
        <div class="social-container">
          <!-- <a href="#" class="face"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="google"><i class="fab fa-google-plus-g"></i></a> -->

          <span class="text-danger">
            <?php 
            echo isset($_SESSION["erro"]) ? $_SESSION["erro"] : ""
            // echo $dadosView['teste'];?>
        </span>
        <!-- <span>Ou entre com uma conta</span> -->
        </div>
      
        <input type="text" name="usuario" placeholder="E-mail" />
        <input id="password" name="senha" type="password" placeholder="Senha" required />
        <a href="<?=BASE_URL."/forgot"?>">Esqueceu sua senha?</a>
        <div class="login" style="margin-top: 15px;">
          <button type="submit" style="color: black;">Login</button>
        </div>
      </form>
    </div>
    <div class="overlay-container">
      <div class="overlay">
        <div class="overlay-panel overlay-left">
          <h1>FAÇA SEU LOGIN!</h1>
          <p>Para se manter conectado e aproveitar todas nossas funções.</p>
          <button class="ghost" id="signIn">login</button>
        </div>
        <div class="overlay-panel overlay-right">
          <h1>SEM CONTA?</h1>
          <p>Faça sua conta agora mesmo e adquira nossos recursos.</p>
          <button class="ghost" id="signUp">cadastro</button>
        </div>
      </div>
    </div>
  </div>
  <script src=<?=PATH_JS."confirmsenha.js"?>></script>
  <script src=<?=PATH_JS."scripts.js"?>></script>
  <script src="https://kit.fontawesome.com/905ede63f2.js" crossorigin="anonymous"></script>
</body>

</html>


