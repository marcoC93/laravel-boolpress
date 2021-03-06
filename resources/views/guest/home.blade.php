@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}

                </div>

                <div class="card-body">
                                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}

                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                    <h1>
                         Questa é la pagina guest

                    </h1>
                    @foreach ($posts as $post)
                        <li>
                            <h1>
                                {{ $post ->title}}
                            </h1>
                            <p>{{$post ->content}}</p>
                        </li>
                    @endforeach
                    <a href="{{route('guest.contatti')}}">
                        Questa é la pag contatti
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
