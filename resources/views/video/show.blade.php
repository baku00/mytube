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
    #v-video{
      text-align: center;
    }
    .v-main-info{
      display: flex;
      justify-content: space-between;
    }
    .v-description{
      font-size: 1.2rem;
    }
    .v-comment{
      margin-bottom: 20px;
    }
    .v-comment-author{
      font-size: 1.1rem;
    }
    .v-comment-content{
      font-size: 1rem;
    }
    .v-menu-option div{
      margin-right: 10px;
    }
    .v-menu-option div>.number{
      text-align: center;
    }
    .selected-comment{
      background: rgb(74, 70, 255);
      color: white;
      padding: 10px;
      border-radius: 10px;
    }
  </style>
@endsection

@section('content')
<div>
    <div class="row justify-content-center">
        <div class="col-md-9">
          <div class="v-card">
            <div class="card">
              <div class="card-body">
                <div id="v-video">
                  <iframe width="1320" height="765" src="{{$video->video}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <hr>
                <div class="v-main-info d-flex">
                  <span class="v-title">{{$video->title}}</span>
                  <div class="v-menu-option d-flex">
                    <div class="subscribe">
                      <div class="logo" onclick="document.getElementById('form_subscribe').submit()">
                        @if($isSubscribed === null)
                          @include('includes.icons.subscribers')
                        @else
                          @include('includes.icons.subscribed')
                        @endif

                        @if($video->creator_id !== Auth::id())
                          @include('includes.forms.subscribe',
                          [
                            'id'=>$video->creator->id,
                            'route'=>$isSubscribed === null ? route('subscriber.store') : route('subscriber.destroy',$isSubscribed->id),
                            'method'=>$isSubscribed !== null ? 'delete' : null
                          ])
                        @endif
                      </div>
                      <div class="number">
                        <span>{{count($subscribers)}}</span>
                      </div>
                    </div>
                    <div class="like">
                      <div class="logo" onclick="document.getElementById('form_like').submit()">
                        @include('includes.icons.like',['id'=>'btn-like','liked'=>$liked !== null])
                        @if($video->creator_id !== Auth::id())
                          @include('includes.forms.like',['id'=>$liked !== null ? $liked->id : null])
                        @endif
                      </div>
                      <div class="number">
                        <span>{{count($video->likes)}}</span>
                      </div>
                    </div>
                    <div class="dislike">
                      <div class="logo" onclick="document.getElementById('form_dislike').submit()">
                        @php
                          $liked = $disliked;
                        @endphp
                        @include('includes.icons.dislike',['id'=>'btn-dislike','disliked'=>$liked])
                        @if($video->creator_id !== Auth::id())
                          @include('includes.forms.like',['prefix'=>'dis','id'=>$liked !== null ? $liked->id : null])
                        @endif
                      </div>
                      <div class="number">
                        <span>{{count($video->dislikes)}}</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="v-div-creator">
                  <a href="{{route('creator.show',$video->creator->id)}}"><h4>{{$video->creator->user->name}}</h4></a>
                  <div class="v-div-description">
                    <p class="v-description">{{$video->description}}</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @if(Auth::user() !== null)
            <div class="card v-card">
              <div class="card-body">
                <div class="v-post-comment">
                  <form action="{{route('comment.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                      <textarea id="comment" name="comment" rows="1" cols="40" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                      <button type="submit" name="button" class="btn btn-primary" onclick="">Ajouter un commentaire</button>
                      <button type="button" name="button" class="btn btn-secondary">Annuler</button>
                    </div>
                    <input type="hidden" name="video_id" value="{{$video->id}}">
                  </form>
                </div>
              </div>
            </div>
          @else
            <div class="card v-card">
              <div class="card-body">
                <a href="{{route('login')}}">Se connecter pour poster un comentaire</a>
              </div>
            </div>
          @endif
          <div class="card">
            <div class="card-body">
              @foreach ($comments as $key => $comment)
                <div id="{{$comment->id}}" class="v-comment {{$comment_id == $comment->id ? 'selected-comment' : ''}}">
                  <div class="v-comment-author">{{$comment->user->name}}</div>
                  <div class="v-comment-content">{{$comment->content}}</div>
                  <hr>
                </div>
              @endforeach
            </div>
          </div>
        </div>
        <div class="col-md-3">
          @foreach ($videos as $index => $current_video)
            @continue($video->id === $current_video->id)
            <div class="card v-card">
              <div class="card-body">
                <img src="{{$current_video->miniature}}" class="v-miniature">
                <hr>
                <div class="v-main-info">
                  <a href="{{route('video.show',$current_video->id)}}" class="v-title">{{$current_video->title}}</a>
                </div>
                <div class="d-flex">
                  <div class="comment">
                    @include('includes.icons.comment')
                    <span>{{count($current_video->comments)}}</span>
                  </div>
                  <div class="like">
                    @include('includes.icons.like',['liked'=>\App\Models\Like::where(['user_id'=>Auth::id(),'video_id'=>$current_video->id])->get()->first() !== null])
                    <span>{{count($current_video->likes ?? [0])}}</span>
                  </div>
                  <div class="dislike">
                    @include('includes.icons.dislike',['disliked'=>\App\Models\Dislike::where(['user_id'=>Auth::id(),'video_id'=>$current_video->id])->get()->first() !== null])
                    <span>{{count($current_video->dislikes ?? [0])}}</span>
                  </div>
                </div>
              </div>
            </div>
          @endforeach
          </div>
        </div>
    </div>
    <div class="hidden">
      <input type="hidden" id="video_id" name="video_id" value="{{$video->id}}">
    </div>
</div>
@endsection

@section('script')
  <script type="text/javascript" src="{{asset('/js/comment/postComment.js')}}"></script>
  <script type="text/javascript" src="{{asset('/js/videos/like.js')}}"></script>
@endsection
