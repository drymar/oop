<?php

namespace OOP\PlanetClasses;

use OOP\Classes\Planet;
use OOP\Interfaces\JupiterInterface;

class Jupiter extends Planet implements JupiterInterface
{
    protected $planet = 'Jupiter';

    public function __construct()
    {
        parent::__construct();
        $this->planet;
    }

    public function jupiter()
    {
        parent::setProperty(' Jupiter',' 141 920 km',' fifth',' 67');
        echo 'Name:' .$this->name. '<br>';
        echo 'Diametr:'. $this->diametr. '<br>';
        echo 'Number:' .$this->number. '<br>';
        echo 'Has satellites:' .$this->satellites. '<br><hr>';
    }
}
