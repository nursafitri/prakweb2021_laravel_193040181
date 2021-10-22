@extends('layouts.main')

@section('container')
    <article>
      <h2>{{ $post->title }}</h2>

    <p>By. Nur Safitri Wulandari in <a href="/categories/{{ $post->category->slug }}"></a> {{ $post->category->name }}</p>
      {!! $post->body !!}
    </article>
    <a href="/blog">Back to Posts</a>
@endsection