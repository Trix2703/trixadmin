<?php

namespace App\Console\Commands\Trix;

use Illuminate\Console\Command;

class CreatePage extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'trix:page {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create new page for admin panel';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->call('make:controller', [
            "name"=>'Trix/'.$this->argument('name'),
        ]);
    }
}
