
@extends('layouts.master')
<!--
@section('title')
<h1>heloo in servises page</h1>
@endsection -->


@section('content')
<h1>{{$title}}</h1>
<ul>

        @if(count($servises)>0)

            @foreach($servises as $servise)
                <li>  {{$servise}} </li>
            @endforeach
        @endif

</ul>

@endsection
