<?php

namespace Ahsan\AhsanZkteco\Lib;

use Ahsan\AhsanZkteco\AhsanZkteco;

class Ssr
{
    /**
     * @return bool|mixed
     */
    public static function get(AhsanZkteco $self)
    {
        $self->_section = __METHOD__;

        $command = Util::CMD_DEVICE;
        $command_string = '~SSR';

        return $self->_command($command, $command_string);
    }
}
