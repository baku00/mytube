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
    .v-comment-img img{
      width: 150px;
    }
    .v-comment-img{
      margin-right: 10px;
    }
    .v-comment-info>.comment>p{
      font-size: 16px;
      margin-bottom: 0;
    }
  </style>
@endsection

@section('content')
<div class="content">
    <div class="row justify-content-center">
        <div class="col-md-8 v-post">
          <div class="card v-comment">
            <div class="card-body d-flex">
              <div class="v-comment-img">
                <img src="{{asset('img/maquettes/video-comment.jpg')}}" alt="https://swiss-image.ch/fileadmin/_processed_/csm_Swiss_Image_sts8595_788cf78097.jpg">
              </div>
              <div class="v-comment-info">
                <div class="title">
                  <h3><a href="">Ma première vidéo</a></h3>
                </div>
                  <div class="comment">
                    <p>Ceci est un commentaire</p>
                    <a href="">Voir le commentaire</a>
                  </div>
              </div>
            </div>
          </div>
          <div class="card v-comment">
            <div class="card-body d-flex">
              <div class="v-comment-img">
                <img src="{{asset('img/maquettes/video-comment.jpg')}}" alt="https://swiss-image.ch/fileadmin/_processed_/csm_Swiss_Image_sts8595_788cf78097.jpg">
              </div>
              <div class="v-comment-info">
                <div class="title">
                  <h3><a href="">Ma première vidéo</a></h3>
                </div>
                  <div class="comment">
                    <p>Ceci est un commentaire</p>
                    <a href="">Voir le commentaire</a>
                  </div>
              </div>
            </div>
          </div>
          <div class="card v-comment">
            <div class="card-body d-flex">
              <div class="v-comment-img">
                <img src="{{asset('img/maquettes/video-comment.jpg')}}" alt="https://swiss-image.ch/fileadmin/_processed_/csm_Swiss_Image_sts8595_788cf78097.jpg">
              </div>
              <div class="v-comment-info">
                <div class="title">
                  <h3><a href="">Ma première vidéo</a></h3>
                </div>
                  <div class="comment">
                    <p>Ceci est un commentaire</p>
                    <a href="">Voir le commentaire</a>
                  </div>
              </div>
            </div>
          </div>
          <div class="card v-comment">
            <div class="card-body d-flex">
              <div class="v-comment-img">
                <img src="{{asset('img/maquettes/video-comment.jpg')}}" alt="https://swiss-image.ch/fileadmin/_processed_/csm_Swiss_Image_sts8595_788cf78097.jpg">
              </div>
              <div class="v-comment-info">
                <div class="title">
                  <h3><a href="">Ma première vidéo</a></h3>
                </div>
                  <div class="comment">
                    <p>Ceci est un commentaire</p>
                    <a href="">Voir le commentaire</a>
                  </div>
              </div>
            </div>
          </div>
          <div class="card v-comment">
            <div class="card-body d-flex">
              <div class="v-comment-img">
                <img src="{{asset('img/maquettes/video-comment.jpg')}}" alt="https://swiss-image.ch/fileadmin/_processed_/csm_Swiss_Image_sts8595_788cf78097.jpg">
              </div>
              <div class="v-comment-info">
                <div class="title">
                  <h3><a href="">Ma première vidéo</a></h3>
                </div>
                  <div class="comment">
                    <p>Ceci est un commentaire</p>
                    <a href="">Voir le commentaire</a>
                  </div>
              </div>
            </div>
          </div>
          <div class="card v-comment">
            <div class="card-body d-flex">
              <div class="v-comment-img">
                <img src="{{asset('img/maquettes/video-comment.jpg')}}" alt="https://swiss-image.ch/fileadmin/_processed_/csm_Swiss_Image_sts8595_788cf78097.jpg">
              </div>
              <div class="v-comment-info">
                <div class="title">
                  <h3><a href="">Ma première vidéo</a></h3>
                </div>
                  <div class="comment">
                    <p>Ceci est un commentaire</p>
                    <a href="">Voir le commentaire</a>
                  </div>
              </div>
            </div>
          </div>
          <div class="card v-comment">
            <div class="card-body d-flex">
              <div class="v-comment-img">
                <img src="{{asset('img/maquettes/video-comment.jpg')}}" alt="https://swiss-image.ch/fileadmin/_processed_/csm_Swiss_Image_sts8595_788cf78097.jpg">
              </div>
              <div class="v-comment-info">
                <div class="title">
                  <h3><a href="">Ma première vidéo</a></h3>
                </div>
                  <div class="comment">
                    <p>Ceci est un commentaire</p>
                    <a href="">Voir le commentaire</a>
                  </div>
              </div>
            </div>
          </div>
        </div>
    </div>
</div>
@endsection
