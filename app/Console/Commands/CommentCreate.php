<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Post;
use App\Http\Controllers\ApiServiceController;

class CommentCreate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'comment:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Creating comment to random post every 36 minutes';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $post_ids = Post::select('id')->get();
        $random_id = $post_ids[rand(1, count($post_ids))];
        $apiService = new ApiServiceController();
        $apiService->commentCreate($random_id->id, 'tak', 'automat');
        $this->info('Successfully created comment');
    }
}
