@extends('layouts.main')

@section('container')
    <article>
        <h2>
            <a href="/posts/{{ $posts["slug"] }}">{{ $posts["title"] }}</a>
        </h2>
        <h5>{{ $posts["author"] }}</h5>
        <p>{{ $posts["body"] }}</p>
    </article>
@endsection