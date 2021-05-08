
    <link rel="stylesheet" href=<?=PATH_CSS."forgot.css"?>>
</head>
<body  style="background-image:url(<?=PATH_ASSETS.'arvore.jpg'?>);height: 100vh;">
    <div class="container" id="container">
        <div class="form-container sign-up-container">
          <div class="arrow"><a href="<?=BASE_URL?>"><i class="fas fa-arrow-left fa-2x"></i></a></div>
          <form action="#">
            <div class="form-container sign-in-container">
                <form action="#">
                  <h1>Redefinir Senha</h1>
                  <div class="social-container">                    
                    <i class="fas fa-lock fa-6x"></i>                    
                  </div>
                  <span>Insira seu E-mail para redefinir sua senha</span>
                  <input type="email" placeholder="E-mail" required/>
                  <button onclick="popup()">enviar</button>
                </form>
              </div>
          </form>
        </div> 
        
        
        <script>
          function popup(){
              alert('E-mail enviado com sucesso!')
          }
      </script>
        <script src="https://kit.fontawesome.com/905ede63f2.js" crossorigin="anonymous"></script>
</body>
</html>