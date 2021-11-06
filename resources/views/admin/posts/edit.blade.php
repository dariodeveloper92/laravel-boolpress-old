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
                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"  value="{{ old('title',  $post->title)}}">
                    {{-- messaggio errore se non scrivi il titolo --}}
                    @error('title')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="content">Contenuto</label>
                    <textarea name="content" id="content" class="form-control @error('content') is-invalid @enderror"> {!! old('content', $post->content) !!}</textarea>
                    {{-- messaggio errore se non scrivi il contenuto --}}
                    @error('content')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Modifica Post</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection