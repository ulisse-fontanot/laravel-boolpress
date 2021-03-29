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

    <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('POST')
        <div class="form-group">
            <label for="campo">titolo</label>
            <input type="text" class="form-control" id="campo" name="title">
        </div>

        <div class="form-group">
            <label for="campo">titolo</label>
            <input type="file" class="form-control-file" id="campo" name="image">
        </div>

        <div class="form-group">
            <label for="campo">testo</label>
            <input type="text" class="form-control" id="campo" name="content">
        </div>

        @foreach($tags as $tag)
            <div class="form-group form-check">
                <input name="tags[]" value="{{ $tag->id }}" type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1"> {{ $tag->name }} </label>
            </div>
        @endforeach

        <button type="submit" class="btn btn-primary">CREA</button>
    </form>
@endsection