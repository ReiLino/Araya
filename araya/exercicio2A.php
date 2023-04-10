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
echo "<table>";
echo "<tr><th>Nome</th><th>Curso</th><th>Média</th><th>Situação</th></tr>";
foreach($vetor as $registro){
  echo "<tr>";
  echo "<td>" . $registro["Nome"] . "</td>";
  echo "<td>" . $registro["Curso"] . "</td>";
  echo "<td>" . $registro["Média"] . "</td>";
  echo "<td>" . $registro["Situação"] . "</td>";
  echo "</tr>";
}
echo "</table>";
?>
</body>
</html>