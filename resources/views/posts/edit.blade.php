@extends('layouts.app')

@section('app')

<h1>posts.edit</h1>

{{ Form::open(['route' => ['posts.update', $post->id], 'method' => 'put']) }}
    @include('posts._form')

    {{ Form::submit('update') }}
{{ Form::close() }}

@endsection
