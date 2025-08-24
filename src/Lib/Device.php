<?php

namespace Ahsan\AhsanZkteco\Lib;

use Ahsan\AhsanZkteco\AhsanZkteco;

class Device
{
    /**
     * @return bool|mixed
     */
    public static function name(AhsanZkteco $self)
    {
        $self->_section = __METHOD__;

        $command = Util::CMD_DEVICE;
        $command_string = '~DeviceName';

        return $self->_command($command, $command_string);
    }

    /**
     * @return bool|mixed
     */
    public static function enable(AhsanZkteco $self)
    {
        $self->_section = __METHOD__;

        $command = Util::CMD_ENABLE_DEVICE;
        $command_string = '';

        return $self->_command($command, $command_string);
    }

    /**
     * @return bool|mixed
     */
    public static function disable(AhsanZkteco $self)
    {
        $self->_section = __METHOD__;

        $command = Util::CMD_DISABLE_DEVICE;
        $command_string = chr(0).chr(0);

        return $self->_command($command, $command_string);
    }

    /**
     * @return bool|mixed *** this will turn off the device
     */
    public static function powerOff(AhsanZkteco $self)
    {
        $self->_section = __METHOD__;

        $command = Util::CMD_POWEROFF;
        $command_string = chr(0).chr(0);

        return $self->_command($command, $command_string);
    }

    /**
     * @return bool|mixed *** this will restart the device
     */
    public static function restart(AhsanZkteco $self)
    {
        $self->_section = __METHOD__;

        $command = Util::CMD_RESTART;
        $command_string = chr(0).chr(0);

        return $self->_command($command, $command_string);
    }

    /**
     * @return bool|mixed *** this will sleep the device
     */
    public static function sleep(AhsanZkteco $self)
    {
        $self->_section = __METHOD__;

        $command = Util::CMD_SLEEP;
        $command_string = chr(0).chr(0);

        return $self->_command($command, $command_string);
    }

    /**
     * @return bool|mixed *** this will resume the device from sleep
     */
    public static function resume(AhsanZkteco $self)
    {
        $self->_section = __METHOD__;

        $command = Util::CMD_RESUME;
        $command_string = chr(0).chr(0);

        return $self->_command($command, $command_string);
    }

    /**
     * @return bool|mixed *** this will play voice "Thank you"
     */
    public static function testVoice(AhsanZkteco $self)
    {
        $self->_section = __METHOD__;

        $command = Util::CMD_TESTVOICE;
        $command_string = chr(0).chr(0);

        return $self->_command($command, $command_string);
    }

    /**
     * @return bool|mixed *** this will clear the LCD screen
     */
    public static function clearLCD(AhsanZkteco $self)
    {
        $self->_section = __METHOD__;

        $command = Util::CMD_CLEAR_LCD;

        return $self->_command($command, '');
    }

    /**
     * @param  $rank  *** Line number of text
     * @param  $text  *** Text which will display in the LCD screen
     * @return bool|mixed *** this will write text into the LCD
     */
    public static function writeLCD(AhsanZkteco $self, $rank, $text)
    {
        $self->_section = __METHOD__;

        $command = Util::CMD_WRITE_LCD;
        $byte1 = chr((int) ($rank % 256));
        $byte2 = chr((int) ($rank >> 8));
        $byte3 = chr(0);
        $command_string = $byte1.$byte2.$byte3.' '.$text;

        return $self->_command($command, $command_string);
    }
}
