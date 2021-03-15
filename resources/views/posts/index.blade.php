@extends('layouts.app')
@section('content')
<a href="{{ route('posts.create') }}" class="btn btn-success d-grid gap-2 col-1 mx-auto">Create Post</a>
<table class="table mt-3">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Title</th>
      <th scope="col">Posted by</th>
      <th scope="col">Created at</th>
      <th scope="col">Actions</th>
      {{-- --}}
    </tr>
  </thead>
  <tbody>
  @foreach($posts as $post)
          <tr>
            <th scope="row">{{$post->id}}</th>
            <td>{{$post->title}}</td>
            <td>{{$post->user ? $post->user->name : 'not found'}}</td>
            <td>{{$post->created_at}}</td>
            <td class="col">
                <a href="{{ route('posts.show', [ 'post' => $post['id'] ]) }}" class="btn btn-info">View</a>
                <a href="{{ route('posts.edit', [ 'post' => $post['id'] ]) }}" class="btn btn-primary">Edit</a>
                <a href="#" class="btn btn-danger">Delete</a>
            </td>
          </tr>
          @endforeach
  </tbody>
</table>

@endsection