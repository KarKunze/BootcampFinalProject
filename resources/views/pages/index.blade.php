@extends('layouts.app')

@section('page-title', ('Moody in the City'))

@section('content')

<div class="container-fluid">
  <div class="row">
      <div class="col-md-8">
        <div class="card" id="postcard" style="margin-bottom: 10px;">
          @include('posts.moody')
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          @include('layouts.sidecolumn')
        </div>
      </div>
  </div>
</div>

@endsection
