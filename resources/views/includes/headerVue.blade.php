<!--Header-->

<nav class="navbar navbar-expand-lg navbar-dark fixed" id="mainNav">
    <div class="container align-items-baseline">

        <!--Left side With App Name-->
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto nav">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item pl-1">
                        <a class="nav-link" href="{{ route('home') }}">About</a>
                    </li>
                    <li class="nav-item dropdown pl-1">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Products
                        </a>
                        {{--add links for dropdowns--}}
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{route('products.index')}}">Product Overview</a>
                            <a class="dropdown-item" href="{{route('tag', 1)}}">Apparel</a>
                            <a class="dropdown-item" href="{{route('tag', 2)}}">Drinkware</a>
                            <a class="dropdown-item" href="{{route('tag', 3)}}">Bags</a>
                            <a class="dropdown-item" href="{{route('tag', 4)}}">Tactical</a>
                            <a class="dropdown-item" href="{{route('tag', 5)}}">Coins</a>
                            <a class="dropdown-item" href="{{route('tag', 6)}}">Miscellaneous</a>
                        </div>
                    </li>
                    <li class="nav-item pl-1">
                        <a class="nav-link" href="{{ route('suppliers.index') }}">Manufacturers</a>
                    </li>
                    <li class="nav-item pl-1">
                        <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
                    </li>
                    <li class="nav-item pl-1">
                        <a class="nav-link" href="{{ route('search') }}">Search</a>
                    </li>
                @else
                    <li class="nav-item pl-1">
                        <a class="nav-link" href="{{ route('home') }}">About</a>
                    </li>
                    <li class="nav-item dropdown pl-1">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Products
                        </a>
                        {{--add links for dropdowns--}}
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{route('products.index')}}">Product Overview</a>
                            <a class="dropdown-item" href="{{route('tag', 1)}}">Apparel</a>
                            <a class="dropdown-item" href="{{route('tag', 2)}}">Drinkware</a>
                            <a class="dropdown-item" href="{{route('tag', 3)}}">Bags</a>
                            <a class="dropdown-item" href="{{route('tag', 4)}}">Tactical</a>
                            <a class="dropdown-item" href="{{route('tag', 5)}}">Coins</a>
                            <a class="dropdown-item" href="{{route('tag', 6)}}">Miscellaneous</a>
                        </div>
                    </li>
                    <li class="nav-item pl-1">
                        <a class="nav-link" href="{{ route('suppliers.index') }}">Manufacturers</a>
                    </li>
                    <li class="nav-item pl-1">
                        <a class="nav-link" href="{{route('contact')}}">Contact Us</a>
                    </li>
                    <li class="nav-item pl-1">
                        <a class="nav-link" href="{{ route('search') }}">Search</a>
                    </li>
                    <li class="nav-item dropdown pl-1">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
