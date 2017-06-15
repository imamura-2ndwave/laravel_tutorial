@extends('layouts.app')

@section('app')

<h1>posts.index</h1>

    <ul>
        @foreach ($posts as $post)
            <li>
                {{ link_to_route('posts.show', $post->title, [$post->id]) }}
                {{ link_to_route('posts.edit', '[Edit]', [$post->id]) }}
                {{ Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'delete', 'name' => 'delete_' . $post->id, 'style' => 'display:inline;']) }}
                    <a href="javascript:document.{{ 'delete_' . $post->id }}.submit()" onclick="return confirm('削除しますか？');">[Delete]</a>
                {{ Form::close() }}
            </li>
        @endforeach
        <li>
            {{ link_to_route('posts.create', '[new post]') }}
        </li>
    </ul>

@endsection

