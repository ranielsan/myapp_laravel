            
              <div class="card mb-8 box-shadow">
                <div class="card-body">
                  <h1>{{ $post->title}}</h1>
                  <p class="card-text">{{ $post->body}}</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a href="posts/{{$post->id}}"class="btn btn-sm btn-outline-secondary">View</a>
                      <a href="posts/edit/{{$post->id}}"class="btn btn-sm btn-outline-secondary">Edit</a>
                      <a href="posts/delete/{{$post->id}}"class="btn btn-sm btn-outline-secondary">Delete</a>
                    </div>
                    <small class="text-muted">{{ $post->user->name}} on {{ $post->created_at->toFormattedDateString() }}</small>
                  </div>
                </div>
              </div>
            
