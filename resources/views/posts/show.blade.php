@extends('layouts.app')

@section('app')

<h1>{{ $post->title }}</h1>
<p>{{ $post->content }}</p>

{{ link_to_route('posts.edit', '[Edit]', [$post->id]) }}

@endsection
