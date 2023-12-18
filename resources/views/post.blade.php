@extends('layout')

@section('content')
<article>
        <div>
            <h1>{{ $post->title }}</h1>
        </div>
        <div>
            {!! $post->body !!}
        </div>

    </article>
    <a href="/">Go back</a>
@endsection