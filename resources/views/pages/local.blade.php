@extends('layouts.app')

@section('page-id', ('local'))

@section('page-title', ('Local Businesses in the City'))

@section('content')

<div class="container-fluid">
    <div class="row">
      <div class="col-lg-8">
        <div class="card" id="postcard">
          @include('posts.index')
        </div>
      </div>
        <div class="col-lg-4">
          <div class="card">
          @include('layouts.sidecolumn')
          </div>
        </div>
    </div>
</div>

@endsection
