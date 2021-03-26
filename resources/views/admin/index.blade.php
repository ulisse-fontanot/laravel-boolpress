@extends('layouts.dashboard')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <button type="button" class="btn btn-primary btn-lg btn-block"><a href="{{ route('post.create') }}">Crea nuovo post</a></button>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">name</th>
                        <th scope="col">title</th>
                        <th scope="col">opzioni</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($posts as $post)
                        <tr>
                            <th scope="row"> {{ $post->id }} </th>
                            <td> {{ $post->user->name }} </td>
                            <td> {{ $post->title }} </td>
                            <td>
                                <button type="button" class="btn btn-primary"><a href=" {{ route('post.show', $post->id) }} ">View</a></button>
                                <button type="button" class="btn btn-warning"><a href=" {{ route('post.edit', $post->id) }} ">Edit</a></button>
                                <form action="{{ route('post.destroy', $post->id) }}" method="post" class="d-inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
