@extends('layouts.app')

@section('content')
    <div class="container">
        @include('includes.success')
        <h2 class="h2">Posts</h2>
        <hr>
        @if ($posts->isNotEmpty())
            <div class="list-group">
                @foreach ($posts as $post)
                    <a href="{{ route('posts.show', ['post' => $post->id]) }}" class="list-group-item list-group-item-action">
                        {{ $post->title }}
                    </a>
                @endforeach
            </div>
        @else
            <p>You have no post yet.</p>
        @endif
    </div>
@endsection