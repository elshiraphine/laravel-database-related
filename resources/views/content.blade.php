@extends('template')

@section('halaman-utama')
    <article class="mb-5">
        <h3>
            <a href="">
                {{ $article->title }}
            </a>
        </h3>
        <h6>By: <a href="#" class="text-decoration-none">{{ $article->user->name }}</a> in <a href="/categories/{{ $article->category->slug }}" class="text-decoration-none">{{ $article->category->name }}</a></h6>
        <p>{!! $article->body !!}</p>
    </article>
@endsection