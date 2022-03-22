@extends('template')

@section('halaman-utama')
    <h1>{{ $title }}</h1>
    <h4>Editor: {{ $name }} | {{ $email }} </h4>
    <hr/>
    @foreach ($articles as $article)
        <article class="mb-5 border-bottom pb-4">
            <h4>
                <a href="/article/{{ $article->slug }}" class="text-decoration-none">
                    {{ $article->title }}
                </a>
            </h4>
            <h6>By: <a href="#" class="text-decoration-none">{{ $article->user->name }}</a> in <a href="/categories/{{ $article->category->slug }}" class="text-decoration-none">{{ $article->category->name }}</a></h6>
            <p>{{ $article->excerpt }}</p>
            <a href="/article/{{ $article->slug }}" class="text-decoration-none">Read more ...</a>
        </article>
    @endforeach
@endsection