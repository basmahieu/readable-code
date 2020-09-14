<?php

// ORDER PIZZA
function orderPizza($pizzatype, $forWho)
{
    $address = '';
    $price = calcPizzaPrice($pizzatype);

    if ($forWho == 'koen') {
        $address = 'a yacht in Antwerp';
    } elseif ($forWho == 'manuele') {
        $address = 'somewhere in Belgium';
    } elseif ($forWho == 'students') {
        $address = 'BeCode office';
    }

    echo 'Creating new order...';
    echo '<br>';
    echo 'A ' . $pizzatype . ' pizza should be sent to ' . $forWho;
    echo '<br>';
    echo 'The address: ' . $address;
    echo '<br>';
    echo 'The bill is €' . $price;
    echo '<br>';
    echo "Order finished.";
    echo '<br>';
    echo '<br>';
}


// CALC PIZZA PRICE
function calcPizzaPrice($pizzaPrice)
{

    if ($pizzaPrice == 'marguerita') {
        $cost = 5;
    } else {
        if ($pizzaPrice == 'golden') {
            $cost = 100;
        }

        if ($pizzaPrice == 'calzone') {
            $cost = 10;
        }

        if ($pizzaPrice == 'hawai') {
            throw new Exception('Computer says no');
        }
    }

    return $cost;
}


// ORDER ALL PIZZAS
function orderAllPizza()
{
    orderPizza('calzone', 'koen');
    orderPizza('marguerita', 'manuele');
    orderPizza('golden', 'students');
}

orderAllPizza();


// TOTAL PRICE
function totalPrice($price)
{
    return $price;
}
