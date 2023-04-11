<!-- Carousel Start -->
<div class="container-fluid p-0">
    <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="{{ asset('assets/frontend/img/carousel-1.jpg')}}" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <i class="fa fa-home fa-4x text-primary mb-4 d-none d-sm-block"></i>
                        <h1 class="display-2 text-uppercase text-white mb-md-4">Construisez votre maison de rêve avec
                            nous</h1>
                        <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Obtenez un devis</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="{{ asset('assets/frontend/img/carousel-2.jpg')}}" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <i class="fa fa-tools fa-4x text-primary mb-4 d-none d-sm-block"></i>
                        <h1 class="display-2 text-uppercase text-white mb-md-4">On nous fait confiance pour votre projet
                        </h1>
                        <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Contactez-nous</a>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- Carousel End -->


<!-- About Start -->
<div class="container-fluid py-6 px-5">
    <div class="row g-5">
        <div class="col-lg-7">
            <h1 class="display-5 text-uppercase mb-4">Nous sommes <span class="text-primary">le meneur</span> dans
                l'industrie de la construction</h1>
            <h4 class="text-uppercase mb-3 text-body">Tempor erat elitr at rebum at at clita. Diam dolor diam ipsum
                tempor sit diam amet diam et eos labore</h4>
            <p>Tempor erat elitr at rebum at at clita aliquyam consetetur. Diam dolor diam ipsum et, tempor voluptua sit
                consetetur sit. Aliquyam diam amet diam et eos sadipscing labore. Clita erat ipsum et lorem et sit, sed
                stet no labore lorem sit. Sanctus clita duo justo et tempor</p>
            <div class="row gx-5 py-2">
                <div class="col-sm-6 mb-2">
                    <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Planification parfaite</p>
                    <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Professionnels</p>
                    <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Premier processus de travail
                    </p>
                </div>
                <div class="col-sm-6 mb-2">
                    <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Planification parfaite</p>
                    <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Professionnels</p>
                    <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Premier processus de travail
                    </p>
                </div>
            </div>
            <p class="mb-4">Tempor erat elitr at rebum at at clita aliquyam consetetur. Diam dolor diam ipsum et, tempor
                voluptua sit consetetur sit. Aliquyam diam amet diam et eos labore</p>
            <img src="{{ asset('assets/frontend/img/signature.jpg')}}" alt="">
        </div>
        <div class="col-lg-5 pb-5" style="min-height: 400px;">
            <div class="position-relative bg-dark-radial h-100 ms-5">
                <img class="position-absolute w-100 h-100 mt-5 ms-n5" src="{{ asset('assets/frontend/img/about.jpg')}}"
                    style="object-fit: cover;">
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Services Start -->
<div class="container-fluid bg-light py-6 px-5">
    <div class="text-center mx-auto mb-5" style="max-width: 600px;">
        <h1 class="display-5 text-uppercase mb-4">Nous fournissons <span class="text-primary">Le meilleur</span>
            Services de construction</h1>
    </div>
    <div class="row g-5">
        <div class="col-lg-4 col-md-6">
            <div class="service-item bg-white d-flex flex-column align-items-center text-center">
                <img class="img-fluid" src="{{ asset('assets/frontend/img/service-1.jpg')}}" alt="">
                <div class="service-icon bg-white">
                    <i class="fa fa-3x fa-building text-primary"></i>
                </div>
                <div class="px-4 pb-4">
                    <h4 class="text-uppercase mb-3">Construction de bâtiments</h4>
                    <p>Duo dolore et diam sed ipsum stet amet duo diam. Rebum amet ut amet sed erat sed sed amet magna
                        elitr amet kasd diam duo</p>
                    <a class="btn text-primary" href="">En savoir plus <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="service-item bg-white rounded d-flex flex-column align-items-center text-center">
                <img class="img-fluid" src="{{ asset('assets/frontend/img/service-2.jpg')}}" alt="">
                <div class="service-icon bg-white">
                    <i class="fa fa-3x fa-home text-primary"></i>
                </div>
                <div class="px-4 pb-4">
                    <h4 class="text-uppercase mb-3">Rénovation de la maison</h4>
                    <p>Duo dolore et diam sed ipsum stet amet duo diam. Rebum amet ut amet sed erat sed sed amet magna
                        elitr amet kasd diam duo</p>
                    <a class="btn text-primary" href="">En savoir plus <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="service-item bg-white rounded d-flex flex-column align-items-center text-center">
                <img class="img-fluid" src="{{ asset('assets/frontend/img/service-3.jpg')}}" alt="">
                <div class="service-icon bg-white">
                    <i class="fa fa-3x fa-drafting-compass text-primary"></i>
                </div>
                <div class="px-4 pb-4">
                    <h4 class="text-uppercase mb-3">Conception d'architecture</h4>
                    <p>Duo dolore et diam sed ipsum stet amet duo diam. Rebum amet ut amet sed erat sed sed amet magna
                        elitr amet kasd diam duo</p>
                    <a class="btn text-primary" href="">En savoir plus <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="service-item bg-white rounded d-flex flex-column align-items-center text-center">
                <img class="img-fluid" src="{{ asset('assets/frontend/img/service-4.jpg')}}" alt="">
                <div class="service-icon bg-white">
                    <i class="fa fa-3x fa-palette text-primary"></i>
                </div>
                <div class="px-4 pb-4">
                    <h4 class="text-uppercase mb-3">Design d'intérieur</h4>
                    <p>Duo dolore et diam sed ipsum stet amet duo diam. Rebum amet ut amet sed erat sed sed amet magna
                        elitr amet kasd diam duo</p>
                    <a class="btn text-primary" href="">En savoir plus <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="service-item bg-white rounded d-flex flex-column align-items-center text-center">
                <img class="img-fluid" src="{{ asset('assets/frontend/img/service-5.jpg')}}" alt="">
                <div class="service-icon bg-white">
                    <i class="fa fa-3x fa-tools text-primary"></i>
                </div>
                <div class="px-4 pb-4">
                    <h4 class="text-uppercase mb-3">Fixation et support</h4>
                    <p>Duo dolore et diam sed ipsum stet amet duo diam. Rebum amet ut amet sed erat sed sed amet magna
                        elitr amet kasd diam duo</p>
                    <a class="btn text-primary" href="">En savoir plus <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="service-item bg-white rounded d-flex flex-column align-items-center text-center">
                <img class="img-fluid" src="{{ asset('assets/frontend/img/service-6.jpg')}}" alt="">
                <div class="service-icon bg-white">
                    <i class="fa fa-3x fa-paint-brush text-primary"></i>
                </div>
                <div class="px-4 pb-4">
                    <h4 class="text-uppercase mb-3">Peinture</h4>
                    <p>Duo dolore et diam sed ipsum stet amet duo diam. Rebum amet ut amet sed erat sed sed amet magna
                        elitr amet kasd diam duo</p>
                    <a class="btn text-primary" href="">En savoir plus <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services End -->


