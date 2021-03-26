@extends('layouts.dashboard')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
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
                                <button type="button" class="btn btn-primary"><a href=" {{ route('admin.show', $post->id) }} ">View</a></button>
                                <button type="button" class="btn btn-warning"><a href="">Edit</a></button>
                                <button type="button" class="btn btn-danger"><a href="">Delete</a></button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
