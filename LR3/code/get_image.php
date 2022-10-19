<?php
session_start();
if($_SESSION['user']){
    $file = file_get_contents('img/' . $_GET['img_path'], true);
    echo $file;
    //header('Content-type: image/jpeg');
    //imagejpeg(imagecreatefromjpeg('img/'. $_GET['img_path']));
}else{
    header('Location: login.php');
}
?>