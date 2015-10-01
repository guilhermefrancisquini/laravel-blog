@extends('template')

@section('title')
    Blog Laravel
    @stop

@section('content')
    @foreach($posts as $post)
    <!-- blog-post -->
    <div class="blog-post">
        <h2 class="blog-post-title">{{ $post['titulo'] }}</h2>
        <p class="blog-post-meta">{{ $post['data'] }} by <a href="#">Guilherme Francisquini</a></p>
        <p>{{ $post['conteudo'] }}</p>
    </div>
    <!-- /.blog-post -->

    @endforeach
@stop