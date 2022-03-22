@extends('template')

@section('halaman-utama')
    <h1>Article Page</h1>
    <h4>Editor: {{ $name }} | {{ $email }} </h4>
    <hr/>
    @foreach ($articles as $article)
        <article class="mb-5">
            <h4>
                <a href="/article/{{ $article->slug }}">
                    {{ $article->title }}
                </a>
            </h4>
            <h6>By: {{ $article->author }}</h6>
            <p>{{ $article->excerpt }}</p>
        </article>
    @endforeach
@endsection