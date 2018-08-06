@extends('layouts.app')

@section('page-id', ('music'))

@section('page-title', ('Music in the City'))

@section('content')

<div class="container-fluid">
    <div class="row">
      <div class="col-lg-8">
        <!-- <div class="card-header">
        </div> -->
        <div class="card" id="postcard">
          @include('posts.index')
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
