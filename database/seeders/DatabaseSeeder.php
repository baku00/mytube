<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Creator;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(2000)->create();
        $users = User::all();

        foreach ($users as $index => $user) {
          Creator::create(['user_id'=>$user->id]);
        }

        $this->call([
          VideoSeeder::class,
          CommentSeeder::class,
          LikeSeeder::class,
          SubscriberSeeder::class,
        ]);
    }
}
