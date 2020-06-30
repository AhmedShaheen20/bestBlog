@extends('layouts.master')

@section('content')
<table class="table table-dark">
            <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                    </tr>
            </thead>
            <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                    </tr>
    </tbody>
  </table>
{{--  <hr>
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

            @endauth
            --}}
@endsection
