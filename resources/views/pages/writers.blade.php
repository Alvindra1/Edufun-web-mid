@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h2>Writers</h2>
        </div>
        
        @foreach($writers as $writer)
        <div class="col-md-4 ">
            <div class="card text-center">
                <div class="card-body">
                    <img src="{{$writer->image}}" class="rounded-circle mb-3" alt="{{$writer->name}}" width="150" height="150">
                    <h5 class="card-title">{{$writer->name}}</h5>
                    <p class="text-muted">{{ $writer->specialist }}</p>
                    <a href="{{route('writers.show', $writer->id)}}" class="btn btn-primary">View Articles</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
    
@endsection