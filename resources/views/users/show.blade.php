@extends('layouts.master')

@section('title', $user->name)


@section('content')

    <h2>{{ $user->name }}</h2>
    <ul>
        @foreach ($user->posts as $post)
            <li>
                {{-- <!-- https://127.0.0.1:8000/posts/{id} ,  --}}
                <a href="{{ route('singlepost-route', ['id' => $post->id]) }}">
                    {{ $post->title }}
                </a>
            </li>
        @endforeach

    </ul>
@endsection
