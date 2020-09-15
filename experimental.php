<?php

// CALC PIZZA PRICE
function calcPizzaPrice($pizzaPrice)
{
    if ($pizzaPrice == 'marguerita') {
        $cost = 5;
    }
    if ($pizzaPrice == 'golden') {
        $cost = 100;
    }

    if ($pizzaPrice == 'calzone') {
        $cost = 10;
    }

    if ($pizzaPrice == 'hawai') {
        throw new Exception('Computer says no');
    }

    return $cost;
}

// ORDER PIZZA
function orderPizza($pizzaType, $customer)
{
    $address = '';
    $price = calcPizzaPrice($pizzaType);


    if ($customer == 'koen') {
        $address = 'a yacht in Antwerp';
    } else {
        if ($customer == 'manuele') {
            $address = 'somewhere in Belgium';
        }

        if ($customer == 'students') {
            $address = 'BeCode office';
        }
    }

    // echo output
    echo '<b>Creating new order...</b>';
    echo '<br>';
    echo "A {$pizzaType} pizza should be sent to {$customer}";
    echo '<br>';
    echo 'The address: ' . $address;
    echo '<br>';
    echo 'The bill is €' . $price;
    echo '<br>';
    echo 'Order finished.';
    echo '<br>';
    echo '<br>';
}


// ORDER ALL PIZZAS
function orderAllPizza()
{
    orderPizza('calzone', 'koen');
    orderPizza('marguerita', 'manuele');
    orderPizza('golden', 'students');
}

orderAllPizza();
