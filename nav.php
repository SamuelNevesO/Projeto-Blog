<?php 
include "config/connection.php"; 

$stmt = $conectar->prepare("SELECT * FROM posts ORDER BY id DESC");
$stmt->execute();

$results = $stmt->fetchALL(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog::Samuel</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
</head>
<body>
  
            <nav class="navbar navbar-expand-lg navbar-bg bg-danger">
             <div class="container">
            <a class="navbar-brand" href="index.php"><img src="images/cartas.png" alt="logo" width=30px heigth= 30px></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
	          <a class="nav-link" href="category.php?cat=Cat-1">Notícias</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="category.php?cat=Cat-2">Times</a>
	        </li>

                <li class="nav-item">
                <a class="nav-link ">Contato</a>
                </li>
                </ul>
                 <form class="d-flex" action="buscar.php" role="search" method="post">
                <input class="form-control me-2" type="search" name="buscar" placeholder="Buscar" aria-label="Buscar">
                <button class="btn btn-outline-light" type="submit">Pesquisar</button>
                 </form>
                 </div>
                 </div>
             </nav>