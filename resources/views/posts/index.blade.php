@extends('layouts.master')

@section('title', 'Blog - all posts')

@section('content')

    <body class="antialiased">
        <ul>
            @if ($posts)

                @foreach ($posts as $post)
                    <li>

                        <a href="{{ route('singlepost-route', ['id' => $post->id]) }}">

                            {{ $post->title }}
                        </a>
                    </li>
                @endforeach
            @else
                nema bg fuck off
            @endif

            <!-- $route = route('single-post')
                                          function route($routeName) {
                                            foreeach (routes as route) {
                                              if (route->name === $routeName) {
                                            return route->path;
                                            }
                                            }
                                            }
                                     -->
        </ul>
    @endsection

    {{-- // <!-- Drugi Laravelov projekat Blog - vezbe --> --}}
