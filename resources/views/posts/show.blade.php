@extends('layout.app')

@section('content')
<div class="tw-items-center></tw-items-center">

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" placeholder="Title" name="title"value="{{$post->title}}" >
        </div>
        <div class="form-group">
            <label for="title">Description</label>
            <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" placeholder="Description">{{$post->description}}</textarea>
        </div>
</div>
@endsection