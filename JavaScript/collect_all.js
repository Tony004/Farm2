//Подсчет всей продукции
let btn = document.getElementById('collect');
let collEggs = document.getElementById('collectedEggs');
let collMilk = document.getElementById('collectedMilk');

btn.addEventListener('click', function(){
//Берем все яйца и молоко из скрипта counting_prod

    let ending = countEggs(allEggs);

    collEggs.innerHTML = "Всего собрано " + allEggs + " " + ending;

    ending = "";
    ending = countMilk(allMilk);

    collMilk.innerHTML = "Всего собрано " + allMilk + " " + ending;
});
