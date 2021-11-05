@extends('layouts.dashboard')

@section('content')
    {{-- <ul>
        @foreach ($posts as $post)
            <li><a href="{{ route('admin.posts.show', $post->id)}}">{{ $post->title}}</a></li>
        @endforeach
    </ul> --}}
    {{-- Messaggio stato del testo> --}}
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status')}}
        </div>
    @endif
    {{-- table --}}
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Slug</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td scope="row">{{ $post['id'] }}</td>
                    <td>{{ $post['title'] }}</td>
                    <td>{{ $post['Slug'] }}</td>
                    <td>
                        <a href="{{ route('admin.posts.show', $post->id)}}" class="btn btn-info">
                            Details
                        </a>
                        <a href="{{ route('admin.posts.edit', $post->id)}}" class="btn btn-warning">
                            Modify
                        </a>
                        <form class="delete-post-form delete-post" style="display: inline" method="post" action="{{ route('admin.posts.destroy', $post->id) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"> Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection