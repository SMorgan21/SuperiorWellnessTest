{{--Start of nav content--}}
@section('nav')
    <div class="container">
        <nav class="navbar navbar-expand-lg pb-5">
            {{-- Logo --}}
            <a class="navbar-brand" href="https://superiorwellness.co.uk" rel="home">
                <img src="{{ URL::asset('/images/mainLogo.webp') }}" alt="mainLogo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            {{-- Links --}}
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('containerForm')}}">ADD CONTAINER DATA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('containerData')}}">VIEW CONTAINER DATA</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
@endsection

