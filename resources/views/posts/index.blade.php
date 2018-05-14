@extends('layouts.master')

@section('content')

 <main role="main">

      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">My Blog</h1>
          <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don't simply skip over it entirely.</p>
          <p>
            <a href="posts/create" class="btn btn-primary my-2">Create a New Blog</a>
            
          </p>
        </div>
      </section>
      <main role="main" class="container">
      <div class="album py-5 bg-light">
        <div class="container">
          <div class="row">
            <div class="col-md-8">
            @foreach ($posts as $post)
            @include('posts.post')
            @endforeach
          </div>
           @include('layouts.sidebar')
          </div>
        </div>
      </div>
    </main>
    </main>
@endsection