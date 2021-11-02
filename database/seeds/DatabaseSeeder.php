<?php

use App\Post;
use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 25)->create()->each(function ($u) {
            for ($i=0; $i <= 3; $i++) {
              $u->posts()->save(factory(Post::class)->make());
            }  
          });
    }
}
