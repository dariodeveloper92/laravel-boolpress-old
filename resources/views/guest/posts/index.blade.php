@extends('layouts.app');

@section('content')
    <h1 class="m-5">Post visualizzati da utenti non registrati</h1>
   <ul class="m-5">
        @foreach ($posts as $post)
            <li><a href="{{ route('posts.show', $post->slug)}}">{{ $post->title}}</a></li>
        @endforeach
    </ul>
@endsection