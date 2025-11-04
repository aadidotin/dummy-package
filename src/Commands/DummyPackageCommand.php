<?php

namespace Apack\DummyPackage\Commands;

use Illuminate\Console\Command;

class DummyPackageCommand extends Command
{
    public $signature = 'dummy-package';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
