<?php
include ("conexao.php");

$sql= "SELECT * FROM cliente";

$res = $mysqli-> query($sql);
$qtd = $res->num_rows;

if ($res) {
    $qtd = $res->num_rows;

    if ($qtd > 0) {
        while ($row = $res->fetch_object()) {
            // Substitua pelos nomes corretos das colunas
            print "Data Check-in: " . $row->  data_checkin . "<br>";
            print "Data Check-out: " . $row-> data_checkout. "<br><br>";
        }
    } else {
        print "<p class='alert alert-danger'>Não encontrou resultados!</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Perfil do Cliente</title>
 

  <style>
    body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  background-color: #F5F5DC;
}

.header {
  background-color: #F5F5DC;

color: #FFFFFF;
padding: 1rem 0;
}

.container {
width: 90%;
max-width: 1200px;
margin: 0 auto;
display: flex;
justify-content: space-between;
align-items: center;
}

.logo {
font-family: 'Playfair Display', serif;
font-size: 1.8rem;
font-weight: bold;
color:#4E3629;
}

.nav a {
font-family: 'Playfair Display', serif;
font-size: 1.3rem;
color: #4E3629;
text-decoration: none;
margin: 0 1rem;
font-weight: bold;
transition: color 0.3s ease;
}

.nav a:hover {
color: #F5F5DC;
}

.profile-container {
  max-width: 600px;
  margin: 20px auto;
  background: #ffffff;
  border-radius: 8px;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
  overflow: hidden;
}

.profile-header {
  text-align: center;
  padding: 20px;
  background: #A67B5B ;
  color: white;
}

.profile-picture {
  width: 100px;
  height: 100px;
  border-radius: 50%;
  margin-bottom: 10px;
}

.profile-header h1 {
  margin: 10px 0 5px;
  font-size: 24px;
}

.profile-header p {
  margin: 0;
  font-size: 14px;
}

.reservations {
  padding: 20px;
}

.reservations h2 {
  margin-bottom: 10px;
  font-size: 20px;
  color: #333;
}

.reservation-list {
  list-style: none;
  padding: 0;
  margin: 0;
}

.reservation-list li {
  background: #f4f4f4;
  margin-bottom: 10px;
  padding: 15px;
  border-radius: 5px;
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
}

.reservation-list h3 {
  margin: 0 0 5px;
  font-size: 18px;
  color: #4E3629;
}

.reservation-list p {
  margin: 5px 0;
  font-size: 14px;
  color: #555;
}

  </style>
</head>
<body>

<header class="header">
    <div class="container">
      <h1 class="logo">La Serpiente de Cristal</h1>
      <nav class="nav">
        <a href="home.php">Inicio</a>
        <a href="reserva_cad.php">Serviços e reserva</a>
      </nav>
    </div>
  </header>

  <div class="profile-container">
    <div class="profile-header">
      <img src="img/perfil-removebg-preview.png" alt="Foto do Cliente" class="profile-picture">
      <h1>SEU PERFIL</h1>
    </div>
    <div class="reservations">
      <h2>Reservas</h2>
      <ul class="reservation-list">
        <li>
          <h3></h3>
          <p></p>
          <p></p>
        </li>
        <li>
          <h3></h3>
          <p></p>
          <p></p>
        </li>
        <li>
          <h3></h3>
          <p></p>
          <p></p>
        </li>
      </ul>
    </div>
  </div>
</body>
</html>