<!-- Appointment Start -->
<div class="container-fluid py-6 px-5">
    <div class="row gx-5">
        <div class="col-lg-4 mb-5 mb-lg-0">
            <div class="mb-4">
                <h1 class="display-5 text-uppercase mb-4">Demander un <span class="text-primary">rappel</span></h1>
            </div>
            <p class="mb-5">Nonumy ipsum amet tempor takimata vero ea elitr. Diam diam ut et eos duo duo sed. Lorem
                elitr sadipscing eos et ut et stet justo, sit dolore et voluptua labore. Ipsum erat et ea ipsum magna
                sadipscing lorem. Sit lorem sea sanctus eos. Sanctus sit tempor dolores ipsum stet justo sit erat ea,
                sed diam sanctus takimata sit. Et at voluptua amet erat justo amet ea ipsum eos, eirmod accusam sea sed
                ipsum kasd ut.</p>
            <a class="btn btn-primary py-3 px-5" href="">Obtenez un devis</a>
        </div>
        <div class="col-lg-8">
            <div class="bg-light text-center p-5">
                <form>
                    <div class="row g-3">
                        <div class="col-12 col-sm-6">
                            <input type="text" class="form-control border-0" placeholder="Your Name"
                                style="height: 55px;">
                        </div>
                        <div class="col-12 col-sm-6">
                            <input type="email" class="form-control border-0" placeholder="Your Email"
                                style="height: 55px;">
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="date" id="date" data-target-input="nearest">
                                <input type="text" class="form-control border-0 datetimepicker-input"
                                    placeholder="Call Back Date" data-target="#date" data-toggle="datetimepicker"
                                    style="height: 55px;">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="time" id="time" data-target-input="nearest">
                                <input type="text" class="form-control border-0 datetimepicker-input"
                                    placeholder="Call Back Time" data-target="#time" data-toggle="datetimepicker"
                                    style="height: 55px;">
                            </div>
                        </div>
                        <div class="col-12">
                            <textarea class="form-control border-0" rows="5" placeholder="Message"></textarea>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" type="submit">Submit Request</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Appointment End -->


