<?php

namespace Ahsan\AhsanZkteco\Lib;

use Ahsan\AhsanZkteco\AhsanZkteco;

class WorkCode
{
    /**
     * @return bool|mixed
     */
    public static function get(AhsanZkteco $self)
    {
        $self->_section = __METHOD__;

        $command = Util::CMD_DEVICE;
        $command_string = 'WorkCode';

        return $self->_command($command, $command_string);
    }
}
