<?php

class ElectronicDevice
{
    protected $name;
    protected $serialNumber = rand();
    protected $screen;
    protected $battery;
    protected $speaker;
    protected $wifiAntena;

    public function __construct($name, $screen, $battery, $speaker, $wifiAntena)
    {
        $this->name= $name;
        $this->screen = $screen;
        $this->battery= $battery;
        $this->speaker= $speaker;
        $this->wifiAntena= $wifiAntena;
    }

    protected function getSerialNumber()
    {
        return $this->serialNumber;
    }
}
