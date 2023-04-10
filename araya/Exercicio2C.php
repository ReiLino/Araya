<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$vetor = array(
    array("Nome" => "Maria", "Curso" => "ADS", "Média" => 7.0, "Situação" => ""),
    array("Nome" => "João", "Curso" => "CD", "Média" => 5.0, "Situação" => ""),
    array("Nome" => "José", "Curso" => "CD", "Média" => 8.0, "Situação" => ""),
    array("Nome" => "Pedro", "Curso" => "ADS", "Média" => 1.5, "Situação" => ""),
    array("Nome" => "Paulo", "Curso" => "ADS", "Média" => 6.0, "Situação" => "")
  );
foreach($vetor as &$registro){
  $media = $registro["Média"];
  if($media < 2){
    $registro["Situação"] = "Reprovado";
  } else if($media < 6){
    $registro["Situação"] = "Exame Final";
  } else {
    $registro["Situação"] = "Aprovado";
  }
}

echo "<table>";
echo "<tr><th>Nome</th><th>Curso</th><th>Média</th><th>Situação</th></tr>";
foreach($vetor as $registro){
  echo "<tr>";
  echo "<td>".$registro["Nome"]."</td>";
  echo "<td>".$registro["Curso"]."</td>";
  echo "<td>".$registro["Média"]."</td>";
  echo "<td>".$registro["Situação"]."</td>";
  echo "</tr>";
}
echo "</table>";

$cursos = array();
foreach($vetor as $registro){
  $curso = $registro["Curso"];
  if(!isset($cursos[$curso])){
    $cursos[$curso] = array("Aprovado" => 0, "Exame Final" => 0, "Reprovado" => 0);
  }
  $situacao = $registro["Situação"];
  $cursos[$curso][$situacao]++;
}
echo "<p>Situação dos alunos por curso:</p>";
foreach($cursos as $curso => $situacoes){
  echo "<p>".$curso.":</p>";
  echo "<ul>";
  echo "<li>Aprovado: ".$situacoes["Aprovado"]."</li>";
  echo "<li>Exame Final: ".$situacoes["Exame Final"]."</li>";
  echo "<li>Reprovado: ".$situacoes["Reprovado"]."</li>";
  echo "</ul>";
}
?>
</body>
</html>