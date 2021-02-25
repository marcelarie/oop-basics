
<?php

class DeviceManager extends ElectronicDevice
{
    public function getDeviceSerialNumber(ElectronicDevice $device)
    {
        return $device->getSerialNumber();
    }
}
