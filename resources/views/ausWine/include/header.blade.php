    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <div class="container-fluid">
            <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse text-white" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link fw-bold text-white" href="{{url('/')}}">AusWine</a>
                    <a class="nav-link text-white" href="{{url('/')}}">Home</a>
                    <a class="nav-link text-white" href="{{route('ausWine.create')}}">Add wine</a>
                    <a class="nav-link text-white" href="{{route('ausWine.index')}}">View All Wines</a>
                </div>
            </div>
        </div>
    </nav>
