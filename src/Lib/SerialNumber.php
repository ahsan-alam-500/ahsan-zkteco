<?php

namespace Ahsan\AhsanZkteco\Lib;

use Ahsan\AhsanZkteco\AhsanZkteco;

class SerialNumber
{
    /**
     * @return bool|mixed
     */
    public static function get(AhsanZkteco $self)
    {
        $self->_section = __METHOD__;

        $command = Util::CMD_DEVICE;
        $command_string = '~SerialNumber';

        return $self->_command($command, $command_string);
    }
}
