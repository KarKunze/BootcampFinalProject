@extends('layouts.app')

@section('page-id', ('moody'))

@section('page-title', ('Moody in the City'))

@section('content')

<div class="container-fluid">
  <div class="row">
      <div class="col-md-8">
        <div class="card" id="postcard">
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
