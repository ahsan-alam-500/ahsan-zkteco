<?php

namespace Ahsan\AhsanZkteco\Commands;

use Illuminate\Console\Command;

class AhsanZktecoCommand extends Command
{
    public $signature = 'ahsan-zkteco';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
