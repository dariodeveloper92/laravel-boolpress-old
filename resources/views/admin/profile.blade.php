@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> i tuoi dati </div>

                {{-- Gestione dei dati di registrazione admin/profile --}}
                <div class="card-body">
                    <div> {{ Auth::user()->name }}</div>
                    <div> {{ Auth::user()->email }}</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection