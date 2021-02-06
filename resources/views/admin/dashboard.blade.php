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
            <table>
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>TITOLO</td>
                        <td>SLUG</td>
                        <td>AZIONI</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td>
                                {{$post ->id}}
                            </td>
                            <td>
                                {{$post ->title}}
                            </td>
                            <td>
                                {{$post ->slug}}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
</div>
@endsection
