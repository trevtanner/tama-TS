@extends('layouts.app')

@section('title')
    <title>FAQ - Tama Team Sports</title>
    @endsection

@section('content')
<div class="container pt-4 tama">
    <div class="row justify-content-center">
        <h1>FAQ</h1>
    </div>
    <br>
        <div class="row justify-content-center">
            <div class="col-md-8">
            <h5 class="text-center">
            Here at Tama Team Sports we get many questions. We hope we can answer the most frequent ones on this page,
                but if you have any specific questions or one you do not see answered here, please feel free to
                <a href="{{ route('contact') }}">contact us</a>.
            </h5>
        </div>
        </div>
    <br>
    <hr>
    <br>
    <div class="row justify-content-center">
        <h4 class="text-center col-md-8">
What Type of Imprinting can you do?
        </h4>
    </div>
    <br>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <p class="text-center">
                Tama Team sports offers many different ways to imprint, however our main types are:
                </p>
                    <ul class="list-group">
                    <li class="list-group-item text-center">Heat Press</li>
                    <li class="list-group-item text-center">Screen Printing</li>
                    <li class="list-group-item text-center">Embroidery</li>
                    <li class="list-group-item text-center">Laser Engraving</li>
                </ul>
                <p class="text-center pt-4">
                Any other questions about Imprinting can be found on our <a href="{{ route('imprint') }}">Imprint</a> page.
                </p>
            </div>
        </div>
<br>
    <hr>
    <br>
    <div class="row justify-content-center">
        <h4 class="text-center col-md-8">
How do you ship you orders?
        </h4>
    </div>
    <br>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <p class="text-center">
                    Igitur neque stultorum quisquam beatus neque sapientium non beatus. Ergo et avarus erit, sed finite,
                    et adulter, verum habebit modum, et luxuriosus eodem modo. Non enim solum Torquatus dixit quid
                    sentiret, sed etiam cur.
                </p>
            </div>
        </div>
<br>
<hr>
<br>
<div class="row justify-content-center">
    <h4 class="text-center col-md-8">
       Do you have any products not shown on this site?
    </h4>
</div>
    <br>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <p class="text-center">
                We constantly try to update this site with new products as often as we can but, sometimes things will be released
                before we have a chance to add it to the site. For the most up to date information on products please
                <a href="{{ route('contact') }}">contact us</a>.
            </p>
        </div>
    </div>
</div>
@endsection
