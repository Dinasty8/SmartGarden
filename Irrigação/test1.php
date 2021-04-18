<?php
// include_once "../conexao.php";
// $areas_plantio="SELECT `nome_area` FROM `areas_de_plantio` ORDER BY `id` ASC";

// $resultado = mysqli_query($conn,$areas_plantio);

// $areas = "";

// while($row_areas = mysqli_fetch_assoc($resultado)){
//     $t = $row_areas['nome_area'];
//     $areas = $areas.$t." ";
// }
// echo $areas;
// echo "<br>";
// print_r( explode(" ",$areas));



// print_r("resultado".$row_areas['nome_area']);




include ("../conexao.php");                
$areas_plantio="SELECT `nome_area` FROM `areas_de_plantio` ORDER BY `id` ASC";
$resultado = mysqli_query($conn,$areas_plantio);
?>
<html>
    <head>
</head>
<body>
    <table border="1">
        <?php while($area = $resultado->fetch_array()){?>
      
            <tr>
            <td><?php echo $area['nome_area'];?></td>
            </tr>

 <div class="form-group col-md-4">
      <label for="inputEstado">Estado</label>
      <select id="inputEstado" class="form-control">
        <option value="">Escolher...</option>
        <option value="<?php echo $area['nome_area'];?>"><?php echo $area['nome_area'];?></option>
      </select>
    </div>
  

        <?php } ?>
    </table>

   

  
</body>
</html>