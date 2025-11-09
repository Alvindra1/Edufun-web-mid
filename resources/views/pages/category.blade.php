@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row">  
        @foreach($categories as $category)
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-body text-center p-5">
                    <h3>{{$category->name}}</h3>
                    <p class="text-muted">{{$category->articles->count()}} courses available</p>
                    <a href="{{route('category.show', $category->id)}}" class="btn btn-primary">Explore</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection