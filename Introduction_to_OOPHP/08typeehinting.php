<?php

//without typehinting
class Calculator
{
    protected $total = 0;

    public function add($values)
    {
        if (!is_array($values)) {
            return;
        }

        foreach ($values as $value) {
            $this->total += $value;
        }
    }

    public function total()
    {
        return $this->total;
    }
}

$calculator = new Calculator();
$calculator->add([2, 4, 6]);

echo $calculator->total();

//with typehinting
class CalculatorTyp
{
    protected $total = 0;

    public function add(array $values)
    {
        foreach ($values as $value) {
            $this->total += $value;
        }
    }

    public function total()
    {
        return $this->total;
    }
}

$calculator = new Calculator();
$calculator->add([2, 4, 6]);

echo $calculator->total();

interface ItemInterface
{
    public function setCost(float $cost);
    public function getCost();
}
class Item implements ItemInterface
{
    protected $cost = 0;

    public function getCost()
    {
        return $this->cost;
    }

    public function setCost(float $cost)
    {
        $this->cost = $cost;
    }
}


class Cart
{
    protected $items = [];

    public function add(ItemInterface $item)
    {
        $this->items[] = $item;
    }

    public function total()
    {
        $total = 0;

        foreach ($this->items as $item) {
            $total += $item->getCost();
        }

        return $total;
    }
}

$item1 = new Item;
$item1->setCost(5);

$item2 = new Item();
$item2->setCost(20.50);

$cart = new Cart();
$cart->add($item1);
$cart->add($item2);

echo $cart->total();

$cart->add($cart); //error without typehinting
echo $cart->total();