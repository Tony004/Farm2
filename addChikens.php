<!-- Изначальные цыплята -->

<?php
    require_once('connect.php');

    for($i = 1; $i < 21; $i++){
        $num = $i*1000;
        $query = "INSERT INTO chikens VALUES ($num)";
        mysqli_query($link, $query);
    }
