@extends('main')

@section('content')

<main class="row py-5 d-flex justify-content-center bg-white">
  <div class="container">
    <div class="row border-bottom py-2 my-3 px-4">
      <div class="col-2 text-left">
        <img src="holder.js/40x40?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="" class="rounded-circle">
      </div>
      <div class="col">
        <div class="d-block text-center">
          <span class="font-weight-bold">Username</span>      
          <span class="">One of three columns</span>      
          <span class="text-muted mx-2">1d.</span>
        </div>
      </div>
      <div class="col-3 text-right">
        <Button class="btn btn-primary">Follow</Button>
      </div>
    </div>
    <div class="row border-bottom py-2 my-3 px-4">
      <div class="col-2 text-left">
        <img src="holder.js/40x40?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="" class="rounded-circle">
      </div>
      <div class="col">
        <div class="d-block text-center">
          <span class="font-weight-bold">Username</span>      
          <span class="">One of three columns</span>      
          <span class="text-muted mx-2">1d.</span>
        </div>
      </div>
      <div class="col-3 text-right">
        <Button class="btn btn-primary">Follow</Button>
      </div>
    </div>
  </div>
</main>

@endsection('content')