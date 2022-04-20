@extends('layouts.main')

@section('container')


    <h2 class="mb-5">{{ $post->title }}</h2>
    {{-- <h5>{{ $post["author"] }}</h5> --}}

    {{-- <p>By nazumi in <a href="/categories/{{ $post->category->slug }}"> {{ $post->category->name }}</a></p> --}}

    {!! $post->body !!}


<a href="/blog">Back to Posts</a>
    
@endsection