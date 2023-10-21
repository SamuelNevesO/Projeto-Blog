<?php
include "../config/connection.php";

$stmt = $conectar->prepare("INSERT INTO posts (title, description, data, image, category) VALUES(:TITLE, :DESCRIPTION, :DATA, :IMAGE, :CATEGORY)");

   $title = $_POST['title'];
   $data = $_POST['data'];
   $description = $_POST['description'];
   $category=$_POST['inlineRadioOptions'];

   $arquivo = $_FILES['image'];

   move_uploaded_file($arquivo['tmp_name'], '../uploads/'.$arquivo['name']);

   $image = 'uploads/'.$arquivo['name'];


   $stmt->bindParam(":TITLE", $title);
   $stmt->bindParam(":DESCRIPTION", $description);
   $stmt->bindParam(":DATA", $data);
   $stmt->bindParam(":IMAGE", $image);
   $stmt->bindParam(":CATEGORY",$category);
   $stmt->execute();

   /*redireciona o arquivo */
   header("Location: view2.php");


?>