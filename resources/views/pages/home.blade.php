@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-12 mb-4">
            <h2>Articles</h2>
        </div>
        @foreach($articles as $article)
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="{{$article->image}}" class="card-img-top" alt="{{$article->title}}">
                <div class="card-body">
                    <h5 class="card-title">{{ $article->title }}</h5>
                    <p class="text-muted small">
                        {{$article->created_at->format('d M Y')}} | by {{$article->writer->name}}
                    </p>
                    <p class="card-text">{{Str::limit($article->description, 100)}}</p>
                    <a href="{{route('article.show', $article->id)}}" class="btn btn-primary">Read more</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection