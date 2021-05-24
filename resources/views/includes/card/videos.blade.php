<div class="col-md-4 v-card">
  <div class="card">
    <div class="card-body">
      <img src="{{$video->miniature}}" alt="{{$video->miniature}}" class="v-miniature model-miniature">
      <hr>
      <div class="v-main-info">
        <div class="v-div-title">
          <a href="{{route('video.show',$video->id)}}" class="v-title model-title">{{$video->title}}</a>
        </div>
        <div class="d-flex">
          <div class="comment">
            @include('includes.icons.comment')
            <span class="model-comment_number">{{count($video->comments)}}</span>
          </div>
          <div class="like">
            @include('includes.icons.like',['liked'=>false])
            <span class="model-like_number">{{count($video->likes)}}</span>
          </div>
          <div class="dislike">
            @include('includes.icons.dislike',['disliked'=>false])
            <span class="model-dislike_number">{{count($video->dislikes)}}</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
