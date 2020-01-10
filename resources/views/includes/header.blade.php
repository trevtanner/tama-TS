<!--Header-->
<app-header
    home="{{ route('home') }}"
    product-index="{{route('products.index')}}"
    tag1="{{route('tag', 1)}}"
    tag2="{{route('tag', 2)}}"
    tag3="{{route('tag', 3)}}"
    tag4="{{route('tag', 4)}}"
    tag5="{{route('tag', 5)}}"
    tag6="{{route('tag', 6)}}"
    suppliers-index="{{ route('suppliers.index') }}"
    contact="{{ route('contact') }}"
    search="{{ route('search') }}"
></app-header>
