@extends('layouts.app')

@section('content')

<div class="container">
    <form action="{{ route('guest.contatti.sent') }}" method="post">
        @csrf
        @method('POST')
        <div class="form-group">
            <label for="nomeUtente">NOME</label>
            <input name="name" type="text" class="form-control" id="nomeUtente">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">E MAIL</label>
            <input name="email" type="email" class="form-control" id="email">
        </div>

        <div class="form-group">
            <label for="messaggio">CONTENUTO</label>
            <textarea name="message" class="form-control" id="messaggio" rows="3"></textarea>
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection