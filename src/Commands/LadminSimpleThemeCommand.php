<?php

namespace LowB\LadminSimpleTheme\Commands;

use Illuminate\Console\Command;

class LadminSimpleThemeCommand extends Command
{
    public $signature = 'ladmin-simple-theme';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
