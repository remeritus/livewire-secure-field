<?php

namespace Remeritus\LivewireSecureField\Commands;

use Illuminate\Console\Command;

class LivewireSecureFieldCommand extends Command
{
    public $signature = 'livewire-secure-field';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
