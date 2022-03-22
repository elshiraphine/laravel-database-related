@extends('template')

@section('halaman-utama')
    <h1>Post Category</h1>
    <hr/>
    @foreach ($categories as $category)
        <ul>
            <li>
                <h4><a href="/categories/{{ $category->slug }}">{{ $category->name }}</a></h4>
            </li>
        </ul>
    @endforeach
@endsection