<?php

namespace OOP\PlanetClasses;

use OOP\Classes\Planet;
use OOP\Interfaces\MarsInterface;

class Mars extends Planet implements MarsInterface
{
    protected $planet = 'Mars';

    public function __construct()
    {
        parent::__construct();
        $this->planet;
    }

    public function mars()
    {
        parent::setProperty(' Mars',' 6780 km',' fouth',' 2');
        echo 'Name:' .$this->name. '<br>';
        echo 'Diametr:'. $this->diametr. '<br>';
        echo 'Number:' .$this->number. '<br>';
        echo 'Has satellites:' .$this->satellites. '<br><br>';
    }
}
