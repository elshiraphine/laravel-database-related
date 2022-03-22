@extends('template')

@section('halaman-utama')
    <article class="mb-5">
        <h3>
            <a href="">
                {{ $article->title }}
            </a>
        </h3>
        <h6>By: {{ $article->author }} in <a href="/categories/{{ $article->category->slug }}">{{ $article->category->name }}</a></h6>
        <p>{!! $article->body !!}</p>
    </article>
@endsection