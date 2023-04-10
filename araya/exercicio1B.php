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
  array("Nome" => "Pedro", "Idade" => 30, "Curso" => "ADS", "Média" => 7.0)
);
echo "<table>";
echo "<tr><th>Nome</th><th>Idade</th><th>Curso</th><th>Média</th></tr>";
foreach($vetor as $registro){
  echo "<tr>";
  echo "<td>" . $registro["Nome"] . "</td>";
  echo "<td>" . $registro["Idade"] . "</td>";
  echo "<td>" . $registro["Curso"] . "</td>";
  echo "<td>" . $registro["Média"] . "</td>";
  echo "</tr>";
}
echo "</table>";
?>
</body>
</html>