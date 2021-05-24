<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use Illuminate\Http\Request;
use Auth;

class SubscriptionController extends Controller
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
        $subscriptions = Subscriber::where(['user_id'=>Auth::id()])->get();
        return view('subscriptions.index',['subscriptions'=>$subscriptions]);
    }
}
