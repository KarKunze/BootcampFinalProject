@extends('layouts.app')

@section('page-title', ('Art in the City'))

@section('page-id', ('art'))

@section('content')

<div class="container-fluid">
    <div class="row">
      <div class="col-lg-8">
        <div class="card" id="postcard">
          @include('posts.index')
        </div>

      </div>
        <div class="col-lg-4">
          <div >
          @include('layouts.sidecolumn')
          </div>
        </div>
    </div>
</div>

@endsection