<!-- Portfolio Start -->
<div class="container-fluid bg-light py-6 px-5">
    <div class="text-center mx-auto mb-5" style="max-width: 600px;">
        <h1 class="display-5 text-uppercase mb-4">Certains de nos<span class="text-primary"> projets de rêve</span>
            populaires</h1>
    </div>
    <div class="row gx-5">
        <div class="col-12 text-center">
            <div class="d-inline-block bg-dark-radial text-center pt-4 px-5 mb-5">
                <ul class="list-inline mb-0" id="portfolio-flters">
                    <li class="btn btn-outline-primary bg-white p-2 active mx-2 mb-4" data-filter="*">
                        <img src="{{ asset('assets/frontend/img/portfolio-1.jpg')}}" style="width: 150px; height: 100px;">
                        <div class="position-absolute top-0 start-0 end-0 bottom-0 m-2 d-flex align-items-center justify-content-center"
                            style="background: rgba(4, 15, 40, .3);">
                            <h6 class="text-white text-uppercase m-0">All</h6>
                        </div>
                    </li>
                    <li class="btn btn-outline-primary bg-white p-2 mx-2 mb-4" data-filter=".first">
                        <img src="{{ asset('assets/frontend/img/portfolio-2.jpg')}}" style="width: 150px; height: 100px;">
                        <div class="position-absolute top-0 start-0 end-0 bottom-0 m-2 d-flex align-items-center justify-content-center"
                            style="background: rgba(4, 15, 40, .3);">
                            <h6 class="text-white text-uppercase m-0">Construction</h6>
                        </div>
                    </li>
                    <li class="btn btn-outline-primary bg-white p-2 mx-2 mb-4" data-filter=".second">
                        <img src="{{ asset('assets/frontend/img/portfolio-3.jpg')}}" style="width: 150px; height: 100px;">
                        <div class="position-absolute top-0 start-0 end-0 bottom-0 m-2 d-flex align-items-center justify-content-center"
                            style="background: rgba(4, 15, 40, .3);">
                            <h6 class="text-white text-uppercase m-0">Renovation</h6>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row g-5 portfolio-container">
        <div class="col-xl-4 col-lg-6 col-md-6 portfolio-item first">
            <div class="position-relative portfolio-box">
                <img class="img-fluid w-100" src="{{ asset('assets/frontend/img/portfolio-1.jpg')}}" alt="">
                <a class="portfolio-title shadow-sm" href="">
                    <p class="h4 text-uppercase">Project Name</p>
                    <span class="text-body"><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York,
                        USA</span>
                </a>
                <a class="portfolio-btn" href="{{ asset('assets/frontend/img/portfolio-1.jpg')}}" data-lightbox="portfolio">
                    <i class="bi bi-plus text-white"></i>
                </a>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-6 portfolio-item second">
            <div class="position-relative portfolio-box">
                <img class="img-fluid w-100" src="{{ asset('assets/frontend/img/portfolio-2.jpg')}}" alt="">
                <a class="portfolio-title shadow-sm" href="">
                    <p class="h4 text-uppercase">Project Name</p>
                    <span class="text-body"><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York,
                        USA</span>
                </a>
                <a class="portfolio-btn" href="{{ asset('assets/frontend/img/portfolio-2.jpg')}}" data-lightbox="portfolio">
                    <i class="bi bi-plus text-white"></i>
                </a>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-6 portfolio-item first">
            <div class="position-relative portfolio-box">
                <img class="img-fluid w-100" src="{{ asset('assets/frontend/img/portfolio-3.jpg')}}" alt="">
                <a class="portfolio-title shadow-sm" href="">
                    <p class="h4 text-uppercase">Project Name</p>
                    <span class="text-body"><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York,
                        USA</span>
                </a>
                <a class="portfolio-btn" href="{{ asset('assets/frontendimg/portfolio-3.jpg')}}" data-lightbox="portfolio">
                    <i class="bi bi-plus text-white"></i>
                </a>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-6 portfolio-item second">
            <div class="position-relative portfolio-box">
                <img class="img-fluid w-100" src="{{ asset('assets/frontend/img/portfolio-4.jpg')}}" alt="">
                <a class="portfolio-title shadow-sm" href="">
                    <p class="h4 text-uppercase">Project Name</p>
                    <span class="text-body"><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York,
                        USA</span>
                </a>
                <a class="portfolio-btn" href="{{ asset('assets/frontend/img/portfolio-4.jpg')}}" data-lightbox="portfolio">
                    <i class="bi bi-plus text-white"></i>
                </a>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-6 portfolio-item first">
            <div class="position-relative portfolio-box">
                <img class="img-fluid w-100" src="{{ asset('assets/frontend/img/portfolio-5.jpg')}}" alt="">
                <a class="portfolio-title shadow-sm" href="">
                    <p class="h4 text-uppercase">Project Name</p>
                    <span class="text-body"><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York,
                        USA</span>
                </a>
                <a class="portfolio-btn" href="{{ asset('assets/frontend/img/portfolio-5.jpg')}}" data-lightbox="portfolio">
                    <i class="bi bi-plus text-white"></i>
                </a>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-6 portfolio-item second">
            <div class="position-relative portfolio-box">
                <img class="img-fluid w-100" src="{{ asset('assets/frontend/img/portfolio-6.jpg')}}" alt="">
                <a class="portfolio-title shadow-sm" href="">
                    <p class="h4 text-uppercase">nom du projet</p>
                    <span class="text-body"><i class="fa fa-map-marker-alt text-primary me-2"></i>Cocody rue des
                        jardins, Abidjan, Côte d'Ivoire</span>
                </a>
                <a class="portfolio-btn" href="{{ asset('assets/frontend/img/portfolio-6.jpg')}}" data-lightbox="portfolio">
                    <i class="bi bi-plus text-white"></i>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Portfolio End -->
