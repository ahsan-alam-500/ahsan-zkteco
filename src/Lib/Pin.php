<?php

namespace Ahsan\AhsanZkteco\Lib;

use Ahsan\AhsanZkteco\AhsanZkteco;

class Pin
{
    /**
     * @return bool|mixed
     */
    public static function width(AhsanZkteco $self)
    {
        $self->_section = __METHOD__;

        $command = Util::CMD_DEVICE;
        $command_string = '~PIN2Width';

        return $self->_command($command, $command_string);
    }
}
