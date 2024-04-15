<?php
// Definindo variáveis com informações
$nome = "Claudio José";
$idade = 54;
$peso = 89.0;
$altura = 1.40;
$grau_escolaridade = "Ensino Fundamental Completo";

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informações Pessoais</title>
</head>
<body>
    <h1>Informações Pessoais</h1>
    <ul>
        <li><strong>nome:</strong> <?php echo $nome; ?></li>
        <li><strong>idade:</strong> <?php echo $idade; ?></li>
        <li><strong>peso:</strong> <?php echo $peso; ?> kg</li>
        <li><strong>altura:</strong> <?php echo $altura; ?> m</li>
        <li><strong>grau de Escolaridade:</strong> <?php echo $grau_escolaridade; ?></li>
    </ul>
</body>
</html>