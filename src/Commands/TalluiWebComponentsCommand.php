<?php

namespace Tallui\Commands;

use Illuminate\Console\Command;

class TalluiWebComponentsCommand extends Command
{
    public $signature = 'tallui-web-components';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
