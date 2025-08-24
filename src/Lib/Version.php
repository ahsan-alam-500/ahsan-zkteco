<?php

namespace Ahsan\AhsanZkteco\Lib;

use Ahsan\AhsanZkteco\AhsanZkteco;

class Version
{
    /**
     * @return bool|mixed
     */
    public static function get(AhsanZkteco $self)
    {
        $self->_section = __METHOD__;

        $command = Util::CMD_VERSION;
        $command_string = '';

        return $self->_command($command, $command_string);
    }
}
