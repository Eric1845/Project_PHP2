<?php

  $host = "localhost";
  $dbname = "agenda";
  $user = "root";
  $pass = "";

  try {

    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

  } catch(PDOException $e) {
    // erro de conexao
    $error = $e->getMessage();
    echo "Erro: $error";
  }