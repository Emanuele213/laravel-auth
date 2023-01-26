@extends('layouts.app')

@section('content')
    <h1>{{ $post->title }}</h1>
    <img src="{{ $post->image}}" alt="{{ $post->title }}">
    <p>{{ $post->content }}</p>
    <td class="text-center"><a href="{{ route('admin.posts.index', ['post' => $post->id]) }}" class="btn btn-primary">Torna indietro</a></td>
@endsection
