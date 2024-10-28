<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Tags\Tag;
use Illuminate\Support\Facades\DB;

class CleanUnusedTags extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'tags:clean-unused';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Remove all tags that are not being used';

    /**
     * Execute the console command.
     */
    public function handle()
    {

      $tags = Tag::all();
      $unusedTags = 0;

      foreach ($tags as $tag) {
        $isUsed = DB::table('taggables')
          ->where('tag_id', $tag->id)
          ->exists();

        if (!$isUsed) {
          $tag->delete();
          $unusedTags++;
        }

      }

      $this->info("Se eliminaron {$unusedTags} tags no utilizados.");

    }
}
