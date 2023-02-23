@foreach ($blogs as $blog)
    <div class="blog-post">
        <img class="resp-img" src="{{ asset('img/blog-img.jpg') }}" alt="" srcset="">
        <div class="category-wrapper">
            <span>Marketing</span>
            <span>5min Read</span>
        </div>
        <h2 class="blog-post-title">
            {{ $blog['title']->rendered }}
        </h2>
        {!! $blog['excerpt']->rendered !!}
        <div class="blog-buttons">
            <a href="{{ $blog['link'] }}" class="button">
                Read full article
            </a>
            <form action="{{ route('delete-post', $blog['id']) }}" method="post">
                @method('DELETE')
                <button class="button">
                    Delete
                </button>
            </form>
        </div>
    </div>
@endforeach