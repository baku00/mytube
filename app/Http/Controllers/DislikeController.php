<?php

namespace App\Http\Controllers;

use App\Models\Dislike;
use App\Models\Like;
use App\Models\Video;
use Illuminate\Http\Request;
use Auth;

class DislikeController extends Controller
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
      $dislikes = Auth::user()->dislikes;
      return view('dislikes.index',['dislikes'=>$dislikes]);
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
          'video_id'=>'required',
        ]);

        $datas = [
          'user_id'=>Auth::id(),
          'creator_id'=>Video::find($request->input('video_id'))->creator->id,
          'video_id'=>$request->input('video_id')
        ];

        Dislike::create($datas);
        Like::where($datas)->delete();

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dislike  $dislike
     * @return \Illuminate\Http\Response
     */
    public function show(Dislike $dislike)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dislike  $dislike
     * @return \Illuminate\Http\Response
     */
    public function edit(Dislike $dislike)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dislike  $dislike
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dislike $dislike)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dislike  $dislike
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dislike $dislike)
    {
        $dislike->delete();

        return back();
    }
}
