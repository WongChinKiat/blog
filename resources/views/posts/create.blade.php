@extends('layout.app')

@section('content')
<div class="tw-items-center></tw-items-center">
    <form action="{{route('posts.store')}}" method="POST">
        @csrf   
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" placeholder="Title" name="title"value="{{old('title')}}">
            @error('title')
            <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="title">Description</label>
            <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" placeholder="Description">{{old('description')}}</textarea>
        @error('description')
        <small class="text-danger">{{$message}}</small>
        @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection