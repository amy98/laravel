<ul>
    @foreach ($posts as $post)
    <li>
        <a href="{{ route('post.edit', $post) }}">
            {{ $post->title }}
        </a>
        <img width="60" src="{{ asset('storage/'.$post->images) }}" alt="">
    </li>        
    @endforeach
</ul>

<a href="{{ route('post.create') }}">Add post</a>