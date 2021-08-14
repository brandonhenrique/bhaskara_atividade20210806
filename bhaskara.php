<?php
    
    include 'funcoes.php';
    
    echo '<pre>';


    $a = $_POST['txta'];
    $b = $_POST['txtb'];
    $c = $_POST['txtc'];

    $a_fim = $_POST['txta_fim'];
    $b_fim = $_POST['txtb_fim'];
    $c_fim = $_POST['txtc_fim'];
    


    $valor_a = array();
    $valor_b = array();
    $valor_c = array();

    for ($i = $a; $i <= $a_fim ; $i++) {
        $valor_a[] = $i;
    }
    for ($i = $b; $i <= $b_fim; $i++) {
        $valor_b[] = $i;
    }
    
    for ($i = $c; $i <= $c_fim; $i++) {
        $valor_c[] = $i;
    }

    var_dump($valor_a);
    var_dump($valor_b);
    var_dump($valor_c);


   $resultados = array();


   foreach ($valor_a as $chave_a => $value_a) {
    foreach ($valor_b as $chave_b => $value_b) {
      foreach ($valor_c as $chave_c => $value_c) {
        $resultado_temp = calc_bhaskara($value_a, $value_b, $value_c);
        if($resultado_temp != NULL && $resultado_temp['x1'] != NULL && $resultado_temp['x2'] != NULL){
        $resultados[] = $resultado_temp;
      }
      }
    }
  }


  echo "Resultado: <br>";
  var_dump($resultados);
    
?>