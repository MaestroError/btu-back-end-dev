@extends("layout")

@section("body")
    <form action="">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Title</label>
            <input type="text" value="{{ $post->title ?? '' }}" name="title" class="form-control" id="exampleFormControlInput1" placeholder="Title">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
            <textarea name="body" class="form-control" id="exampleFormControlTextarea1" rows="3">
                {{ $post->body ?? '' }}
            </textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection