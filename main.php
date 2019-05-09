<?php
    require_once("animals.php");
    // Получение 10 коров и 20 цыплят
    require_once("addChikens.php");
    require_once("addCows.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- jQuery -->
    <script
	    src="https://code.jquery.com/jquery-3.4.1.min.js"
         integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
          crossorigin="anonymous">
    </script>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
       crossorigin="anonymous">
       <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
         crossorigin="anonymous"></script>
       <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
         crossorigin="anonymous"></script>
    <title>Farm</title>
</head>
<body>

        <!-- Форма добавления животного -->
        <em><p>Добавить животное</p></em>
        <form action="addAnimal.php" method="GET">
            <div class="form-row align-items-center">
                <input type="number" placeholder="Reg number" name="reg_num" class="col-auto">

                <div class="col-auto">
                    <input type="radio" name="animal" id="cow" value="cows">
                    <label for="cow">Cow</label>
                </div>

                <div class="col-auto">
                    <input type="radio" name="animal" id="chiken" value="chikens">
                    <label for="chiken">Chiken</label>
                </div>

                <input type="submit" class="btn btn-primary col-auto" value="Добавить животное">
            </div>
        </form>

        <!-- Форма проверки животного по номеру -->
        <em><p>Проверить животное</p></em>
        <form action="" method="POST">
            <div class="form-row align-items-center">
                <div class="col-auto">
                    <input type="number" placeholder="Reg number" name="check_reg">
                    <input type="submit" class="btn btn-primary" value="Проверить животное">
                </div>
            </div>
        </form>
        <em><p id="check"></p></em>

    <!-- Таблицы -->
    <div class="row">
        <div class="col-md-3">
            <em><p>Chikens</p></em>
            <table class="table table-striped table-bordered">
                <thead class="thead-light">
                    <tr>
                        <th>Регистрационный номер</th>
                        <th>Снесла</th>
                    </tr>
                </thead>
                <?php include("table_chikens.php"); ?>
            </table>
            <em><p id="all_eggs"></p></em>
        </div>

        <div class="col-md-3">
            <em><p>Cows</p></em>
            <table class="table col-md-4 table-striped table-bordered">
                <thead class="thead-light">
                    <tr>
                        <th>Регистрационный номер</th>
                        <th>Надой</th>
                    </tr>
                </thead>
                <?php include("table_cows.php"); ?>
            </table>
            <em><p id="all_milk"></p></em>
        </div>
    </div>

    <!-- Сбор всей продукции -->
    <button id="collect" class="btn btn-primary">Собрать</button>
    <em><p id="collectedEggs"></p></em>
    <em><p id="collectedMilk"></p></em>

    <!-- Скрипты -->
    <script src="JavaScript/countEnding.js" charset="utf-8"></script>
    <script src="JavaScript/counting_prod.js" charset="utf-8"></script>
    <script src="JavaScript/collect_all.js" charset="utf-8"></script>
    <script><?php include("checkAnimal.php") ?></script>
</body>
</html>
