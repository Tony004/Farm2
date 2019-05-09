<!-- Динамическое заполнение таблицы с коровами -->

<?php
    require_once("connect.php");

    $query = "SELECT reg_num FROM cows";

    $result = mysqli_query($link, $query) or die(mysqli_error($link));

    for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
    ?>

    <?php
        foreach($data as $elem){
    ?>
        <tr>
        <?php
            foreach($elem as $e){
                // Создание коров, если вдруг были добавлены новые
                $cow->setCows($e);
        ?>
            <td><?=$e?></td>
        <?php
            }
        ?>
            <td class="milk"><?= Animals::getMilk() ?></td>
        </tr>
    <?php
        }
    ?>
