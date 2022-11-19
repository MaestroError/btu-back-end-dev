@extends("layout")

@section("body")
    <h1>{{ $user->email }}</h1>
    <p>{{ $user->name }}</p>
    <a href="{{ route('logout') }}" class="btn btn-danger">Logout</a>

@endsection