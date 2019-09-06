<div class="col-lg-3">

    <h2 class="my-4 text-center">Products</h2>
    <div class="list-group">
        @foreach ($tags as $tag)
            <a href="{{ route('tag', $tag->id) }}" class="list-group-item">{{ $tag->name }}</a>
        @endforeach
    </div>

</div>
<!-- /.col-lg-3 -->
