<?php
    
    include('conexao.php');
    
    $a = $_POST['txta'];
    $b = $_POST['txtb'];
    $c = $_POST['txtc'];

    $delta = ($b * $b) - ((4*$a)*$c);
    $x1 = (-$b + sqrt($delta)) / (2 * $a);
    $x2 = (-$b - sqrt($delta)) / (2 * $a);
    if ($delta < 0) {
        echo 'A equação de 2º grau não possui raízes reais!';    
    }else {
        $sql = "insert into formula_bhaskara values(0, $a, $b, $c, $delta, $x1, $x2)";       
        $cadastrar = mysqli_query($conexao, $sql);

        if (!$cadastrar) {
            die('Query Inválido: ' . @mysqli_error($conexao));
        }else {
            echo 'Registro Cadastrado com Sucesso';
        }
    }
    
    
    
    $respostas = "SELECT * FROM formula_bhaskara";
    $retorno = mysqli_query($conexao, $respostas);
    
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