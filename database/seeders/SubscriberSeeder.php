<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Subscriber;

class SubscriberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $users = User::all();

      $subscribed = [];

      for ($i=0; $i < count($users)*(count($users)/100); $i++) {
        $user_id = 0;

        do{
          $user_id = $users[mt_rand(0,count($users)-1)]->id;
        }while(in_array($user_id,$subscribed));

        $creator_id = 0;

        do{
          $creator_id = $users[mt_rand(0,count($users)-1)]->id;
        }while(in_array($creator_id,$subscribed) || $user_id === $creator_id);

        Subscriber::create([
          'creator_id'=>$creator_id,
          'user_id'=>$user_id,
        ]);
      }
    }
}
