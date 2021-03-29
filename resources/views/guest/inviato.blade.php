@extends('layouts.app')

@section('content')

<div class="container">
    @if(session('status') == 'ok')
        <h2>messaggio inviato correttamente</h2>
    @endif
</div>

@endsection