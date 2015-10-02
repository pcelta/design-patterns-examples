<?php


namespace DP\Facade;


class Waiter 
{

    /**
     * @param string $drinkName
     * @param string $plateName
     * @return       Order
     */
    public function getMyOrder($drinkName, $plateName)
    {
        $chefCook = new ChefCook();
        $dinner = $chefCook->makeDinner($plateName);

        $barMan = new BarMan();
        $drink = $barMan->makeDrink($drinkName);

        $order = new Order();
        $order->addItem($drink);
        $order->addItem($dinner);

        return $order;
    }
}