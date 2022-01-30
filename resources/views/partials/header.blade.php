<header class="fixed-top">
    <nav class="headline head-text navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand fs-3" href="{{ route('home') }}">Techify</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-flex justify-content-between w-100" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a aria-current="page" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a aria-current="page" href="{{ route('products.index') }}">Products Archive</a>
                    </li>
                </ul>
                <a class="fs-4 px-3" aria-current="page" href="#">
                    Shopping Cart <i class="px-3 fas fa-shopping-cart"></i></a>
            </div>
        </div>
    </nav>
</header>