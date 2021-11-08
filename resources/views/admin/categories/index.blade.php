@extends('layouts.dashboard')

@section('content')
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
                <th scope="col">Name</th>
                <th scope="col">Slug</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td scope="row">{{ $category['id'] }}</td>
                    <td>{{ $category['name'] }}</td>
                    <td>{{ $category['slug'] }}</td>
                    <td>
                        <a href="" class="btn btn-info">
                            Details
                        </a>
                        <a href="" class="btn btn-warning">
                            Modify
                        </a>
                        <form class="d-inline-block delete-category" method="category" action="">
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