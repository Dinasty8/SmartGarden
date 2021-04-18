<?php
session_start();
include_once "conexao.php";
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

  <link rel="stylesheet" media="screen" href="includes/listar.css">

</head>

<body>

  <div class="container">
      <a href="index.php">Cadastrar</a><br>
      <a href="listar.php">Listar</a><br>
<h1>Listar Usuarios</h1>
<?php
        
        if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
      }
    //Receber Numero da Página
      $pagina_atual = filter_input(INPUT_GET,'pagina',FILTER_SANITIZE_NUMBER_INT);

      $pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;
    //Setar a quantidade de itens por Página
      $qtd_result_pag = 2;

    //Calcular Inicio da Visualização
    $inicio = ($qtd_result_pag * $pagina) - $qtd_result_pag;




      $result_usuarios = "SELECT * FROM cadastros LIMIT $inicio,$qtd_result_pag";
      $resultado_usuarios = mysqli_query($conn,$result_usuarios);

      while($row_usuario = mysqli_fetch_assoc($resultado_usuarios)){
          echo "ID: ".$row_usuario['id']."<br>";
          echo "Nome: ".$row_usuario['nome']."<br>";
          echo "Email: ".$row_usuario['email']."<br>";
          echo "Senha: ".$row_usuario['senha']."<br>";
          echo "Data De Criação: ".$row_usuario['created']."<br><hr>";
      }

    //Paginação - Somar a Quantidade de Usuarios
   $result_pag = "SELECT COUNT(id) AS num_result FROM cadastros";
   $resultado_pag =mysqli_query($conn, $result_pag);
   $row_pag = mysqli_fetch_assoc($resultado_pag);

   //quantidade de Resultados
   //echo $row_pag['num_result'];

   $qtd_pag = ceil($row_pag['num_result']/$qtd_result_pag);

   //limitar links antes e depois
    $max_links = 2;
      echo "<a href='listar.php?pagina=1'>Primeira</a>";

      for($pag_anterior = $pagina - $max_links;$pag_anterior <= $pagina - 1;$pag_anterior++){
          if($pag_anterior>=1){
               echo "<a href='listar.php?pagina=$pag_anterior'>$pag_anterior</a>";
          }
       
      }

      echo $pagina;

      for($pag_posterior = $pagina + 1 ;$pag_posterior <= $pagina + $max_links;$pag_posterior++){
        if($pag_posterior<=$qtd_pag){
            echo "<a href='listar.php?pagina=$pag_posterior'>$pag_posterior</a>";
       }
    }
      echo "<a href='listar.php?pagina=$qtd_pag'>Ultima</a>";

?>


  </div>

</body>

</html>