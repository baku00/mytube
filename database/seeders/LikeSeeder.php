<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Video;
use App\Models\Like;
use App\Models\Dislike;

class LikeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $users = User::all();
      $videos = Video::all();

      $liked = [];

      for ($i=0; $i < count($users)*(count($users)/100); $i++) {
        $user_id = 0;

        do{
          $user_id = $users[mt_rand(0,count($users)-1)]->id;
        }while(in_array($user_id,$liked));

        $video_id = $videos[mt_rand(0,count($videos)-1)]->id;
        $like = mt_rand(0,2);

        if ($like === 0) {
          Like::create([
            'user_id'=>$user_id,
            'creator_id'=>Video::find($video_id)->creator->id,
            'video_id'=>$video_id,
          ]);
        }elseif ($like === 1) {
          Dislike::create([
            'user_id'=>$user_id,
            'creator_id'=>Video::find($video_id)->creator->id,
            'video_id'=>$video_id,
          ]);
        }
      }
    }
}
