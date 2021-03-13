@extends('layouts.app')

@section('content')
<form method="POST" action="{{route('posts.store')}}">
    @csrf
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" class="form-control" id="title" value="{{$post['title']}}">
    </div>
    <div class="mb-3">
      <label for="description" class="form-label">Description</label>
      <textarea class="form-control"> {{$post['description']}} </textarea>
    </div>
    <div class="mb-3">
      <label for="title" class="form-label">Post Creator</label>
      <input type="text" class="form-control" id="title" value="{{$post['posted_by']}}">
    </div>
    <!-- <label>{{$post['title']}}</label> -->
    <button type="submit" class="btn btn-success">Create</button>
  </form>

@endsection