<?php

if (isset($_POST['submit']))
{
    $name = $_POST['name'];
    $number = $_POST['number'];

    $mailTo = "itskhaloufali@gmail.com";
    $headers = " From: ".$name;
    $txt = "The number is:".$number;

    mail($mailTo,$name,$number);
    header("Location: index.php");
}


?>