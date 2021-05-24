@extends('layouts.app')

@section('style')
  <style media="screen">
    .v-miniature{
      width: 100%;
    }
    .v-card{
      margin-bottom: 20px;
    }
    .btn-like{
      color:blue;
    }
    .btn-dislike{
      color:red;
    }
    .v-title{
      font-size: 1.575rem;
    }
  </style>
@endsection

@section('content')
<div class="container">
    @if(env('APP_DEMO'))
      <div class="users">
        <ul>
          @foreach ($users as $index => $user)
            <li><span onclick="document.getElementById('form-{{$index}}').submit()">{{$user->email}}</span><form id="form-{{$index}}" class="hidden" action="{{route('login')}}" method="post">
              @csrf
              <input type="hidden" name="email" value="{{$user->email}}">
              <input type="hidden" name="password" value="password">
            </form></li>
          @endforeach
        </ul>
      </div>
    @endif
    <form action="{{route('search')}}">
      <div class="row">
        <div class="form-group col-md-11">
          <input type="text" name="q" value="{{@$q}}" class="form-control">
        </div>
        <div class="form-group col-md-1">
          <button type="submit" class="btn btn-primary">@include('includes.icons.search')</button>
        </div>
      </div>
    </form>
    <div id="videos" class="row justify-content-center">
      @foreach ($videos as $index => $video)
        @include('includes.card.videos')
      @endforeach
    </div>
    <div class="hidden">
      <div id="video-card">
        @include('includes.card.videos')
      </div>
    </div>
</div>
@endsection

@section('script')
  <script type="text/javascript" src="{{asset('/js/videos/callVideos.js')}}"></script>
  <script type="text/javascript" src="{{asset('/js/videos/createVideoCard.js')}}"></script>
@endsection
