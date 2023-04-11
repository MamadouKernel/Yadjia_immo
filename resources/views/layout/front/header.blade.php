<!-- Topbar Start -->
<div class="container-fluid px-5 d-none d-lg-block">
    <div class="row gx-5">
        <div class="col-lg-4 text-center py-3">
            <div class="d-inline-flex align-items-center">
                <i class="bi bi-geo-alt fs-1 text-primary me-3"></i>
                <div class="text-start">
                    <h6 class="text-uppercase fw-bold">Notre bureau</h6>
                    <span>Cocody 2 plateaux rue des jardins, Archidek, Abidjan, Côte d'ivoire</span>
                </div>
            </div>
        </div>
        <div class="col-lg-4 text-center border-start border-end py-3">
            <div class="d-inline-flex align-items-center">
                <i class="bi bi-envelope-open fs-1 text-primary me-3"></i>
                <div class="text-start">
                    <h6 class="text-uppercase fw-bold">Envoyez-nous un email</h6>
                    <span>contact@yadjia.com</span>
                </div>
            </div>
        </div>
        <div class="col-lg-4 text-center py-3">
            <div class="d-inline-flex align-items-center">
                <i class="bi bi-phone-vibrate fs-1 text-primary me-3"></i>
                <div class="text-start">
                    <h6 class="text-uppercase fw-bold">Appelez-nous</h6>
                    <span>+225 2722 466 202</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->
<!-- Navbar Start -->
<div class="container-fluid sticky-top bg-dark bg-light-radial shadow-sm px-5 pe-lg-0">
    <nav class="navbar navbar-expand-lg bg-dark bg-light-radial navbar-dark py-3 py-lg-0">
        <a routerLink="/Accueil" class="navbar-brand">
            <!--<h1 class="m-0 display-4 text-uppercase text-white"><i class="bi bi-building text-primary me-2"></i>Yadjia-Immobilier</h1>-->
            <img src="{{ asset('assets/frontend/img/logo-2.jpeg')}}" class="img-fluid img-thumbnail" style="width: 50%;" alt="" srcset="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">

                <a href="{{route('get.accueil.index')}}" class="nav-item nav-link"
                   >Accueil</a>
                <a href="{{route('get.apropos.index')}}" class="nav-item nav-link"
                   >À propos</a>
                <a href="{{route('get.service.index')}}"
                    class="nav-item nav-link">Nos Services</a>
                <a href="{{route('get.projet.index')}}"
                    class="nav-item nav-link">Nos Projets</a>
                <a href="{{route('get.contact.index')}}"
                    class="nav-item nav-link">Contactez-nous</a>
            </div>
        </div>
    </nav>
</div>
<!-- Navbar End -->
