// Подсчет продукции при загрузке страницы

let eggs = document.getElementsByClassName('egg');
let milk = document.getElementsByClassName('milk');
let egg_info = document.getElementById('all_eggs');
let milk_info = document.getElementById('all_milk');

let allEggs = 0;
for(let egg of eggs)
    allEggs += +egg.innerHTML;

let allMilk = 0;
    for(let liters of milk)
    allMilk += +liters.innerHTML;


let ending = countEggs(allEggs);

egg_info.innerHTML = "Итого: " + allEggs + " " + ending;

    ending = "";

    ending = countMilk(allMilk);

milk_info.innerHTML = "Итого: " + allMilk + " " + ending;
