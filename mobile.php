<?php

class Mobile extends ElectronicDevice
{
    protected $buttons;

    public function __construct($name, $screen, $battery, $speaker, $wifiAntena, $buttons)
    {
        parent::__construct($name, $screen, $battery, $speaker, $wifiAntena);
        $this->brand = $buttons;
    }
}
