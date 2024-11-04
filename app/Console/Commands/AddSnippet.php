<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class AddSnippet extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:add-snippet {title} {content}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Add a Snippet';

    /**
     * Execute the console command.
     */
    public function handle()
    {
      $this->info('Hola: ' . $this->argument('title') . $this->argument('content'));
    }
}
