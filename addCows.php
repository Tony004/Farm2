<!-- Изначальные коровы -->

<?php
    require_once('connect.php');

    for($i = 1; $i < 11; $i++){
        $num = $i*100;
        $query = "INSERT INTO cows VALUES ($num)";
        mysqli_query($link, $query);
    }
