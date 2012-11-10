<?php

namespace OOP\PlanetClasses;

use OOP\Classes\Planet;
use OOP\Interfaces\EarthInterface;

class Earth extends Planet implements EarthInterface
{
    protected $planet = 'Earth';

    public function __construct()
    {
        parent::__construct();
        $this->planet;
    }

    public function earth()
    {
        //echo $this->setProperty('Earth','12 160','3','1');
        parent::setProperty(' Earth',' 12 160 km',' third',' 1');
        echo 'Name:' .$this->name. '<br>';
        echo 'Diametr:'. $this->diametr. '<br>';
        echo 'Number:' .$this->number. '<br>';
        echo 'Has satellites:' .$this->satellites. '<br><hr>';
    }



}
