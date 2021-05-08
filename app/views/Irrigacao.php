<body style="background-image:url(<?=PATH_ASSETS.'arvore.jpg'?>);height: 100vh;">
  
  <div class="container text-center">
    <div class="box">
      <div class="container">
        <h3 class="fazend">Fazenda Ordem Kinkou</h3>
        
        <div class="button-add ">
          <button class="btn btn-primary col-xs-12" data-toggle="modal" data-target=".bd-example-modal-lg">Adicionar</a>
         <a href="<?=BASE_URL."/sair"?>" class="btn btn-danger">Sair</a>
        </div>
       

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

                <form class="kpx_loginForm" action="processa_plantio.php" autocomplete="off" method="POST">
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
                  <a href="#" class="card-link" onclick="favoritar0()">Favorito</a><img src="<?=PATH_ASSETS."off.png"?>"
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
                  <a href="#" class="card-link" onclick="favoritar1()">Favorito</a><img src="<?=PATH_ASSETS."off.png"?>"
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
                  <a href="#" class="card-link" onclick="favoritar2()">Favorito</a><img src="<?=PATH_ASSETS."off.png"?>"
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
                  <a href="#" class="card-link" onclick="favoritar3()">Favorito</a><img src="<?=PATH_ASSETS."off.png"?>"
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
                  <a href="#" class="card-link" onclick="favoritar4()">Favorito</a><img src="<?=PATH_ASSETS."off.png"?>"
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
                  <a href="#" class="card-link" onclick="favoritar5()">Favorito</a><img src="<?=PATH_ASSETS."off.png"?>"
                    class=favoritar id="favorit5" onclick="desfavoritar5()">
                </div>
              </div>

            </div>

          </div>

        </div>
      </div>
