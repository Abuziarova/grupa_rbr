<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Http\Controllers\ApiServiceController;

class PostCreate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'post:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        $apiService = new ApiServiceController();
        $faker = \Faker\Factory::create();
        $title = $faker->word;
        $content = $faker->paragraph;
        $author = $faker->name();
        $apiService->spostCreate($title, $content, $author);
        
        $this->info('Successfully created daily post');
    }
}
