@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <ul class="nav flex-column">
              <li class="nav-item">
                  <a class="nav-link active" href="#">Active</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link disabled" href="#">Disabled</a>
              </li>
            </ul>
        </div>
        <div class="col-md-8">
            @foreach ($posts as $post)
                <h1>{{$post ->title}}</h1>
            @endforeach
        </div>
    </div>
</div>
@endsection
