@section('nav')
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">

            <a class="navbar-brand" href="https://superiorwellness.co.uk" rel="home">
                <img src="{{ URL::asset('/images/mainLogo.png') }}" alt="mainLogo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">ABOUT <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">OUR BRANDS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">WELLNESS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">NEWS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">CAREERS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">BECOME A PARTNER</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">CONTACT US</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
@endsection

