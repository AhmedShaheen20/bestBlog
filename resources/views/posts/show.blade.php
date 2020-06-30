@extends('layouts.master')

@section('content')
<div class="row mt-2">
    <div class="col-md-9 offset-md-2">
        <div class="card mb-3" style="min-width: 18rem;">

            <div class="card-body">
                <div class="card-title">
                    <h4> {{$post->title}}</h4>
                </div>

                <img src="{{asset('storage/coverImages/' . $post->image)}}" alt="" height="400" width="700">

                <div class="card-text">
                    {{$post->body}}
                </div>

                <hr>
                <small class="text-muted"> <p> {{$post->created_at}}</p></small>
            <p style="color:brown;">created by: {{$post->user->name}}</p>
            @auth

                    @if( auth()->user()->id == $post->user_id)
                    <a href="{{ '/posts/' . $post->id . '/edit'}}" class="btn btn-primary float-left mr-2"> Edit</a>

                    <form action="{{route('posts.destroy', ['id' => $post->id])}}" method="POST">

                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger float-left"> Delete</button>

                    </form>
                @endif
            @endauth



            </div>
        </div>
        <!-- Comments Form -->
        <div class="card my-4">
          <h5 class="card-header">Leave a Comment:</h5>
          <div class="card-body">
            <form>
              <div class="form-group">
                <textarea class="form-control" rows="3"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>

        <!-- Single Comment -->
        <div class="media mb-4">
          <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
          <div class="media-body">
            <h5 class="mt-0">Commenter Name</h5>
            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
          </div>
        </div>
    </div>
</div>

@endsection
