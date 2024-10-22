<?php

namespace Saphircrud\Saphir\Console\Commands;

use Illuminate\Console\Command;

class Mycommand extends Command
{
    // Define the name and signature of the command.
    protected $signature = 'mycommand';

    // Define the description of the command.
    protected $description = 'This is my custom command from a package';

    // Execute the console command.
    public function handle()
    {
        $this->info('My Custom Command executed successfully.');
    }
}