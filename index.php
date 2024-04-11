<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>agenda</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Agenda da empresa Dante</h1>
    <img src="logo.jpg"><br>

    <a href="conecta.php"></a>
    <p>Nome: Telefone</p>
    <P id="agenda"></P>

    <connect class="php"></connect>

        <?php
    
        $servidor="localhost";
    $usuario="root";
    $senha="";
    $nomedb="escola2";
    //conexão
    $conn= new mysqli($servidor, $usuario, $senha, $nomedb);
    //checa conexão
    if ($conn->connect_error){
        die("Conexao falhou: " . $conn->connect_error);
    }
    echo"Conectado a agenda"."<br>";

    $sql = "SELECT * FROM agenda";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - nome: " . $row["nome"]. " " . $row["telefone"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();

    ?>

<p>produzido por: Carlinhos</p>
    
</body>
</html>