<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />
  <link rel="stylesheet" href="irrigacao.css" />

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <title>Smart Garden</title>
</head>

<body>
  <script src="irrigacao.js"></script>
  <nav class="navbar navbar-expand-lg navbar-light bg-light navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="login.html">SmartGarden</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="Metereologia.html">Metereologia <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="Plantação.html">Plantação <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="irrigacao.html">Irrigação <span class="sr-only">(current)</span></a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Search" />
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
          Pesquisar
        </button>
      </form>
    </div>
  </nav>

  <div class="container text-center">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <div class="box">
      <div class="container">
        <h3 class="Fazend">Fazenda Ordem Kinkou</h3>
        <div class="button-add"><button class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Adicionar</a></div>

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">

  <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Área de Plantio</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="col-xs-12 col-sm-12">

                <form class="kpx_loginForm" action="processa_irrigacao.php" autocomplete="off" method="POST">
                    <div class="input-group">
                        <input class="form-control rounded" type="text" name="area_plantio" id="area_plantio" placeholder="Nome da àrea de plantio"
                            required="required">
                        </div>
                        <hr />
                        <div class="input-group">

                        <input class="form-control rounded" type="text" name="endereco" id="endereco" placeholder="Endereço Completo"
                            required="required">
                        </div>

                        <div class="salvar" style="margin-top: 15px;">
                            <button type="submit" class="btn btn-primary">Salvar</button>
                        </div>
                </form>

                </div>
                
                 <div class="modal-header">
                     <h5 class="modal-title">Lote</h5>
                </div>

                <form class="kpx_loginForm" action="processa_lote.php" autocomplete="off" method="POST">
                    <div class="form-group">
                        <input type="text" class="form-control" name="nome_lote" id="nome_lote" placeholder="Nome do Lote"  required="required">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <input type="number" class="form-control" name="area_irrigacao_m3" id="area_irrigacao_m3" placeholder="Área de Irrigação(m²)">
                        </div>
                        <?php include "select.php"?>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <input type="number" class="form-control" name="qtd_irrigadores" id="qtd_irrigadores" placeholder="Quantidade de Irrigadores">
                        </div>

                        <div class="form-group col-md-6" >
                        <input style ="align=center" class="form-control" type="time" name="hr_irrigacao" id="hr_irrigacao" required><small>Digite o Horário de Irrigamento</small>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Salvar</button>
                    </form>




            </div>
       </div>
    </div>   
</div>

</div>

        <div class="row">

          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

            <div class="box-part text-center">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Lote: Cenoura 1</h5>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Hórario de Irrigação: 7:30 AM</li>
                  <li class="list-group-item">Área de Irrigação: 6m²</li>
                  <li class="list-group-item">Estado Atual: Irrigado</li>
                </ul>
                <div class="card-body">
                  <a href="#" class="card-link">Editar</a>
                  <a href="#" class="card-link" onclick="favoritar0()">Favorito</a><img src="../Imgs/off.png"
                    class=favoritar id="favorit0" onclick="desfavoritar0()">
                </div>
              </div>

            </div>
          </div>

          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

            <div class="box-part text-center">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Lote: Cenoura 2</h5>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Hórario de Irrigação: 7:30 AM</li>
                  <li class="list-group-item">Área de Irrigação: 6m²</li>
                  <li class="list-group-item">Estado Atual: Irrigado</li>
                </ul>
                <div class="card-body">
                  <a href="#" class="card-link">Editar</a>
                  <a href="#" class="card-link" onclick="favoritar1()">Favorito</a><img src="../Imgs/off.png"
                    class=favoritar id="favorit1" onclick="desfavoritar1()">
                </div>
              </div>

            </div>
          </div>

          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

            <div class="box-part text-center">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Lote: Abóbora</h5>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Hórario de Irrigação: 9:40 AM</li>
                  <li class="list-group-item">Área de Irrigação: 10m²</li>
                  <li class="list-group-item">Estado Atual: Não Irrigado</li>
                </ul>
                <div class="card-body">
                  <a href="#" class="card-link">Editar</a>
                  <a href="#" class="card-link" onclick="favoritar2()">Favorito</a><img src="../Imgs/off.png"
                    class=favoritar id="favorit2" onclick="desfavoritar2()">
                </div>
              </div>

            </div>
          </div>

          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

            <div class="box-part text-center">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Lote: Maça</h5>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Hórario de Irrigação: 12:30 PM</li>
                  <li class="list-group-item">Área de Irrigação: 20m²</li>
                  <li class="list-group-item">Estado Atual: Não Irrigado</li>
                </ul>
                <div class="card-body">
                  <a href="#" class="card-link">Editar</a>
                  <a href="#" class="card-link" onclick="favoritar3()">Favorito</a><img src="../Imgs/off.png"
                    class=favoritar id="favorit3" onclick="desfavoritar3()">
                </div>
              </div>

            </div>
          </div>

          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

            <div class="box-part text-center">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Lote: Alface</h5>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Hórario de Irrigação: 4:30 AM</li>
                  <li class="list-group-item">Área de Irrigação: 7m²</li>
                  <li class="list-group-item">Estado Atual: Irrigado</li>
                </ul>
                <div class="card-body">
                  <a href="#" class="card-link">Editar</a>
                  <a href="#" class="card-link" onclick="favoritar4()">Favorito</a><img src="../Imgs/off.png"
                    class=favoritar id="favorit4" onclick="desfavoritar4()">
                </div>
              </div>

            </div>
          </div>

          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 rounded">

            <div class="box-part text-center">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Lote: Pimenta</h5>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Hórario de Irrigação: 5:00 AM</li>
                  <li class="list-group-item">Área de Irrigação: 3m²</li>
                  <li class="list-group-item">Estado Atual: Irrigado</li>
                </ul>
                <div class="card-body">
                  <a href="#" class="card-link">Editar</a>
                  <a href="#" class="card-link" onclick="favoritar5()">Favorito</a><img src="../Imgs/off.png"
                    class=favoritar id="favorit5" onclick="desfavoritar5()">
                </div>
              </div>

            </div>

          </div>

        </div>
      </div>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
      </script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
      </script>
</body>

</html>