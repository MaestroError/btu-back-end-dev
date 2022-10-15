{{-- Declare layout to extend --}}
@extends("layouts.main")


@section("body")
    <h1>Home page</h1>

    {{-- Conditional classes with @class directive --}}
    <span @class([
        'p-4',
        'newClass' => $isActive,
    ])>
    Testing span
    </span>

    {{-- Check key in session and echo if exists --}}
    <br>
        @if (session('email'))
            {{ session('email') }}
        @endif
    <br>

    <form action="{{ route('formtest') }}" method="post">
        {{-- CSRF field (For web routes) --}}
        @csrf
        <input type="text" name="email">
        <button type="submit">Submit</button>
    </form>

@endsection

{{-- Set title with section dircetive --}}
@section("title", "My Fullstack Laravel App")

{{-- Push stylesheet in 'head' stack --}}
@push("head")
    {{-- Use vite directive to get correct stylesheet/script urls --}}
    @vite(["resources/css/app.css"])
@endpush