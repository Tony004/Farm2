// Определение окончания в зависимости от количества

function countEggs(eggs){
        if(eggs % 100 > 4 && eggs % 100 < 15)
        return "яиц";
            if(eggs % 10 > 4 && eggs % 10 < 10)
            return "яиц";
                else if(eggs % 10 > 1 && eggs % 10 < 5)
                return "яйца";
                    else if(eggs % 10 == 1)
                    return "яйцо";
                        else if(eggs % 10 == 0)
                        return "яиц";
}

function countMilk(milk){
    if(milk % 100 > 4 && milk % 100 < 15)
    return "литров";
        if(milk % 10 > 4 && milk % 10 < 10)
        return "литров";
            else if(milk % 10 > 1 && milk % 10 < 5)
            return "литра";
                else if(milk % 10 == 1)
                return "литр";
                    else if(milk % 10 == 0)
                    return "литров";
}
