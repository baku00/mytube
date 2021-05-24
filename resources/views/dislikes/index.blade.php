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
    .c-title{
      font-size: 1.575rem;
    }
    .c-img img{
      width: 150px;
    }
    .c-img{
      margin-right: 10px;
    }
    .c-info>.c-description>p{
      font-size: 16px;
      margin-bottom: 0;
    }
    .d-flex > * {
      margin-right: 10px;
    }
  </style>
@endsection

@section('content')
<div class="content">
    <div class="row justify-content-center">
        <div class="col-md-8 v-post">
          <h1>Vidéos likées</h1>
          @foreach ($dislikes as $index => $dislike)
            <div class="card c">
              <div class="card-body d-flex">
                <div class="c-img">
                  <img src="{{$dislike->video->miniature}}" alt="{{$dislike->video->miniature}}">
                </div>
                <div class="c-info">
                  <div class="title">
                    <h3><a href="">{{$dislike->video->title}}</a></h3>
                  </div>
                  <div class="c-content">
                    <p>{{$dislike->content}}</p>
                  </div>
                  <div class="d-flex">
                    <div class="c-likes">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill c-likes-logo" viewBox="0 0 16 16">
                        <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                        <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
                        <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                      </svg>
                      <span class="c-likes-number">{{count($dislike->video->likes)}}</span>
                    </div>
                    <div class="c-likes">
                      @include('includes.icons.like',['liked'=>false])
                      <span class="c-likes-number">{{count($dislike->video->likes)}}</span>
                    </div>
                    <div class="c-dislikes">
                      @include('includes.icons.dislike',['disliked'=>false])
                      <span class="c-dislikes-number">{{count($dislike->video->dislikes)}}</span>
                    </div>
                  </div>
                  <a href="{{route('video.show',$dislike->video->id)}}">Accéder à la vidéo</a>
                </div>
              </div>
            </div>
          @endforeach
        </div>
    </div>
</div>
@endsection
