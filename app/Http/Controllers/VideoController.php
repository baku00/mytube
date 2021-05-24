<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;
use App\Models\Like;
use App\Models\Dislike;
use App\Models\Creator;
use Auth;
use App\Models\Subscriber;
use Illuminate\Support\Facades\Storage;
use App\Models\User;

class VideoController extends Controller
{
     /**
      * Show the application dashboard.
      *
      * @return \Illuminate\Contracts\Support\Renderable
      */
     public function index()
     {
         $videos = Video::inRandomOrder()->get();
         $users = User::inRandomOrder()->limit(10)->get();
         return view('home',['videos'=>$videos,'users'=>$users]);
     }

    /**
     * Appelle de vidéos lors d'un scroll sur la page
     *
     * @param Illuminate\Http\Request $req
     * @param integer $number
     *
     * @return array
     */
    public function callVideo(Request $req,$number)
    {
      $videos = Video::inRandomOrder()->get();
      return $videos;
    }

    /**
     * Page de recherche de vidéo
     *
     * @param Illuminate\Http\Request $req
     *
     * @return view
     */
    public function search(Request $req)
    {
      $q = $req->query('q');
      $videos = Video::where('title','LIKE','%'.$q.'%')->get();
      return view('home',['videos'=>$videos,'q'=>$q]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('video.create.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
         'title'=>'required|string',
         'description'=>'required|string',
         'video'=>'required',
         'miniature'=>'required',
        ]);

        $upload_video['title'] = $request->input('title');
        $upload_video['description'] = $request->input('description');
        $upload_video['file'] = $request->file('video');
        $upload_video['miniature'] = $request->file('miniature');
        $upload_video['token'] = md5(time().$upload_video['title'].$upload_video['description'].Auth::user()->email);

        if(Creator::find(Auth::id()) === null)
          Creator::create(['user_id'=>Auth::id()]);

        $datas = [
          'creator_id'=>Auth::user()->creator->id,
          'title'=>$upload_video['title'],
          'description'=>$upload_video['description'],
          'src'=>$upload_video['token'],
          'video_ext'=>$upload_video['file']->getClientOriginalExtension(),
          'miniature_ext'=>$upload_video['miniature']->getClientOriginalExtension(),
        ];

        $video = Video::create($datas);

        $upload_video['miniature']->storeAs('public/videos/'.$upload_video['token'],'miniature.'.$datas['miniature_ext']);
        $upload_video['file']->storeAs('public/videos/'.$upload_video['token'],'video.'.$datas['video_ext']);

        return redirect()->route('video.show',$video->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Video $video)
    {
      $videos = Video::inRandomOrder()->get();
      $liked = Like::where(['user_id'=>Auth::id(),'video_id'=>$video->id])->get()->first();
      $disliked = Dislike::where(['user_id'=>Auth::id(),'video_id'=>$video->id])->get()->first();
      $subscriber = Subscriber::where(['user_id'=>Auth::id(),'creator_id'=>$video->creator->id])->get()->first();
      $subscribers = Subscriber::where(['creator_id'=>$video->creator->id])->get();

      return view('video.show',
        [
          'video'=>$video,
          'videos'=>$videos,
          'comments'=>$video->comments,
          'liked'=>$liked,
          'disliked'=>$disliked,
          'isSubscribed'=>$subscriber,
          'subscribers'=>$subscribers,
          'comment_id'=>$request->query('id') ?? -1,
        ]
      );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function edit(Video $video)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Video $video)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function destroy(Video $video)
    {
        //
    }
}
