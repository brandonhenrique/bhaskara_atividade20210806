<?php
    
  include 'funcoes.php';
    
  $a = $_POST['txta'];
  $b = $_POST['txtb'];
  $c = $_POST['txtc'];

  $a_fim = $_POST['txta_fim'];
  $b_fim = $_POST['txtb_fim'];
  $c_fim = $_POST['txtc_fim'];

  
  $a_valors = array();
  $b_valors = array();
  $c_valors = array();

  for ($i = $a; $i <= $a_fim; $i++) { 
    $a_valors[] = $i;
  }

  for ($i = $b; $i <= $b_fim; $i++) { 
    $b_valors[] = $i;
  }

  for ($i = $c; $i <= $c_fim; $i++) { 
    $c_valors[] = $i;
  }


  //var_dump($a_valors);

  //var_dump($b_valors);

  //var_dump($c_valors);
  
  $results = array();

  foreach ($a_valors as $key_a => $value_a) {
    foreach ($b_valors as $key_b => $value_b) {
      foreach ($c_valors as $key_c => $value_c) {
        $results_temp = calc_bhaskara($value_a, $value_b, $value_c);
        if ($results_temp != NULL && $results_temp['x1'] != NULL && $results_temp['x2'] != NULL) {
          $results[] = $results_temp;
        }
      }
    }
  }
  
  var_dump($results);


?>