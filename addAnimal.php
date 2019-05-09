<!-- Добавление животного в БД -->

<?php
    require_once("connect.php");
    require_once("animals.php");

    $num = $_GET["reg_num"];
    $name = $_GET["animal"];

    if(!Animals::checkAnimal($name, $num))
        Animals::addAnimal($link, $name, $num);

    header('Location: http://s1.localhost/Exercise/main.php');
