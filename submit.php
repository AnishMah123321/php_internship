<?php
include_once "connection.php";
if(isset($_POST['submit'])){
    $name = html_entity_decode($_POST['fullName'], ENT_QUOTES);
    $email = html_entity_decode($_POST['email'], ENT_QUOTES);
    $no = html_entity_decode($_POST['contact'], ENT_QUOTES);
    $mssg = html_entity_decode($_POST['mssg'], ENT_QUOTES);
    $stmt = "INSERT INTO `sendmail` (`id`, `name`, `email`, `contact`, `message`) VALUES (NULL, '$name', '$email', '$no', '$mssg');"; 
    $qry = mysqli_query($conn,$stmt);
}



?>