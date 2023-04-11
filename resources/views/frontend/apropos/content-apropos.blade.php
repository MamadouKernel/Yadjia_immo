<!-- Page Header Start -->
<div class="container-fluid page-header">
    <h1 class="display-3 text-uppercase text-white mb-3">À propos</h1>
    <div class="d-inline-flex text-white">
        <h6 class="text-uppercase m-0"><a href="">Accueil</a></h6>
        <h6 class="text-white m-0 px-3">/</h6>
        <h6 class="text-uppercase text-white m-0">À propos</h6>
    </div>
</div>
<!-- Page Header Start -->
<!-- About Start -->
<div class="container-fluid py-6 px-5">
    <div class="row g-5">
        <div class="col-lg-7">
            <h1 class="display-5 text-uppercase mb-4">Nous sommes <span class="text-primary">le leader</span> dans
                Industrie de construction</h1>
            <h4 class="text-uppercase mb-3 text-body">Tempor erat elitr at rebum at at clita. Diam dolor diam ipsum
                tempor sit diam amet diam et eos labore</h4>
            <p>Tempor erat elitr at rebum at at clita aliquyam consetetur. Diam dolor diam ipsum et, tempor voluptua sit
                consetetur sit. Aliquyam diam amet diam et eos sadipscing labore. Clita erat ipsum et lorem et sit, sed
                stet no labore lorem sit. Sanctus clita duo justo et tempor</p>
            <div class="row gx-5 py-2">
                <div class="col-sm-6 mb-2">
                    <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Perfect Planning</p>
                    <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Professional Workers</p>
                    <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>First Working Process</p>
                </div>
                <div class="col-sm-6 mb-2">
                    <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Perfect Planning</p>
                    <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Professional Workers</p>
                    <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>First Working Process</p>
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


<!-- Appointment Start -->
<div class="container-fluid bg-light py-6 px-5">
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
            <div class="bg-white text-center p-5">
                <form>
                    <div class="row g-3">
                        <div class="col-12 col-sm-6">
                            <input type="text" class="form-control bg-light border-0" placeholder="votre nom"
                                style="height: 55px;">
                        </div>
                        <div class="col-12 col-sm-6">
                            <input type="email" class="form-control bg-light border-0" placeholder="Votre e-mail"
                                style="height: 55px;">
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="date" id="date" data-target-input="nearest">
                                <input type="text" class="form-control bg-light border-0 datetimepicker-input"
                                    placeholder="Rappel Date" data-target="#date" data-toggle="datetimepicker"
                                    style="height: 55px;">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="time" id="time" data-target-input="nearest">
                                <input type="text" class="form-control bg-light border-0 datetimepicker-input"
                                    placeholder="Temps de rappel" data-target="#time" data-toggle="datetimepicker"
                                    style="height: 55px;">
                            </div>
                        </div>
                        <div class="col-12">
                            <textarea class="form-control bg-light border-0" rows="5" placeholder="Message"></textarea>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" type="submit">Envoyer la demande</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Appointment End -->
