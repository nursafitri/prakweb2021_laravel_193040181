@extends('layouts.main')
  
@section('container')

@foreach ($posts as $post)
<article class="mb-5 border-bottom">
<h2>
  <a href="/posts/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a>
  <p>By. <a href="#" class="text-decoration-none">{{ $post->user->name }}</a><a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
</h2>
<p>{{ $post->excerpt }}</p>

<a href="/posts">Back to posts</a>

<a href="/posts/{{ $post->slug }}">Read more...</a>
</article>

@endforeachs

@endsection