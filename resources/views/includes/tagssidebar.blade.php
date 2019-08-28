<div class="col-lg-4 col-md-4 col-sm-12 float-right d-none d-sm-block d-md-block d-xl-block">

<h1 class="my-4">Categories</h1>
    <div class="list-group">
        @foreach ($tags as $tag)
            <a href="{{ route('tag', $tag->id) }}" class="list-group-item">{{ $tag->name }}</a>
        @endforeach
    </div>

</div>
