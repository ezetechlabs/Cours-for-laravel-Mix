@extends('layouts.app')

@section('content')
@include('_includes.nav._manage')
  <div class="section" style="background-color:#f5f5f0; width: 1095px;margin-left: 210px; ">
    <div class="columns m-t-10">
      <div class="column">
        <h1 class="title">This is the posts.index page</h1>
      </div>
      <div class="column">
        <a href="{{route('posts.create')}}" class="button is-primary is-pulled-right"><i class="fa fa-user-plus m-r-10"></i> Create New Post</a>
      </div>
    </div>
    <hr class="m-t-0">



  </div> <!-- end of .flex-container -->

@endsection
