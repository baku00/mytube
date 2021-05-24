<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Dislike;
use App\Models\Video;
use Illuminate\Http\Request;
use Auth;

class LikeController extends Controller
{
    /**
     * Crée une nouvelle instance
     *
     * @return void
     */
    public function __construct()
    {
      $this->middleware(['auth']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $likes = Auth::user()->likes;
      return view('likes.index',['likes'=>$likes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
          'video_id'=>'required|numeric',
        ]);

        $datas = [
          'video_id'=>$request->input('video_id'),
          'creator_id'=>Video::find($request->input('video_id'))->creator->id,
          'user_id'=>Auth::id(),
        ];

        Like::create($datas);
        Dislike::where($datas)->delete();

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Like  $like
     * @return \Illuminate\Http\Response
     */
    public function show(Like $like)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Like  $like
     * @return \Illuminate\Http\Response
     */
    public function edit(Like $like)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Like  $like
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Like $like)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Like  $like
     * @return \Illuminate\Http\Response
     */
    public function destroy(Like $like)
    {
        $like->delete();

        return back();
    }
}
