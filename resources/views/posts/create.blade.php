@extends('layouts.master')

@section('title', 'Create new post')

@section('content')
    <form method="POST" action="/posts">
        @csrf

        <div class="mb-3">
            <label class="form-label">Title</label>
            <input type="text" name="title" class="form-control" />
        </div>

        @error('title')
            @include('partials.error')
        @enderror


        <div class="mb-3">
            <label class="form-label">Body</label>
            <textarea name="body" rows="10" class="form-control"></textarea>
        </div>

        @error('body')
            @include('partials.error')
        @enderror

        <h4>
            @foreach ($tags as $tag)
                <div class="form-group form-check">
                    <input type="checkbox" value="{{ $tag->id }}" class="form-check-input" name="tags[]"
                        id="tag_{{ $tag->id }}">
                    <label for="tag_{{ $tag->id }}" class="form-check-label">{{ $tag->name }}</label>
                </div>
            @endforeach
        </h4>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection

{{-- // <!-- Drugi Laravelov projekat Blog - vezbe --> --}}
