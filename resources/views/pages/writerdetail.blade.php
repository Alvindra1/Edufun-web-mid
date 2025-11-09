@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-12 mb-4 text-center">
            <img src="{{$writer->image}}" class="rounded-circle mb-3" alt="{{$writer->name}}" width="150" height="150">
            <h2>{{$writer->name}}</h2>
        </div>
        
        <div class="col-12 mb-4">
            <h3>Articles by {{ $writer->name }}</h3>
        </div>
        
        @foreach($writer->articles as $article)
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="{{ $article->image }}" class="card-img-top" alt="{{$article->title}}">
                <div class="card-body">
                    <span class="badge bg-primary mb-2">{{$article->category->name}}</span>
                    <h5 class="card-title">{{$article->title}}</h5>
                    <p class="text-muted small">{{$article->created_at->format('d M Y')}}</p>
                    <p class="card-text">{{Str::limit($article->description, 100)}}</p>
                    <a href="{{route('article.show', $article->id)}}" class="btn btn-primary">Read more</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection