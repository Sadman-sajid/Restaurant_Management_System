<?php
namespace model;

class payment
{
    public $price;
    public $qty;
    public $bill;

    public function total($qty,$price)
    {
        $this->qty=$qty;
        $this->price=$price;
        $this->bill=$this->qty * $this->price;
        return $this->bill; 
    }
}