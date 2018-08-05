@extends('layouts.app')

@section('page-title', ('Admin'))

@section ('content')
<div class="container">
  <h3 class="text-center"> Admin Panel </h3>
  <br>
  <div class="row">
    <div class="col">
      <div class="card">

        <table class="table table-bordered">
          <thead>
            <tr>
              <th scope="col">user id</th>
              <th scope="col">name</th>
              <th scope="col">email</th>
              <th scope="col">role id</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($users as $user)
              <tr>
              <td>{{ $user->id }}</td>
              <td>{{ $user->name }}</td>
              <td>{{ $user->email }}</td>
              <td>{{ $user->role_id }}</td>
              @endforeach
            </tr>
          </tbody>
        </table>
      </div>
      <br>
    <div class="col">
      @if ($flash = session('status'))
        <div id="flash-message" class="alert alert-success" role="alert">
          {{ $flash }}
          <br>
          <a class="btn-sm btn-secondary mt-2" href='/index' role="button">Home</a>
        </div>
      @endif
        <div class="card">

            <table class="table table-bordered">
              <thead id="allPosts">
                <tr>
                  <th scope="col">status</th>
                  <th scope="col">id</th>
                  <th scope="col">title</th>
                  <th scope="col">username</th>
                  <th scope="col">created</th>
                  <th scope="col">category</th>
                  <th scope="col">body</th>
                  <th scope="col">image</th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($posts as $post)
                  <tr>
                  <td>
                    <form method="post" action="/admin/{{ $post->status }}">
                      		@csrf
                      		@method('PATCH')
                        <div class="form-check form-check">
                        <input class="form-check-input" type="checkbox" id="status" name="status" {{ $post->status ? 'checked' : '' }}>
                        <label class="form-check-label" for="status">Approved</label>
                        </div>
                        <button class="btn-sm btn-outline-primary" type="submit">Save</button>
                    </form>
                  </td>
                  <td>{{ $post->id }}</td>
                  <td>{{ $post->title }}</td>
                  <td>{{ $post->user_name() }}</td>
                  <td>{{ $post->created_at }}</td>
                  <td>{{ $post->category_name() }}</td>
                  <td>{{ $post->body }}</td>
                  <td><img class="mx-auto d-block post-image" src="{{ asset("storage/$post->image") }}" alt=""></td>
                  </form>
                  @endforeach
                </tr>
              </tbody>
            </table>
{{ $posts->fragment('allPosts')->links() }}
        </div>
    </div>
    </div>
  </div>
</div>




@endsection
