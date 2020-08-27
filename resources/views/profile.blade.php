@extends('main')

@section('content')

<main class="row py-5 d-flex justify-content-center">
  <div class="container">

    <!-- profile top -->
    <div class="row py-2 my-3 px-4">
      <div class="col-lg-4 text-center">
        <img src="holder.js/180x180?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="" class="rounded-circle">
      </div>
      <div class="col-lg-5">
        <div class="row my-3 d-flex align-items-center">
            <div class="col h2 text-center">
                praveensoniofficial
            </div>
            <div class="col text-center">
                <Button class="btn btn-sm btn-primary btn-block">Follow</Button>
            </div>
        </div>
        <div class="row my-3 d-flex justify-content-center">
            <div class="col text-left">
                <a class="text-decoration-none h6">
                133 <br/> posts
                </a>
            </div>
            <div class="col text-center">
                <a class="text-decoration-none h6">
                133 <br/> followers
                </a>
            </div>
            <div class="col text-right">
                <a class="text-decoration-none h6">
                123 <br/> following
                </a>
            </div>
        </div>
        <div class="row my-3">
          <div class="col h6 text-uppercase">Praveen Soni</div>
        </div>
        <div class="row my-3">
          <div class="col">
          I always want to be a student so that I can learn new things every day
          .
          #TRAVELER 🎒
          #Writer ✍️
          #Programmer 👨‍💻
          #Guitarist 🎸
          #StudentOfZindagi 😇
          .
          </div>
        </div>
        <div class="row">
          <div class="col">
            <a>praveensoniofficial.github.io</a>
          </div>
        </div>
      </div>
    </div>

    <!-- profile bottom -->
    <div class="container">
        <ul class="nav nav-tabs d-flex justify-content-center" id="myTab" role="tablist">
          <li class="nav-item mx-2" role="presentation">
            <a class="nav-link text-uppercase active" id="posts-tab" data-toggle="tab" href="#posts" role="tab" aria-controls="posts" aria-selected="true">Posts</a>
          </li>
          <li class="nav-item mx-2" role="presentation">
            <a class="nav-link text-uppercase" id="saved-tab" data-toggle="tab" href="#saved" role="tab" aria-controls="saved" aria-selected="false">Saved</a>
          </li>
          <li class="nav-item mx-2" role="presentation">
            <a class="nav-link text-uppercase" id="tagged-tab" data-toggle="tab" href="#tagged" role="tab" aria-controls="tagged" aria-selected="false">Tagged</a>
          </li>
        </ul>
    </div>
    <div class="row">
      <div class="col d-flex justify-content-center">                
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="posts" role="tabpanel" aria-labelledby="posts-tab">
            <div class="container-fluid">
              <div class="row py-2 d-flex justify-content-center">
                <div style="width:30%" class="mx-1 my-1">
                  <img src="{{secure_asset('public/post.jpg')}}" class="img-fluid" alt="..." style="min-height:110px;width:100%;">
                </div>
                <div style="width:30%" class="mx-1 my-1">
                  <img src="{{secure_asset('public/post.jpg')}}" class="img-fluid" alt="..." style="min-height:110px;width:100%;">
                </div>
                <div style="width:30%" class="mx-1 my-1">
                  <img src="{{secure_asset('public/post.jpg')}}" class="img-fluid" alt="..." style="min-height:110px;width:100%;">
                </div>
                <div style="width:30%" class="mx-1 my-1">
                  <img src="{{secure_asset('public/post.jpg')}}" class="img-fluid" alt="..." style="min-height:110px;width:100%;">
                </div>
                <div style="width:30%" class="mx-1 my-1">
                  <img src="{{secure_asset('public/post.jpg')}}" class="img-fluid" alt="..." style="min-height:110px;width:100%;">
                </div>
                <div style="width:30%" class="mx-1 my-1">
                  <img src="{{secure_asset('public/post.jpg')}}" class="img-fluid" alt="..." style="min-height:110px;width:100%;">
                </div>
                <div style="width:30%" class="mx-1 my-1">
                  <img src="{{secure_asset('public/post.jpg')}}" class="img-fluid" alt="..." style="min-height:110px;width:100%;">
                </div>
                <div style="width:30%" class="mx-1 my-1">
                  <img src="{{secure_asset('public/post.jpg')}}" class="img-fluid" alt="..." style="min-height:110px;width:100%;">
                </div>
                <div style="width:30%" class="mx-1 my-1">
                  <img src="{{secure_asset('public/post.jpg')}}" class="img-fluid" alt="..." style="min-height:110px;width:100%;">
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="saved" role="tabpanel" aria-labelledby="saved-tab">
            <div class="container-fluid">
              <div class="row py-2 d-flex justify-content-center">
                <div style="width:30%" class="mx-1 my-1">
                  <img src="{{secure_asset('public/post.jpg')}}" class="img-fluid" alt="..." style="min-height:110px;width:100%;">
                </div>
                <div style="width:30%" class="mx-1 my-1">
                  <img src="{{secure_asset('public/post.jpg')}}" class="img-fluid" alt="..." style="min-height:110px;width:100%;">
                </div>
                <div style="width:30%" class="mx-1 my-1">
                  <img src="{{secure_asset('public/post.jpg')}}" class="img-fluid" alt="..." style="min-height:110px;width:100%;">
                </div>
                <div style="width:30%" class="mx-1 my-1">
                  <img src="{{secure_asset('public/post.jpg')}}" class="img-fluid" alt="..." style="min-height:110px;width:100%;">
                </div>
                <div style="width:30%" class="mx-1 my-1">
                  <img src="{{secure_asset('public/post.jpg')}}" class="img-fluid" alt="..." style="min-height:110px;width:100%;">
                </div>
                <div style="width:30%" class="mx-1 my-1">
                  <img src="{{secure_asset('public/post.jpg')}}" class="img-fluid" alt="..." style="min-height:110px;width:100%;">
                </div>
                <div style="width:30%" class="mx-1 my-1">
                  <img src="{{secure_asset('public/post.jpg')}}" class="img-fluid" alt="..." style="min-height:110px;width:100%;">
                </div>
                <div style="width:30%" class="mx-1 my-1">
                  <img src="{{secure_asset('public/post.jpg')}}" class="img-fluid" alt="..." style="min-height:110px;width:100%;">
                </div>
                <div style="width:30%" class="mx-1 my-1">
                  <img src="{{secure_asset('public/post.jpg')}}" class="img-fluid" alt="..." style="min-height:110px;width:100%;">
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="tagged" role="tabpanel" aria-labelledby="tagged-tab">          
            <div class="container-fluid">
              <div class="row py-2 d-flex justify-content-center">
                <div style="width:30%" class="mx-1 my-1">
                  <img src="{{secure_asset('public/post.jpg')}}" class="img-fluid" alt="..." style="min-height:110px;width:100%;">
                </div>
                <div style="width:30%" class="mx-1 my-1">
                  <img src="{{secure_asset('public/post.jpg')}}" class="img-fluid" alt="..." style="min-height:110px;width:100%;">
                </div>
                <div style="width:30%" class="mx-1 my-1">
                  <img src="{{secure_asset('public/post.jpg')}}" class="img-fluid" alt="..." style="min-height:110px;width:100%;">
                </div>
                <div style="width:30%" class="mx-1 my-1">
                  <img src="{{secure_asset('public/post.jpg')}}" class="img-fluid" alt="..." style="min-height:110px;width:100%;">
                </div>
                <div style="width:30%" class="mx-1 my-1">
                  <img src="{{secure_asset('public/post.jpg')}}" class="img-fluid" alt="..." style="min-height:110px;width:100%;">
                </div>
                <div style="width:30%" class="mx-1 my-1">
                  <img src="{{secure_asset('public/post.jpg')}}" class="img-fluid" alt="..." style="min-height:110px;width:100%;">
                </div>
                <div style="width:30%" class="mx-1 my-1">
                  <img src="{{secure_asset('public/post.jpg')}}" class="img-fluid" alt="..." style="min-height:110px;width:100%;">
                </div>
                <div style="width:30%" class="mx-1 my-1">
                  <img src="{{secure_asset('public/post.jpg')}}" class="img-fluid" alt="..." style="min-height:110px;width:100%;">
                </div>
                <div style="width:30%" class="mx-1 my-1">
                  <img src="{{secure_asset('public/post.jpg')}}" class="img-fluid" alt="..." style="min-height:110px;width:100%;">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

@endsection('content')