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
    .a-title{
      font-size: 1.575rem;
    }
    .a-img img{
      width: 150px;
    }
    .a-img{
      margin-right: 10px;
    }
    .a-info>.a-description>p{
      font-size: 16px;
      margin-bottom: 0;
    }
  </style>
@endsection

@section('content')
<div class="content">
    <div class="row justify-content-center">
        <div class="col-md-8 v-post">
          <h1>Abonnés</h1>
          <div class="card a">
            <div class="card-body d-flex">
              <div class="a-img">
                <img src="{{asset('img/maquettes/video-comment.jpg')}}" alt="https://swiss-image.ch/fileadmin/_processed_/csm_Swiss_Image_sts8595_788cf78097.jpg">
              </div>
              <div class="a-info">
                <div class="title">
                  <h3><a href="">Ma chaine</a></h3>
                </div>
                <div class="a-description">
                  <p>Ceci est une description de chaine</p>
                </div>
                <div class="a-subscribers">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill a-subscribers-logo" viewBox="0 0 16 16">
                    <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                    <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
                    <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                  </svg>
                  <span class="a-subscribers-number">500</span>
                </div>
                <a href="">Voir la chaine</a>
              </div>
            </div>
          </div>
          <div class="card a">
            <div class="card-body d-flex">
              <div class="a-img">
                <img src="{{asset('img/maquettes/video-comment.jpg')}}" alt="https://swiss-image.ch/fileadmin/_processed_/csm_Swiss_Image_sts8595_788cf78097.jpg">
              </div>
              <div class="a-info">
                <div class="title">
                  <h3><a href="">Ma chaine</a></h3>
                </div>
                <div class="a-description">
                  <p>Ceci est une description de chaine</p>
                </div>
                <div class="a-subscribers">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill a-subscribers-logo" viewBox="0 0 16 16">
                    <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                    <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
                    <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                  </svg>
                  <span class="a-subscribers-number">500</span>
                </div>
                <a href="">Voir la chaine</a>
              </div>
            </div>
          </div>
          <div class="card a">
            <div class="card-body d-flex">
              <div class="a-img">
                <img src="{{asset('img/maquettes/video-comment.jpg')}}" alt="https://swiss-image.ch/fileadmin/_processed_/csm_Swiss_Image_sts8595_788cf78097.jpg">
              </div>
              <div class="a-info">
                <div class="title">
                  <h3><a href="">Ma chaine</a></h3>
                </div>
                <div class="a-description">
                  <p>Ceci est une description de chaine</p>
                </div>
                <div class="a-subscribers">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill a-subscribers-logo" viewBox="0 0 16 16">
                    <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                    <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
                    <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                  </svg>
                  <span class="a-subscribers-number">500</span>
                </div>
                <a href="">Voir la chaine</a>
              </div>
            </div>
          </div>
          <div class="card a">
            <div class="card-body d-flex">
              <div class="a-img">
                <img src="{{asset('img/maquettes/video-comment.jpg')}}" alt="https://swiss-image.ch/fileadmin/_processed_/csm_Swiss_Image_sts8595_788cf78097.jpg">
              </div>
              <div class="a-info">
                <div class="title">
                  <h3><a href="">Ma chaine</a></h3>
                </div>
                <div class="a-description">
                  <p>Ceci est une description de chaine</p>
                </div>
                <div class="a-subscribers">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill a-subscribers-logo" viewBox="0 0 16 16">
                    <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                    <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
                    <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                  </svg>
                  <span class="a-subscribers-number">500</span>
                </div>
                <a href="">Voir la chaine</a>
              </div>
            </div>
          </div>
          <div class="card a">
            <div class="card-body d-flex">
              <div class="a-img">
                <img src="{{asset('img/maquettes/video-comment.jpg')}}" alt="https://swiss-image.ch/fileadmin/_processed_/csm_Swiss_Image_sts8595_788cf78097.jpg">
              </div>
              <div class="a-info">
                <div class="title">
                  <h3><a href="">Ma chaine</a></h3>
                </div>
                <div class="a-description">
                  <p>Ceci est une description de chaine</p>
                </div>
                <div class="a-subscribers">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill a-subscribers-logo" viewBox="0 0 16 16">
                    <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                    <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
                    <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                  </svg>
                  <span class="a-subscribers-number">500</span>
                </div>
                <a href="">Voir la chaine</a>
              </div>
            </div>
          </div>
          <div class="card a">
            <div class="card-body d-flex">
              <div class="a-img">
                <img src="{{asset('img/maquettes/video-comment.jpg')}}" alt="https://swiss-image.ch/fileadmin/_processed_/csm_Swiss_Image_sts8595_788cf78097.jpg">
              </div>
              <div class="a-info">
                <div class="title">
                  <h3><a href="">Ma chaine</a></h3>
                </div>
                <div class="a-description">
                  <p>Ceci est une description de chaine</p>
                </div>
                <div class="a-subscribers">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill a-subscribers-logo" viewBox="0 0 16 16">
                    <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                    <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
                    <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                  </svg>
                  <span class="a-subscribers-number">500</span>
                </div>
                <a href="">Voir la chaine</a>
              </div>
            </div>
          </div>
          <div class="card a">
            <div class="card-body d-flex">
              <div class="a-img">
                <img src="{{asset('img/maquettes/video-comment.jpg')}}" alt="https://swiss-image.ch/fileadmin/_processed_/csm_Swiss_Image_sts8595_788cf78097.jpg">
              </div>
              <div class="a-info">
                <div class="title">
                  <h3><a href="">Ma chaine</a></h3>
                </div>
                <div class="a-description">
                  <p>Ceci est une description de chaine</p>
                </div>
                <div class="a-subscribers">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill a-subscribers-logo" viewBox="0 0 16 16">
                    <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                    <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
                    <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                  </svg>
                  <span class="a-subscribers-number">500</span>
                </div>
                <a href="">Voir la chaine</a>
              </div>
            </div>
          </div>
          <div class="card a">
            <div class="card-body d-flex">
              <div class="a-img">
                <img src="{{asset('img/maquettes/video-comment.jpg')}}" alt="https://swiss-image.ch/fileadmin/_processed_/csm_Swiss_Image_sts8595_788cf78097.jpg">
              </div>
              <div class="a-info">
                <div class="title">
                  <h3><a href="">Ma chaine</a></h3>
                </div>
                <div class="a-description">
                  <p>Ceci est une description de chaine</p>
                </div>
                <div class="a-subscribers">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill a-subscribers-logo" viewBox="0 0 16 16">
                    <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                    <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
                    <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                  </svg>
                  <span class="a-subscribers-number">500</span>
                </div>
                <a href="">Voir la chaine</a>
              </div>
            </div>
          </div>
          <div class="card a">
            <div class="card-body d-flex">
              <div class="a-img">
                <img src="{{asset('img/maquettes/video-comment.jpg')}}" alt="https://swiss-image.ch/fileadmin/_processed_/csm_Swiss_Image_sts8595_788cf78097.jpg">
              </div>
              <div class="a-info">
                <div class="title">
                  <h3><a href="">Ma chaine</a></h3>
                </div>
                <div class="a-description">
                  <p>Ceci est une description de chaine</p>
                </div>
                <div class="a-subscribers">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill a-subscribers-logo" viewBox="0 0 16 16">
                    <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                    <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
                    <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                  </svg>
                  <span class="a-subscribers-number">500</span>
                </div>
                <a href="">Voir la chaine</a>
              </div>
            </div>
          </div>
          <div class="card a">
            <div class="card-body d-flex">
              <div class="a-img">
                <img src="{{asset('img/maquettes/video-comment.jpg')}}" alt="https://swiss-image.ch/fileadmin/_processed_/csm_Swiss_Image_sts8595_788cf78097.jpg">
              </div>
              <div class="a-info">
                <div class="title">
                  <h3><a href="">Ma chaine</a></h3>
                </div>
                <div class="a-description">
                  <p>Ceci est une description de chaine</p>
                </div>
                <div class="a-subscribers">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill a-subscribers-logo" viewBox="0 0 16 16">
                    <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                    <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
                    <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                  </svg>
                  <span class="a-subscribers-number">500</span>
                </div>
                <a href="">Voir la chaine</a>
              </div>
            </div>
          </div>
          <div class="card a">
            <div class="card-body d-flex">
              <div class="a-img">
                <img src="{{asset('img/maquettes/video-comment.jpg')}}" alt="https://swiss-image.ch/fileadmin/_processed_/csm_Swiss_Image_sts8595_788cf78097.jpg">
              </div>
              <div class="a-info">
                <div class="title">
                  <h3><a href="">Ma chaine</a></h3>
                </div>
                <div class="a-description">
                  <p>Ceci est une description de chaine</p>
                </div>
                <div class="a-subscribers">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill a-subscribers-logo" viewBox="0 0 16 16">
                    <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                    <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
                    <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                  </svg>
                  <span class="a-subscribers-number">500</span>
                </div>
                <a href="">Voir la chaine</a>
              </div>
            </div>
          </div>
          <div class="card a">
            <div class="card-body d-flex">
              <div class="a-img">
                <img src="{{asset('img/maquettes/video-comment.jpg')}}" alt="https://swiss-image.ch/fileadmin/_processed_/csm_Swiss_Image_sts8595_788cf78097.jpg">
              </div>
              <div class="a-info">
                <div class="title">
                  <h3><a href="">Ma chaine</a></h3>
                </div>
                <div class="a-description">
                  <p>Ceci est une description de chaine</p>
                </div>
                <div class="a-subscribers">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill a-subscribers-logo" viewBox="0 0 16 16">
                    <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                    <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
                    <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                  </svg>
                  <span class="a-subscribers-number">500</span>
                </div>
                <a href="">Voir la chaine</a>
              </div>
            </div>
          </div>
          <div class="card a">
            <div class="card-body d-flex">
              <div class="a-img">
                <img src="{{asset('img/maquettes/video-comment.jpg')}}" alt="https://swiss-image.ch/fileadmin/_processed_/csm_Swiss_Image_sts8595_788cf78097.jpg">
              </div>
              <div class="a-info">
                <div class="title">
                  <h3><a href="">Ma chaine</a></h3>
                </div>
                <div class="a-description">
                  <p>Ceci est une description de chaine</p>
                </div>
                <div class="a-subscribers">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill a-subscribers-logo" viewBox="0 0 16 16">
                    <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                    <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
                    <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                  </svg>
                  <span class="a-subscribers-number">500</span>
                </div>
                <a href="">Voir la chaine</a>
              </div>
            </div>
          </div>
          <div class="card a">
            <div class="card-body d-flex">
              <div class="a-img">
                <img src="{{asset('img/maquettes/video-comment.jpg')}}" alt="https://swiss-image.ch/fileadmin/_processed_/csm_Swiss_Image_sts8595_788cf78097.jpg">
              </div>
              <div class="a-info">
                <div class="title">
                  <h3><a href="">Ma chaine</a></h3>
                </div>
                <div class="a-description">
                  <p>Ceci est une description de chaine</p>
                </div>
                <div class="a-subscribers">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill a-subscribers-logo" viewBox="0 0 16 16">
                    <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                    <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
                    <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                  </svg>
                  <span class="a-subscribers-number">500</span>
                </div>
                <a href="">Voir la chaine</a>
              </div>
            </div>
          </div>
          <div class="card a">
            <div class="card-body d-flex">
              <div class="a-img">
                <img src="{{asset('img/maquettes/video-comment.jpg')}}" alt="https://swiss-image.ch/fileadmin/_processed_/csm_Swiss_Image_sts8595_788cf78097.jpg">
              </div>
              <div class="a-info">
                <div class="title">
                  <h3><a href="">Ma chaine</a></h3>
                </div>
                <div class="a-description">
                  <p>Ceci est une description de chaine</p>
                </div>
                <div class="a-subscribers">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill a-subscribers-logo" viewBox="0 0 16 16">
                    <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                    <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
                    <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                  </svg>
                  <span class="a-subscribers-number">500</span>
                </div>
                <a href="">Voir la chaine</a>
              </div>
            </div>
          </div>
          <div class="card a">
            <div class="card-body d-flex">
              <div class="a-img">
                <img src="{{asset('img/maquettes/video-comment.jpg')}}" alt="https://swiss-image.ch/fileadmin/_processed_/csm_Swiss_Image_sts8595_788cf78097.jpg">
              </div>
              <div class="a-info">
                <div class="title">
                  <h3><a href="">Ma chaine</a></h3>
                </div>
                <div class="a-description">
                  <p>Ceci est une description de chaine</p>
                </div>
                <div class="a-subscribers">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill a-subscribers-logo" viewBox="0 0 16 16">
                    <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                    <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
                    <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                  </svg>
                  <span class="a-subscribers-number">500</span>
                </div>
                <a href="">Voir la chaine</a>
              </div>
            </div>
          </div>
          <div class="card a">
            <div class="card-body d-flex">
              <div class="a-img">
                <img src="{{asset('img/maquettes/video-comment.jpg')}}" alt="https://swiss-image.ch/fileadmin/_processed_/csm_Swiss_Image_sts8595_788cf78097.jpg">
              </div>
              <div class="a-info">
                <div class="title">
                  <h3><a href="">Ma chaine</a></h3>
                </div>
                <div class="a-description">
                  <p>Ceci est une description de chaine</p>
                </div>
                <div class="a-subscribers">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill a-subscribers-logo" viewBox="0 0 16 16">
                    <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                    <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
                    <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                  </svg>
                  <span class="a-subscribers-number">500</span>
                </div>
                <a href="">Voir la chaine</a>
              </div>
            </div>
          </div>
        </div>
    </div>
</div>
@endsection
