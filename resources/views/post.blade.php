@extends('layouts.main')

@section('container')
<article>
   <h1 class="mb-5">{{ $post->title }}</h1>
   {!! $post->body !!}
</article>
<a href="/blog">Back to posts</a>

@endsection
