@extends('layout.app')

@section('content')

<div class="min-h-screen flex justify-center items-center">
    <form action="{{route('posts.update',$post)}}" method="POST">

        @method('PUT')
        @csrf

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Title" value="{{old('title',$post->title)}}">

            @error("title")
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="title">Description</label>
            <textarea class="form-control @error('description') is-invalid @enderror" id="title" id="description" name="description" placeholder="Description" >{{old('description', $post->description)}}</textarea>

            @error("description")
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>

</div>

@endsection