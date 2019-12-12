<?php


class promo
{
    private $dishname;
    private $price;
    private $date;

    function __construct($dishname, $price, $date)
    {
        $this->dishname = $dishname;
        $this->price = $price;
        $this->date = $date;
    }
    function getdishname()
    {
        return $this->dishname;
    }
    function getprice()
    {
        return $this->price;
    }
    function getdate()
    {
        return $this->date;
    }
}
