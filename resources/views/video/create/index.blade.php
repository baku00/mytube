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
      /* text-align: center; */
    }
    .v-description{
      font-size: 1.2rem;
    }
    .row,.v-post,.v-post-card,.card-body{
      height: 100%;
    }
    #form-post{
      height: 100%;
    }
    #form-post{
      height: 75%;
      border: 3px rgb(124, 124, 124);
      border-style: dashed;
      border-radius: 20px;
    }
    .v-post-video{
      width: 75%;
      margin: auto;
      vertical-align: middle;
    }

  </style>
@endsection

@section('content')
<div class="content">
    <div class="row justify-content-center">
        <div class="col-md-12 v-post">
          <div class="card v-post-card">
            <div class="card-body">
              <form id="form-post" action="{{route('video.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="v-post-video">
                  <div class="form-group">
                    <label for="video">Vidéo</label>
                    <input type="file" name="video" value="" id="video" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="miniature">Miniature</label>
                    <input type="file" name="miniature" value="" id="miniature" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="title">Titre</label>
                    <input type="text" name="title" value="" id="title" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" rows="4" cols="40" id="description" class="form-control"></textarea>
                  </div>
                  <div class="form-group">
                    <button type="submit" name="button" class="btn btn-primary">Publier ma vidéo</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
    </div>
</div>
@endsection
