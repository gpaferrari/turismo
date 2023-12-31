@extends('template/index')

@section('contents')

<section class="py-7 overflow-hidden" id="hotels">
        <div class="container bg-offcanvas-gray-right">
          <div class="row gx-2">
            <div class="col-sm-6 col-lg-4">
              <div class="bg-primary-gradient h-100 d-flex align-items-end">
                <div class="row g-0 justify-content-start">
                  <div class="col-xl-9">
                    <div class="p-3 px-lg-4 text-light"><img class="mb-5" src="assets/img/icons/icon-hotel.svg" alt="..." />
                      <h2 class="mb-3 text-light">Descubra nossos melhores hotéis para se hospedar</h2>
                      <p>Agrupe ingressos com qualquer hotel para economizar em todo o seu pedido. Siga o método 'Agrupar' escolhendo a acomodação certa do hotel após adicionar os ingressos ao seu carrinho.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4">
              <div class="row g-2">
                <div class="col-12">
                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100 w-100" src="assets/img/gallery/moon-house-hotel.png" height="375" alt="..." />
                    <div class="card-img-overlay ps-0 d-flex flex-column justify-content-between bg-voyage-gradient">
                      <div class="mt-auto px-4">
                        <h3 class="fs-1 fs-md-2 text-white">Moon House Hotel</h3>
                        <div class="d-flex align-items-center justify-content-start"><span class="text-light fs--1 me-1"><i class="fas fa-map-marker-alt"></i></span><span class="text-light me-md-3">Soi Petchburi 19, Bankok</span></div>
                        <p class="mb-0 mt-3">Começar Por </p>
                        <h1 class="mb-2 text-light fw-bolder fs-2 fs-md-4"><span>R$175</span><span class="text-light fs--1 fw-normal">Por Pessoa</span></h1>
                      </div>
                    </div><a class="stretched-link" href="#!"> </a>
                  </div>
                </div>
                <div class="col-12">
                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100 w-100" src="assets/img/gallery/blue-mosque-hotel.png" height="375" alt="..." />
                    <div class="card-img-overlay ps-0 d-flex flex-column justify-content-between bg-voyage-gradient">
                      <div class="mt-auto px-4">
                        <h3 class="fs-1 fs-md-2 text-white">Blue Mosque Hotel</h3>
                        <div class="d-flex align-items-center justify-content-start"><span class="text-light fs--1 me-1"><i class="fas fa-map-marker-alt"></i></span><span class="text-light me-md-3">Dismesi Sokak, Istanbul</span></div>
                        <p class="mb-0 mt-3">Começar Por </p>
                        <h1 class="mb-2 text-light fw-bolder fs-2 fs-md-4"><span>R$175</span><span class="text-light fs--1 fw-normal">Por Pessoa</span></h1>
                      </div>
                    </div><a class="stretched-link" href="#!"> </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4">
              <div class="row g-2">
                <div class="col-12">
                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100 w-100" src="assets/img/gallery/hotel-royal.png" height="375" alt="..." />
                    <div class="card-img-overlay ps-0 d-flex flex-column justify-content-between bg-voyage-gradient">
                      <div class="mt-auto px-4">
                        <h3 class="fs-1 fs-md-2 text-white">Hotel Royal</h3>
                        <div class="d-flex align-items-center justify-content-start"><span class="text-light fs--1 me-1"><i class="fas fa-map-marker-alt"></i></span><span class="text-light me-md-3">Kedewatan, Bali</span></div>
                        <p class="mb-0 mt-3">Começar Por </p>
                        <h1 class="mb-2 text-light fw-bolder fs-2 fs-md-4"><span>R$175</span><span class="text-light fs--1 fw-normal">Por Pessoa</span></h1>
                      </div>
                    </div><a class="stretched-link" href="#!"> </a>
                  </div>
                </div>
                <div class="col-12">
                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100 w-100" src="assets/img/gallery/boutique-hotel.png" height="375" alt="..." />
                    <div class="card-img-overlay ps-0 d-flex flex-column justify-content-between bg-voyage-gradient">
                      <div class="mt-auto px-4">
                        <h3 class="fs-1 fs-md-2 text-white">The Rin Boutique Hotel</h3>
                        <div class="d-flex align-items-center justify-content-start"><span class="text-light fs--1 me-1"><i class="fas fa-map-marker-alt"></i></span><span class="text-light me-md-3">Bang Lamung, Pattaya</span></div>
                        <p class="mb-0 mt-3">Começar Por </p>
                        <h1 class="mb-2 text-light fw-bolder fs-2 fs-md-4"><span>R$175</span><span class="text-light fs--1 fw-normal">Por Pessoa</span></h1>
                      </div>
                    </div><a class="stretched-link" href="#!"> </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-8 gy-2">
              <div class="bg-secondary-gradient h-100 d-flex align-items-center">
                <div class="text-light py-6">
                  <div class="row">
                    <div class="col-12 col-xl-6">
                      <p class="fs-1 px-5">In our offers, we have more hotels. Just to make your stay easy for your best interests.</p>
                    </div>
                    <div class="col-12 col-xl-6 text-end"><a class="btn btn-lg text-light fs-1 fs-sm--1 fs-md-1 px-5" href="#!" role="button">Clique para ver mais
                        <svg class="bi bi-arrow-right-circle ms-3" xmlns="http://www.w3.org/2000/svg" width="55" height="55" fill="currentColor" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"></path>
                        </svg></a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

@endsection