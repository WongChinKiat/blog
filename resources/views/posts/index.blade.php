@extends('layout.app')

@section('content')
<h1>My Post</h1>
@forelse($posts as $post)
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">{{$post->title}}</h5>
    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
    <p class="card-text">{{$post->description}}</p>
    <a href="{{route('posts.edit',$post)}}" class="card-link">Edit</a>
    <a href="{{route('posts.show',$post)}}" class="card-link">View</a>
    <!-- <a href="{{route('posts.destroy',$post)}}" class="card-link">Delete</a> -->
    <form action="{{route('posts.destroy',$post)}}" class="tw-inline" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="botton" title="Delete">Delete</button>
    </form>  
</div>
</div>
@empty

@endforelse
<div class="row">
<div class="col">
    {{$posts->links()}}
</div>

</div>
@endsection