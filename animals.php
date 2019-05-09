<?php
    class Animals{
        // Массивы
        private $chikens;
        private $cows;

        public function getChikens(){
            return $this->chikens;
        }

        public function getCows(){
            return $this->cows;
        }

        public function setChikens($num){
            $this->chikens[] = $num;
        }

        public function setCows($num){
            $this->cows[] = $num;
        }

        //Проверка на существование цыпленка
        public function checkChiken($num){
            $flag = false;
            foreach($this->chikens as $chiken)
                if($chiken == $num)
                    $flag = true;

            return $flag;
        }

        //Проверка на существование коровы
        public function checkCow($num){
            $flag = false;
            foreach($this->cows as $cow)
                if($cow == $num)
                    $flag = true;

            return $flag;
        }

        //Добавление животного в БД
        static public function addAnimal($link, $name, $num){
            $query = "INSERT INTO $name VALUES ($num)";
            mysqli_query($link, $query);
        }

        // Кладка яиц. От 0 до 1
        static public function getEggs(){
            $num = rand(0, 1);
            echo $num;
        }

        // Надой молока. От 8 до 12
        static public function getMilk(){
            $num = rand(8, 12);
            echo $num;
        }

        //Проверка номера животного
        static public function checkAnimal($name, $num){
            $chekcAnimal = false;
            if($name == "chiken")
                $checkAnimal = $this->checkChiken($num);
            if($name == "cow")
                $checkAnimal = $this->checkCow($num);

            return $checkAnimal;
        }

    }

    // Создание объектов цыплята и коровы
    $chiken = new Animals();
    $cow = new Animals();
