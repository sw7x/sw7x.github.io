<?php

include 'functions.php';

if (!empty($_POST))
{

    $data['success'] = true;
    $_POST  = multiDimensionalArrayMap('cleanEvilTags', $_POST);
    $_POST  = multiDimensionalArrayMap('cleanData', $_POST);

    //your email adress
    $emailTo ="susanthawarnapura@gmail.com"; //"yourmail@yoursite.com";
    $emailTo .= ", tnbuddhika@gmail.com";

    //from email adress
    $emailFrom ="Webdesignerssrilanka_contactForm@webdesignerssrilanka.lk"; //"contact@yoursite.com";

    //email subject
    $emailSubject = "Mail from Webdesigners.lk";

    $name = $_POST["name"];
    $email = $_POST["email"];
    $comment = $_POST["comment"];
    $phone = $_POST["phone"];

    if($name == ""){$data['success'] = false;}
    if(!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $email)){$data['success'] = false;}
    if(!preg_match("/^\s*(?:\+?(\d{1,3}))?[-. (]*(\d{3})[-. )]*(\d{3})[-. ]*(\d{4})(?: *x(\d+))?\s*$/i", $phone)){$data['success'] = false;}
    if($comment == ""){$data['success'] = false;}


     if($data['success'] == true)
     {

          $message = "NAME: $name<br>
          EMAIL: $email<br>
          Phone: $phone<br>
          COMMENT: $comment";


          $headers = "MIME-Version: 1.0" . "\r\n";
          $headers .= "Content-type:text/html; charset=utf-8" . "\r\n";
          $headers .= "From: <$emailFrom>" . "\r\n";
          mail($emailTo, $emailSubject, $message, $headers);

          $data['success'] = true;
          echo json_encode($data);
    }
}