<?php
include('config.php');

if (isset($_POST['submit'])) {
    $name=$_POST['name'];
    $name=$_POST['email'];
    $name=$_POST['pass'];
    $name=$_POST['phone'];
    $name=$_POST['gender'];

    $query='INSERT INTO (`name`,`email`,`pass`,`phone`,`gender`) values()';
}

?>