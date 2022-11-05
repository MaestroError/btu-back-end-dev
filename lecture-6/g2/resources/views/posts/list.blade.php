@extends("layout")

@section("body")

<a href="{{ route("posts.edit") }}">New Post</a>

<table class="table">
    <thead>
      <tr>
        <th scope="col">Title</th>
        <th scope="col">Views</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @forelse($posts as $post)
            <tr>
                <th scope="row">
                    <a href="{{ route("posts.post", ["id" => $post->id]) }}">
                        {{$post->title}}
                    </a>
                </th>
                <td>{{$post->views}}</td>
                <td>
                    <a class="btn btn-primary" href="{{ route("posts.edit", ["post" => $post->id]) }}">
                        Edit
                    </a>
                    <a class="btn btn-danger" href="{{ route("posts.delete", ["post" => $post->id]) }}">
                        Delete
                    </a>
                </td>
            </tr>
        @empty
            <p>No posts found.</p>
        @endforelse
    </tbody>
  </table>
@endsection