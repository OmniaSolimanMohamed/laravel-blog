@extends('layouts.app')

@section('content')
    <!-- <div class="card" style="background-color: red;">
      <div class="card-header">
        Post Details
      </div>
      <div class="card-body">
        <h5 class="card-title">{{$post['title']}}</h5>
        <p class="card-text">{{$post['description']}}</p>
      </div>
    </div>
  -->

  <div class="card">
  <div class="card-header">
    Post Info
  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
        <b class="card-title">Title: </b> <span>{{$post['title']}}</span> <br>
    <b class="card-title">Description: </b> <p>{{$post['description']}}</p>
    <b class="card-title">Description: </b> <p>{{$time_format}}</p>
    
      <!-- <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer> -->
    </blockquote>
  </div>
</div>



<div class="card mt-5">
  <div class="card-header">
    Post Creator Info
  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0 ">
        <b class="card-title">NAme: </b> <span>{{$post['posted_by']}}</span> <br>
        <b class="card-title">Email: </b> <span>{{$post['email']}}</span> <br>
        <b class="card-title">Created at: </b> <span>{{$post['created_at']}}</span> <br>
    
      <!-- <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer> -->
    </blockquote>
  </div>
</div>
@endsection
