@extends('layouts.master')

@section('content')
	<div class="album py-5 bg-light">
        <div class="container">

          <div class="row">
            <div class="col-md-8">
              <div class="card mb-8 box-shadow">
                <div class="card-body">
                  <h1>{{ $post->title}}</h1>
                  <p class="card-text">{{ $post->body}}</p>

                  <table class="table table-bordered">
                    <thread>
                      <th>Name</th>
                      
                      <th>Action</th>
                    </thread>

                    <tbody>
                       @foreach($post->files as $file)
                      <tr>
                        <td width="50%">{{$file->name}}</td>
                        
                        <td align="center" width="50%">
                          
                          <a  href="/storage/upload/{{ $file->post_id }}/{{ $file->name }}" target="_blank"> <button type="button" class="btn btn-primary">View</button></a>
                          
                          <a href="/storage/upload/{{ $file->post_id }}/{{ $file->name }}" download="{{ $file->name }}"> <button type="button" class="btn btn-primary">Download</button></a>
                          <a href="{{ route('deletefile', $file['id'])}}" > <button type="button" class="btn btn-secondary">Remove</button></a>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a href="/"class="btn btn-sm btn-outline-secondary">Back</a>
                        <a href="{{ route('edit', $post['id'])}}"class="btn btn-sm btn-outline-secondary">Edit</a>
                    
                      
                    </div>
                    <small class="text-muted">{{ $post->user->name}} on {{ $post->created_at->toFormattedDateString() }}</small>
                  </div>
                </div>
              </div>
              
       

       
            <div class="card-body">
              <div class="comments">
                <hr>
                <ul class="list-group">

                    @foreach($post->comments as $comment)
                      <li class="list-group-item">
                        <font color = "blue"><b>{{ $comment->post_name }}</b></font>
                        {{ $comment->body }}

                        <small class="text-muted">
                          {{ $comment->created_at->diffForHumans() }}  

                        </small>

                      </li>
                    @endforeach
                </ul>
              </div>
            </div>



            <!-- Upload Files -->
            @if (Auth::check())
              <div class="card-body">
                <div class="card-block">
                  <form method="Post" action="/posts/{{ $post->id }}/upload" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="form-group">
                      <input type="hidden" name="post_id" value="{{ $post->id }}">
                      <label for="file">File</label>
                      <input type="file" class="form-control"  name="file[]" multiple="" required="">
                    </div>

                    <div class="form-group">
                      <button type="submit" class="btn btn-primary">Upload</button>
                    </div>

                  </form>
                </div>
              </div>
            @endif



            <!-- Comments -->
            <div class="card-body">
              <div class="card-block">
                @if (Auth::check())
                <form method="Post" action="/posts/{{ $post->id }}/comments">
                  {{ csrf_field() }}
                  <div class="form-group">
                    <hr>
                     
                    <input type="hidden" name="name" value="{{ Auth::user()->name }}">
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                    <label for="body">Comment</label>
                    <textarea name="body" class="form-control" placeholder="Your Comment here" required></textarea>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary">Comment</button>
                  </div>

                </form>
                @endif
              </div>
            </div>
            </div>
            
              @include('layouts.sidebar')
             
          </div>
        </div>
        
      </div>
@endsection