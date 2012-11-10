<?php

namespace OOP\Classes;

abstract class Planet
{
    protected $name = 'Planet';
    protected $diametr;// = '12 160, 141 920 or 6780';
    protected $number;// = '3, 4 or 5';
    protected $satellites;// = '1, 2 or 67';
    protected $planet;

    public function __construct()
    {
        echo 'Property of ' .$this->name. ' - ' .$this->planet. '</br>';
    }

    public function setProperty($name, $diametr, $number, $satellites)
    {
        $this->name = $name;
        $this->diametr = $diametr;
        $this->number = $number;
        $this->satellites = $satellites;
    }
}
