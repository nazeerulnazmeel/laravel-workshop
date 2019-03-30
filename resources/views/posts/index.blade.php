<ul>
    @foreach ($posts as $post)
    <li><a href="{{ route('posts.edit', $post) }}">
            {{ $post->title }}
        </a></li>
    <ul>
        <li>{{ $post->content }}</li>
        <li><img src="{{ asset('storage/'.$post->image) }}" alt="" height="200" width="200"></li>
    </ul>
    @endforeach
</ul>

<a href="{{ route('posts.create') }}">Add Post</a>