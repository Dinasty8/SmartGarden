<?php

include ("../conexao.php");                
$areas_plantio="SELECT `nome_area` FROM `areas_de_plantio` ORDER BY `id` ASC";
$resultado = mysqli_query($conn,$areas_plantio);
?>
<html>
    <head>
</head>
<body>

  <div class="form-group col-md-6">
     
        <select name="area_plantio" id="area_plantio" class="form-control" required>
        <option value="">Escolher...</option>
        <?php while($area = $resultado->fetch_array()){?>
        <option value="<?php  echo $area['nome_area'];?>"><?php echo $area['nome_area'];?></option>
        <?php }?>
      </select>
    </div>
    
</body>
</html>