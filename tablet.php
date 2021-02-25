
<?php

class Tablet extends ElectronicDevice
{
    protected $stylus;
    public function __construct($name, $screen, $battery, $speaker, $wifiAntena, $stylus)
    {
        parent::__construct($name, $screen, $battery, $speaker, $wifiAntena);
        $this->stylus = $stylus;
    }
}
