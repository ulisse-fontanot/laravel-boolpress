@extends('layouts.dashboard')

@section('title','pagina create')

@section('content')
    @if ($errors->any())
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('post.store') }}" method="post">
        @csrf
        @method('POST')
        <div class="form-group">
            <label for="campo">titolo</label>
            <input type="text" class="form-control" id="campo" name="title">
        </div>
        <div class="form-group">
            <label for="campo">testo</label>
            <input type="text" class="form-control" id="campo" name="content">
        </div>
        <button type="submit" class="btn btn-primary">CREA</button>
    </form>
@endsection