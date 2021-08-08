<?php
    
    include('funcoes.php');
    
    $a = $_POST['txta'];
    $b = $_POST['txtb'];
    $c = $_POST['txtc'];

    $valores_a = array();
    $valores_b = array();
    $valores_c = array();

   for ($i= -10; $i < 10; $i++) { 
       $valores_a[] = $i;
       $valores_b[] = $i;
       $valores_c[] = $i;
   }

   $resultados = array();


   foreach ($valores_a as $chave_a => $valor_a) {
    foreach ($valores_b as $chave_b => $valor_b) {
      foreach ($valores_c as $chave_c => $valor_c) {
       // $resultado_temp = calc_bhaskara($valor_a, $valor_b, $valor_c);
        if($resultado_temp != NULL && $resultado_temp['x1'] != NULL && $resultado_temp['x2'] != NULL){
        $resultados[] = $resultado_temp;
      }
      }
    }
  }

    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Resultado do Calculo</title>
</head>
<body>
    <div class="container">

        <label for=""> <?php echo 'O valor de Delta é: ', $delta; ?> </label>
        <br>
        <label for=""> <?php echo ' O valor de X1: ', $x1; ?> </label>
        <br>
        <label for=""> <?php echo ' O valor de X2: ', $x2; ?> </label>       
       
            
    </div>

    <div class="container" id="container2">
        
        <table>
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Delta</th>
                    <th>X1</th>
                    <th>X2</th>
                </tr>
            </thead>
            <?php while ($dados = $retorno->fetch_array()) {?>
                <tbody>
                    <tr>
                        <td> <? echo $dados['id'];?></td>
                        <td> <? echo $dados['delta'];?></td>
                        <td> <? echo $dados['x1'];?></td>
                        <td> <? echo $dados['x2'];?></td>
                    </tr>
                </tbody>
            <?php } ?>
        </table>
        
       
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>