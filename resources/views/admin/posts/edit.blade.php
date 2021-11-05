@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            {{-- Modifica Post --}}
            <h1> Modifica Post</h1>
            <form action="{{ route('admin.posts.update', $post->id)}}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="title">Titolo</label>
                    <input type="text" name="title" class="form-control" value="{{ $post->title}}">
                </div>
                <div class="form-group">
                    <label for="content">Contenuto</label>
                    <textarea name="content" id="content" class="form-control"> {!! $post->content !!}</textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Modifica Post</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection