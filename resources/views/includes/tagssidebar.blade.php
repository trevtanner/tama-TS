<div class="col-lg-3 tamasidebar">
    <h2 class="my-4 text-center"><a href="{{ route('products.index') }}">Products</a></h2>
    <div class="list-group border-dark">
        @foreach ($tags as $tag)
            <a href="{{ route('tag', $tag->id) }}" class="list-group-item">{{ $tag->name }}</a>
        @endforeach
    </div>

</div>
