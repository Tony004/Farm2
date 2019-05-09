<!-- Провека цыпленка по номеру  -->
<?php
    if(!empty($_POST)){
        $num = $_POST["check_reg"];
        $str = "";

        $check = $chiken->checkChiken($num);

        if($check)
            $str = "Найден цыпленок с таким номером";
        else {
            $check = $cow->checkCow($num);
            if($check)
                $str = "Найдена корова с таким номером";
            else
                $str = "Животное с таким номером не найдено";
        }
?>
    let str = "<?= $str ?>";
    let check = document.getElementById('check');
    check.innerHTML = str;
<?php
    }
?>
