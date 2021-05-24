<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Video;
use App\Models\User;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $srcs = [
          '5cda57413b64c81e916922cc11bfa25b',
          '9adb6ecf96e87efc42249b907384ae8c',
          '66c2bb20e3bfaea0f737e88442ead30a',
          '082c06499b246013b75222191c9a5794',
          '202cb962ac59075b964b07152d234b70',
          '2137fdf0bfd728a7edd78a1ce9cca50c',
          '4396724b3938251814f6e2122d987a01',
          'd840cc5d906c3e9c84374c8919d2074e',
        ];

        $users = User::all();

        for ($i=0; $i < 100; $i++) {
          $creator_id = $users[mt_rand(1,count($users)-1)]->id;
          $title = 'Ma vidéo n°'.$i;
          $description = 'La description n°'.$i;
          $src = $srcs[mt_rand(1,count($srcs)-1)];

          Video::create([
            'creator_id'=>$creator_id,
            'title'=>$title,
            'description'=>$description,
            'src'=>$src,
            'video_ext'=>'mp4',
            'miniature_ext'=>'jpg',
          ]);
        }
    }
}
