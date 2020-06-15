<?php

use App\Model\Comment;
use App\Model\Movie;
use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(User::class, 10)->create();
        factory(Movie::class, 10)->create();
        factory(Comment::class, 30)->create();
    }
}
