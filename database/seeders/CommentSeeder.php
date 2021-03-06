<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Video;
use App\Models\Comment;

class CommentSeeder extends Seeder
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

      for ($i=0; $i < 10000; $i++) {
        $user_id = $users[mt_rand(0,count($users)-1)]->id;
        $video_id = $videos[mt_rand(0,count($videos)-1)]->id;
        $content = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';

        Comment::create([
          'user_id'=>$user_id,
          'video_id'=>$video_id,
          'content'=>$content
        ]);
      }
    }
}
