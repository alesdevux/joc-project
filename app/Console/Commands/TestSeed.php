<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class TestSeed extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test:seed {--filter=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'make test and then refresh database with seeder';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $filter = $this->option('filter');
        
        $this->call('test', [
            '--filter' => $filter
        ]);
        $this->call('migrate:fresh');
        $this->call('db:seed');

    }
}
