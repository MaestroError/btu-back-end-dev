@extends("layout")

@section("body")
    @guest
        <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
        <a href="{{ route('register') }}" class="btn btn-secondary">Register</a>
    @endguest
    @auth
        <a href="{{ route('logout') }}" class="btn btn-danger">Logout</a>
    @endauth
@endsection