<!-- Динамическое заполнение таблицы с цыплятами -->

<?php
    require_once("connect.php");

    $query = "SELECT reg_num FROM chikens";

    $result = mysqli_query($link, $query) or die(mysqli_error($link));

    for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
    ?>

    <?php
        foreach($data as $elem){
    ?>
        <tr>
        <?php
            foreach($elem as $e){
                 // Создание новых цыплят, если были добавлены новые
                 $chiken->setChikens($e);
        ?>
            <td><?=$e?></td>
        <?php
            }
        ?>
            <td class="egg"><?= Animals::getEggs() ?></td>
        </tr>
    <?php
        }
    ?>
