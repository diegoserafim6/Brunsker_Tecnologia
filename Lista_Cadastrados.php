<?php

 include 'conectabd.php';
/*Consulta usuarios cadastrados no banco de dados e carrega automaticamente  com a pagina Pesquisar.php via tabela */

$busca = "SELECT * FROM usuario ";
$sql = mysqli_query($link,$busca);

while($row  = mysqli_fetch_assoc($sql)) { 

  echo"<tr>";	
  echo"<td>".$row["Nome_Completo"]."</td>";
  echo"<td>".$row["CPF"]."</td>";
  echo"<td>".$row["Apelido"]."</td>";
  echo"<td>".$row["Sexo"]."</td>";
  echo"<td>".$row["Data_Nascimento"]."</td>";
  echo"<td>".$row["E_mail"]."</td>";
  echo"<td>".$row["Telefone_Fixo"]."</td>";
  echo"<td>".$row["Telefone_Celular"]."</td>";
  echo"<td>".$row["Estado"]."</td>";
  echo"<td>".$row["Cidade"]."</td>";
  echo"<td>".$row["CEP"]."</td>";
  echo"<td>".$row["Usuario"]."</td>";
  echo"<td>".$row["Senha"]."</td>";

  echo"<tr></td>";	

}

?>