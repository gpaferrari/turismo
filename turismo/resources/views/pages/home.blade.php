@extends('template/index')

@section('contents')

<section class="mt-7 py-0">
        <div class="bg-holder w-50 bg-right d-none d-lg-block" style="background-image:url(assets/img/gallery/hero-section-1.png);">
        </div>
        <!--/.bg-holder-->

        <div class="container">
          <div class="row">
            <div class="col-lg-6 py-5 py-xl-5 py-xxl-7">
              <h1 class="display-3 text-1000 fw-normal">Vamos fazer um passeio</h1>
              <h1 class="display-3 text-primary fw-bold">Descubra a beleza</h1>
              <div class="pt-5">
                <nav>
                  <div class="nav nav-tabs voyage-tabs" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true"><i class="fas fa-map-marker-alt"></i></button>
                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false"> <i class="fas fa-plane"></i></button>
                    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false"> <i class="fas fa-hotel"></i></button>
                  </div>
                  <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                      <form class="row g-4 mt-5">
                        <div class="col-sm-6 col-md-6 col-xl-5">
                          <div class="input-group-icon">
                            <label class="form-label visually-hidden" for="inputAddress1">Endereço 1</label>
                            <input class="form-control input-box form-voyage-control" id="inputAddress1" type="text" placeholder="From where" /><span class="nav-link-icon text-800 fs--1 input-box-icon"><i class="fas fa-map-marker-alt"></i></span>
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-5">
                          <div class="input-group-icon">
                            <label class="form-label visually-hidden" for="inputAddress2">Endereço 2</label>
                            <input class="form-control input-box form-voyage-control" id="inputAddress2" type="text" placeholder="To where" /><span class="nav-link-icon text-800 fs--1 input-box-icon"><i class="fas fa-map-marker-alt"> </i></span>
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-5">
                          <div class="input-group-icon">
                            <input class="form-control input-box form-voyage-control" id="inputdateOne" type="date" /><span class="nav-link-icon text-800 fs--1 input-box-icon"><i class="fas fa-calendar"></i></span>
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-5">
                          <div class="input-group-icon">
                            <input class="form-control input-box form-voyage-control" id="inputDateTwo" type="date" /><span class="nav-link-icon text-800 fs--1 input-box-icon"><i class="fas fa-calendar"></i></span>
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-5">
                          <div class="input-group-icon">
                            <label class="form-label visually-hidden" for="inputPersonOne">Pessoa</label>
                            <select class="form-select form-voyage-select input-box" id="inputPersonOne">
                              <option selected="selected">2 dultos</option>
                              <option>2 adultos 1 criança</option>
                              <option>2 adultos 2 crianças</option>
                            </select><span class="nav-link-icon text-800 fs--1 input-box-icon"><i class="fas fa-user"> </i></span>
                          </div>
                        </div>
                        <div class="col-12 col-xl-10 col-lg-12 d-grid mt-6">
                          <button class="btn btn-secondary" type="submit">Buscar Pacotes</button>
                        </div>
                      </form>
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                      <form class="row g-4 mt-5">
                        <div class="col-6">
                          <div class="input-group-icon">
                            <label class="form-label visually-hidden" for="inputAddressThree">Endereço 1</label>
                            <input class="form-control input-box form-voyage-control" id="inputAddressThree" type="text" placeholder="From where" /><span class="nav-link-icon text-800 fs--1 input-box-icon"><i class="fas fa-map-marker-alt"></i></span>
                          </div>
                        </div>
                        <div class="col-6">
                          <div class="input-group-icon">
                            <label class="form-label visually-hidden" for="inputAddressFour">Endereço 2</label>
                            <input class="form-control input-box form-voyage-control" id="inputAddressFour" type="text" placeholder="To where" /><span class="nav-link-icon text-800 fs--1 input-box-icon"><i class="fas fa-map-marker-alt"> </i></span>
                          </div>
                        </div>
                        <div class="col-6">
                          <div class="input-group-icon">
                            <input class="form-control input-box form-voyage-control" id="inputDateThree" type="date" /><span class="nav-link-icon text-800 fs--1 input-box-icon"><i class="fas fa-calendar"></i></span>
                          </div>
                        </div>
                        <div class="col-6">
                          <div class="input-group-icon">
                            <input class="form-control input-box form-voyage-control" id="inputDateFour" type="date" /><span class="nav-link-icon text-800 fs--1 input-box-icon"><i class="fas fa-calendar"></i></span>
                          </div>
                        </div>
                        <div class="col-6">
                          <div class="input-group-icon">
                            <label class="form-label visually-hidden" for="inputPeopleTwo">People</label>
                            <select class="form-select form-voyage-select input-box" id="inputPeopleTwo">
                              <option selected="selected">2 adultos</option>
                              <option>2 adultos 1 crianças</option>
                              <option>2 adultos 2 crianças</option>
                            </select><span class="nav-link-icon text-800 fs--1 input-box-icon"><i class="fas fa-user"> </i></span>
                          </div>
                        </div>
                        <div class="col-12 d-grid mt-6">
                          <button class="btn btn-secondary" type="submit">Search Packages</button>
                        </div>
                      </form>
                    </div>
                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                      <form class="row g-4 mt-5">
                        <div class="col-6">
                          <div class="input-group-icon">
                            <input class="form-control input-box form-voyage-control" id="inputDateFive" type="date" /><span class="nav-link-icon text-800 fs--1 input-box-icon"><i class="fas fa-calendar"></i></span>
                          </div>
                        </div>
                        <div class="col-6">
                          <div class="input-group-icon">
                            <input class="form-control input-box form-voyage-control" id="inputDateSix" type="date" /><span class="nav-link-icon text-800 fs--1 input-box-icon"><i class="fas fa-calendar"></i></span>
                          </div>
                        </div>
                        <div class="col-6">
                          <div class="input-group-icon">
                            <label class="form-label visually-hidden" for="inputPeopleThree">Person</label>
                            <select class="form-select form-voyage-select input-box" id="inputPeopleThree">
                              <option selected="selected">2 Adultos</option>
                              <option>2 Adultos 1 Criança</option>
                              <option>2 Adultos 2 Crianças</option>
                            </select><span class="nav-link-icon text-800 fs--1 input-box-icon"><i class="fas fa-user"> </i></span>
                          </div>
                        </div>
                        <div class="col-12 d-grid mt-6">
                          <button class="btn btn-secondary" type="submit">Buscar Pacotes</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </section>


      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-0 overflow-hidden">

        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-6 px-0"><img class="img-fluid order-md-0 mb-4 h-100 fit-cover" src="assets/img/gallery/hero-section-2.png" alt="..." /></div>
            <div class="col-lg-6 px-0 bg-primary-gradient bg-offcanvas-right">
              <div class="mx-6 mx-xl-8 my-8">
                <div class="align-items-center d-block d-flex mb-5"><img class="img-fluid me-3 me-md-2 me-lg-4" src="assets/img/icons/locations.png" alt="..." />
                  <div class="flex-1 align-items-center pt-2">
                    <h5 class="fw-bold text-light">Visite os lugares mais incríveis</h5>
                  </div>
                </div>
                <div class="align-items-center d-block d-flex mb-5"><img class="img-fluid me-3 me-md-2 me-lg-4" src="assets/img/icons/schedule.png" alt="..." />
                  <div class="flex-1 align-items-center pt-2">
                    <h5 class="fw-bold text-light">"Faça seus próprios planos.</h5>
                  </div>
                </div>
                <div class="align-items-center d-block d-flex mb-5"><img class="img-fluid me-3 me-md-2 me-lg-4" src="assets/img/icons/save.png" alt="..." />
                  <div class="flex-1 align-items-center pt-2">
                    <h5 class="fw-bold text-light">Economize 50% na sua próxima viagem</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->


      <section id="testimonial">
        <div class="container">
          <div class="row h-100">
            <div class="col-lg-7 mx-auto text-center mb-6">
              <h5 class="fw-bold fs-3 fs-lg-5 lh-sm mb-3">Ofertas Relâmpago</h5>
            </div>
            <div class="col-12">
              <div class="carousel slide" id="carouselTestimonials" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active" data-bs-interval="10000">
                    <div class="row h-100 align-items-center g-2">
                      <div class="col-md-4 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/maldives.png" alt="..." />
                          <div class="card-img-overlay ps-0"><span class="badge bg-primary ms-3 me-1 p-2"><i class="fas fa-clock me-1"></i><span>20:04:32:21</span></span><span class="badge bg-secondary p-2"><i class="fas fa-bolt me-1"></i><span>trending</span><i class="fas fa-bolt ms-1"> </i></span></div>
                          <div class="card-body ps-0">
                            <h5 class="fw-bold text-1000 mb-4 text-truncate">Mermaid Beach Resort: A maneira mais alegre de passar suas férias</h5>
                            <div class="d-flex align-items-center justify-content-start"><span class="text-800 fs--1 me-2"><i class="fas fa-map-marker-alt"></i></span><span class="text-900 me-3">Maldives</span><span class="text-800 fs--1 me-2"><i class="fas fa-calendar"></i></span><span class="text-900">4 days</span></div>
                            <p class="text-decoration-line-through text-900 mt-3 mb-0">R$200</p>
                            <h1 class="mb-3 text-primary fw-bolder fs-4"><span>R$175</span><span class="text-900 fs--1 fw-normal">Por Pessoa</span></h1><span class="badge bg-soft-secondary p-2"><i class="fas fa-tag text-secondary fs--1 me-1"></i><span class="text-secondary fw-normal fs-1">-15%</span></span>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/cinnamon.png" alt="..." />
                          <div class="card-img-overlay ps-0"><span class="badge bg-primary ms-3 me-1 p-2"><i class="fas fa-clock me-1"></i><span>20:04:32:21</span></span><span class="badge bg-secondary p-2"><i class="fas fa-bolt me-1"></i><span>trending</span><i class="fas fa-bolt ms-1"> </i></span></div>
                          <div class="card-body ps-0">
                            <h5 class="fw-bold text-1000 mb-4 text-truncate">Bora Bora: Desfrute de um passeio de cruzeiro romântico no lado ensolarado da vida</h5>
                            <div class="d-flex align-items-center justify-content-start"><span class="text-800 fs--1 me-2"><i class="fas fa-map-marker-alt"></i></span><span class="text-900 me-3">Maldives</span><span class="text-800 fs--1 me-2"><i class="fas fa-calendar"></i></span><span class="text-900">4 days</span></div>
                            <p class="text-decoration-line-through text-900 mt-3 mb-0">R$300</p>
                            <h1 class="mb-3 text-primary fw-bolder fs-4"><span>R$250</span><span class="text-900 fs--1 fw-normal">Por Pessoa</span></h1><span class="badge bg-soft-secondary p-2"><i class="fas fa-tag text-secondary fs--1 me-1"></i><span class="text-secondary fw-normal fs-1">-15%</span></span>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/dhigu.png" alt="..." />
                          <div class="card-img-overlay ps-0"><span class="badge bg-primary ms-3 me-1 p-2"><i class="fas fa-clock me-1"></i><span>20:04:32:21</span></span><span class="badge bg-secondary p-2"><i class="fas fa-bolt me-1"></i><span>trending</span><i class="fas fa-bolt ms-1"> </i></span></div>
                          <div class="card-body ps-0">
                            <h5 class="fw-bold text-1000 mb-4 text-truncate">Resort Ilha Fihalhohi: Destino de luxo sem compromissos</h5>
                            <div class="d-flex align-items-center justify-content-start"><span class="text-800 fs--1 me-2"><i class="fas fa-map-marker-alt"></i></span><span class="text-900 me-3">Maldives</span><span class="text-800 fs--1 me-2"><i class="fas fa-calendar"></i></span><span class="text-900">4 days</span></div>
                            <p class="text-decoration-line-through text-900 mt-3 mb-0">R$375</p>
                            <h1 class="mb-3 text-primary fw-bolder fs-4"><span>R$300</span><span class="text-900 fs--1 fw-normal">Por Pessoa</span></h1><span class="badge bg-soft-secondary p-2"><i class="fas fa-tag text-secondary fs--1 me-1"></i><span class="text-secondary fw-normal fs-1">-15%</span></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item" data-bs-interval="5000">
                    <div class="row h-100 align-items-center g-2">
                      <div class="col-md-4 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/maldives.png" alt="..." />
                          <div class="card-img-overlay ps-0"><span class="badge bg-primary ms-3 me-1 p-2"><i class="fas fa-clock me-1"></i><span>20:04:32:21</span></span><span class="badge bg-secondary p-2"><i class="fas fa-bolt me-1"></i><span>trending</span><i class="fas fa-bolt ms-1"> </i></span></div>
                          <div class="card-body ps-0">
                            <h5 class="fw-bold text-1000 mb-4 text-truncate">Mermaid Beach Resort: A maneira mais alegre de passar suas férias</h5>
                            <div class="d-flex align-items-center justify-content-start"><span class="text-800 fs--1 me-2"><i class="fas fa-map-marker-alt"></i></span><span class="text-900 me-3">Maldives</span><span class="text-800 fs--1 me-2"><i class="fas fa-calendar"></i></span><span class="text-900">4 days</span></div>
                            <p class="text-decoration-line-through text-900 mt-3 mb-0">R$200</p>
                            <h1 class="mb-3 text-primary fw-bolder fs-4"><span>R$175</span><span class="text-900 fs--1 fw-normal">Por Pessoa</span></h1><span class="badge bg-soft-secondary p-2"><i class="fas fa-tag text-secondary fs--1 me-1"></i><span class="text-secondary fw-normal fs-1">-15%</span></span>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/cinnamon.png" alt="..." />
                          <div class="card-img-overlay ps-0"><span class="badge bg-primary ms-3 me-1 p-2"><i class="fas fa-clock me-1"></i><span>20:04:32:21</span></span><span class="badge bg-secondary p-2"><i class="fas fa-bolt me-1"></i><span>trending</span><i class="fas fa-bolt ms-1"> </i></span></div>
                          <div class="card-body ps-0">
                            <h5 class="fw-bold text-1000 mb-4 text-truncate">Bora Bora: Desfrute de um passeio de cruzeiro romântico no lado ensolarado da vida</h5>
                            <div class="d-flex align-items-center justify-content-start"><span class="text-800 fs--1 me-2"><i class="fas fa-map-marker-alt"></i></span><span class="text-900 me-3">Maldives</span><span class="text-800 fs--1 me-2"><i class="fas fa-calendar"></i></span><span class="text-900">4 days</span></div>
                            <p class="text-decoration-line-through text-900 mt-3 mb-0">R$300</p>
                            <h1 class="mb-3 text-primary fw-bolder fs-4"><span>R$250</span><span class="text-900 fs--1 fw-normal">Por Pessoa</span></h1><span class="badge bg-soft-secondary p-2"><i class="fas fa-tag text-secondary fs--1 me-1"></i><span class="text-secondary fw-normal fs-1">-15%</span></span>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/dhigu.png" alt="..." />
                          <div class="card-img-overlay ps-0"><span class="badge bg-primary ms-3 me-1 p-2"><i class="fas fa-clock me-1"></i><span>20:04:32:21</span></span><span class="badge bg-secondary p-2"><i class="fas fa-bolt me-1"></i><span>trending</span><i class="fas fa-bolt ms-1"> </i></span></div>
                          <div class="card-body ps-0">
                            <h5 class="fw-bold text-1000 mb-4 text-truncate">Resort Ilha Fihalhohi: Destino de luxo sem compromissos</h5>
                            <div class="d-flex align-items-center justify-content-start"><span class="text-800 fs--1 me-2"><i class="fas fa-map-marker-alt"></i></span><span class="text-900 me-3">Maldives</span><span class="text-800 fs--1 me-2"><i class="fas fa-calendar"></i></span><span class="text-900">4 days</span></div>
                            <p class="text-decoration-line-through text-900 mt-3 mb-0">R$375</p>
                            <h1 class="mb-3 text-primary fw-bolder fs-4"><span>R$300</span><span class="text-900 fs--1 fw-normal">Por Pessoa</span></h1><span class="badge bg-soft-secondary p-2"><i class="fas fa-tag text-secondary fs--1 me-1"></i><span class="text-secondary fw-normal fs-1">-15%</span></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item" data-bs-interval="3000">
                    <div class="row h-100 align-items-center g-2">
                      <div class="col-md-4 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/maldives.png" alt="..." />
                          <div class="card-img-overlay ps-0"><span class="badge bg-primary ms-3 me-1 p-2"><i class="fas fa-clock me-1"></i><span>20:04:32:21</span></span><span class="badge bg-secondary p-2"><i class="fas fa-bolt me-1"></i><span>trending</span><i class="fas fa-bolt ms-1"> </i></span></div>
                          <div class="card-body ps-0">
                            <h5 class="fw-bold text-1000 mb-4 text-truncate">Mermaid Beach Resort: A maneira mais alegre de passar suas férias</h5>
                            <div class="d-flex align-items-center justify-content-start"><span class="text-800 fs--1 me-2"><i class="fas fa-map-marker-alt"></i></span><span class="text-900 me-3">Maldives</span><span class="text-800 fs--1 me-2"><i class="fas fa-calendar"></i></span><span class="text-900">4 days</span></div>
                            <p class="text-decoration-line-through text-900 mt-3 mb-0">R$200</p>
                            <h1 class="mb-3 text-primary fw-bolder fs-4"><span>R$175</span><span class="text-900 fs--1 fw-normal">Por Pessoa</span></h1><span class="badge bg-soft-secondary p-2"><i class="fas fa-tag text-secondary fs--1 me-1"></i><span class="text-secondary fw-normal fs-1">-15%</span></span>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/cinnamon.png" alt="..." />
                          <div class="card-img-overlay ps-0"><span class="badge bg-primary ms-3 me-1 p-2"><i class="fas fa-clock me-1"></i><span>20:04:32:21</span></span><span class="badge bg-secondary p-2"><i class="fas fa-bolt me-1"></i><span>trending</span><i class="fas fa-bolt ms-1"> </i></span></div>
                          <div class="card-body ps-0">
                            <h5 class="fw-bold text-1000 mb-4 text-truncate">Bora Bora: Desfrute de um passeio de cruzeiro romântico no lado ensolarado da vida</h5>
                            <div class="d-flex align-items-center justify-content-start"><span class="text-800 fs--1 me-2"><i class="fas fa-map-marker-alt"></i></span><span class="text-900 me-3">Maldives</span><span class="text-800 fs--1 me-2"><i class="fas fa-calendar"></i></span><span class="text-900">4 days</span></div>
                            <p class="text-decoration-line-through text-900 mt-3 mb-0">R$300</p>
                            <h1 class="mb-3 text-primary fw-bolder fs-4"><span>R$250</span><span class="text-900 fs--1 fw-normal">Por Pessoa</span></h1><span class="badge bg-soft-secondary p-2"><i class="fas fa-tag text-secondary fs--1 me-1"></i><span class="text-secondary fw-normal fs-1">-15%</span></span>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/dhigu.png" alt="..." />
                          <div class="card-img-overlay ps-0"><span class="badge bg-primary ms-3 me-1 p-2"><i class="fas fa-clock me-1"></i><span>20:04:32:21</span></span><span class="badge bg-secondary p-2"><i class="fas fa-bolt me-1"></i><span>trending</span><i class="fas fa-bolt ms-1"> </i></span></div>
                          <div class="card-body ps-0">
                            <h5 class="fw-bold text-1000 mb-4 text-truncate">Resort Ilha Fihalhohi: Destino de luxo sem compromissos</h5>
                            <div class="d-flex align-items-center justify-content-start"><span class="text-800 fs--1 me-2"><i class="fas fa-map-marker-alt"></i></span><span class="text-900 me-3">Maldives</span><span class="text-800 fs--1 me-2"><i class="fas fa-calendar"></i></span><span class="text-900">4 days</span></div>
                            <p class="text-decoration-line-through text-900 mt-3 mb-0">R$375</p>
                            <h1 class="mb-3 text-primary fw-bolder fs-4"><span>R$300</span><span class="text-900 fs--1 fw-normal">Por Pessoa</span></h1><span class="badge bg-soft-secondary p-2"><i class="fas fa-tag text-secondary fs--1 me-1"></i><span class="text-secondary fw-normal fs-1">-15%</span></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="row h-100 align-items-center g-2">
                      <div class="col-md-4 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/maldives.png" alt="..." />
                          <div class="card-img-overlay ps-0"><span class="badge bg-primary ms-3 me-1 p-2"><i class="fas fa-clock me-1"></i><span>20:04:32:21</span></span><span class="badge bg-secondary p-2"><i class="fas fa-bolt me-1"></i><span>trending</span><i class="fas fa-bolt ms-1"> </i></span></div>
                          <div class="card-body ps-0">
                            <h5 class="fw-bold text-1000 mb-4 text-truncate">Mermaid Beach Resort: A maneira mais alegre de passar suas férias</h5>
                            <div class="d-flex align-items-center justify-content-start"><span class="text-800 fs--1 me-2"><i class="fas fa-map-marker-alt"></i></span><span class="text-900 me-3">Maldives</span><span class="text-800 fs--1 me-2"><i class="fas fa-calendar"></i></span><span class="text-900">4 days</span></div>
                            <p class="text-decoration-line-through text-900 mt-3 mb-0">R$200</p>
                            <h1 class="mb-3 text-primary fw-bolder fs-4"><span>R$175</span><span class="text-900 fs--1 fw-normal">Por Pessoa</span></h1><span class="badge bg-soft-secondary p-2"><i class="fas fa-tag text-secondary fs--1 me-1"></i><span class="text-secondary fw-normal fs-1">-15%</span></span>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/cinnamon.png" alt="..." />
                          <div class="card-img-overlay ps-0"><span class="badge bg-primary ms-3 me-1 p-2"><i class="fas fa-clock me-1"></i><span>20:04:32:21</span></span><span class="badge bg-secondary p-2"><i class="fas fa-bolt me-1"></i><span>trending</span><i class="fas fa-bolt ms-1"> </i></span></div>
                          <div class="card-body ps-0">
                            <h5 class="fw-bold text-1000 mb-4 text-truncate">Bora Bora: Desfrute de um passeio de cruzeiro romântico no lado ensolarado da vida</h5>
                            <div class="d-flex align-items-center justify-content-start"><span class="text-800 fs--1 me-2"><i class="fas fa-map-marker-alt"></i></span><span class="text-900 me-3">Maldives</span><span class="text-800 fs--1 me-2"><i class="fas fa-calendar"></i></span><span class="text-900">4 days</span></div>
                            <p class="text-decoration-line-through text-900 mt-3 mb-0">R$300</p>
                            <h1 class="mb-3 text-primary fw-bolder fs-4"><span>R$250</span><span class="text-900 fs--1 fw-normal">Por Pessoa</span></h1><span class="badge bg-soft-secondary p-2"><i class="fas fa-tag text-secondary fs--1 me-1"></i><span class="text-secondary fw-normal fs-1">-15%</span></span>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/dhigu.png" alt="..." />
                          <div class="card-img-overlay ps-0"><span class="badge bg-primary ms-3 me-1 p-2"><i class="fas fa-clock me-1"></i><span>20:04:32:21</span></span><span class="badge bg-secondary p-2"><i class="fas fa-bolt me-1"></i><span>trending</span><i class="fas fa-bolt ms-1"> </i></span></div>
                          <div class="card-body ps-0">
                            <h5 class="fw-bold text-1000 mb-4 text-truncate">Resort Ilha Fihalhohi: Destino de luxo sem compromissos</h5>
                            <div class="d-flex align-items-center justify-content-start"><span class="text-800 fs--1 me-2"><i class="fas fa-map-marker-alt"></i></span><span class="text-900 me-3">Maldives</span><span class="text-800 fs--1 me-2"><i class="fas fa-calendar"></i></span><span class="text-900">4 days</span></div>
                            <p class="text-decoration-line-through text-900 mt-3 mb-0">R$375</p>
                            <h1 class="mb-3 text-primary fw-bolder fs-4"><span>R$300</span><span class="text-900 fs--1 fw-normal">Por Pessoa</span></h1><span class="badge bg-soft-secondary p-2"><i class="fas fa-tag text-secondary fs--1 me-1"></i><span class="text-secondary fw-normal fs-1">-15%</span></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselTestimonials" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselTestimonials" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next                                    </span></button>
                  </div>
                </div>
                <div class="row flex-center">
                  <div class="col-auto position-relative z-index-2">
                    <ol class="carousel-indicators me-xxl-7 me-xl-4 me-lg-7">
                      <li class="active" data-bs-target="#carouselTestimonials" data-bs-slide-to="0"></li>
                      <li data-bs-target="#carouselTestimonials" data-bs-slide-to="1"></li>
                      <li data-bs-target="#carouselTestimonials" data-bs-slide-to="2"></li>
                      <li data-bs-target="#carouselTestimonials" data-bs-slide-to="3"></li>
                    </ol>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="py-7 overflow-hidden" id="places">
        <div class="container bg-offcanvas-gray-right">
          <div class="row gx-2 mb-2">
            <div class="col-12 col-md-12 col-lg-4">
              <div class="bg-primary-gradient bg-offcanvas h-100">
                <div class="row g-0 justify-content-end">
                  <div class="col-12">
                    <div class="p-6 py-md-5 px-md-3 py-lg-8 text-light"><img class="mb-5" src="assets/img/icons/icon-location.svg" alt="..." />
                      <h2 class="mb-2 text-light">Lugares Populares</h2>
                      <p>Aproveite os benefícios dos nossos pacotes para o<br class="d-none d-lg-block" />locais onde nossos visitantes se divertem mais. <br class="d-none d-lg-block" />Organizados adequadamente com baixo custo.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4">
              <div class="card card-span h-100 text-white"><img class="img-fluid h-100 w-100" src="assets/img/gallery/agra.png" height="375" alt="..." />
                <div class="card-img-overlay ps-0 d-flex flex-column justify-content-between bg-voyage-gradient">
                  <div class="mt-auto px-4 mb-1">
                    <h3 class="fs-1 fs-md-2 text-white">Agra</h3><span class="text-light fs--1 me-1"><i class="fas fa-gift"></i></span><span class="text-light me-3">10 Packages</span>
                  </div>
                </div><a class="stretched-link" href="#!"></a>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4">
              <div class="card card-span h-100 text-white"><img class="img-fluid h-100 w-100" src="assets/img/gallery/kualalumpur.png" height="375" alt="..." />
                <div class="card-img-overlay ps-0 d-flex flex-column justify-content-between bg-voyage-gradient">
                  <div class="mt-auto px-4 mb-1">
                    <h3 class="fs-1 fs-md-2 text-white">Kuala Lumpur</h3><span class="text-light fs--1 me-1"><i class="fas fa-gift"></i></span><span class="text-light me-3">10 Packages</span>
                  </div>
                </div><a class="stretched-link" href="#!"></a>
              </div>
            </div>
          </div>
          <div class="row g-2">
            <div class="col-sm-6 col-lg-4">
              <div class="row g-2">
                <div class="col-12">
                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100 w-100" src="assets/img/gallery/munich.png" height="375" alt="..." />
                    <div class="card-img-overlay ps-0 d-flex flex-column justify-content-between bg-voyage-gradient">
                      <div class="mt-auto px-4 mb-1">
                        <h3 class="fs-1 fs-md-2 text-white">Munich</h3><span class="text-light fs--1 me-1"><i class="fas fa-gift"></i></span><span class="text-light me-3">10 Packages</span>
                      </div>
                    </div><a class="stretched-link" href="#!"></a>
                  </div>
                </div>
                <div class="col-12">
                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100 w-100" src="assets/img/gallery/munich.png" height="375" alt="..." />
                    <div class="card-img-overlay ps-0 d-flex flex-column justify-content-between bg-voyage-gradient">
                      <div class="mt-auto px-4 mb-1">
                        <h3 class="fs-1 fs-md-2 text-white">Munich</h3><span class="text-light fs--1 me-1"><i class="fas fa-gift"></i></span><span class="text-light me-3">10 Packages</span>
                      </div>
                    </div><a class="stretched-link" href="#!"></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4">
              <div class="row g-2">
                <div class="col-12">
                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100 w-100" src="assets/img/gallery/paris.png" height="375" alt="..." />
                    <div class="card-img-overlay ps-0 d-flex flex-column justify-content-between bg-voyage-gradient">
                      <div class="mt-auto px-4 mb-1">
                        <h3 class="fs-1 fs-md-2 text-white">Paris</h3><span class="text-light fs--1 me-1"><i class="fas fa-gift"></i></span><span class="text-light me-3">10 Packages</span>
                      </div>
                    </div><a class="stretched-link" href="#!"></a>
                  </div>
                </div>
                <div class="col-12">
                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100 w-100" src="assets/img/gallery/vienna.png" height="375" alt="..." />
                    <div class="card-img-overlay ps-0 d-flex flex-column justify-content-between bg-voyage-gradient">
                      <div class="mt-auto px-4 mb-1">
                        <h3 class="fs-1 fs-md-2 text-white">Vienna</h3><span class="text-light fs--1 me-1"><i class="fas fa-gift"></i></span><span class="text-light me-3">10 Packages</span>
                      </div>
                    </div><a class="stretched-link" href="#!"></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-lg-4">
              <div class="bg-secondary-gradient h-100 d-flex align-items-center">
                <div class="text-light p-4 p-sm-6 p-lg-0 px-xxl-6">
                  <p class="fs-1 px-4 mb-6">Quer viajar para o local mais emocionante do planeta? Preparamos uma série de surpresas para você.</p><a class="btn btn-lg text-light fs-2" href="#!" role="button">Clique para ver mais 
                    <svg class="bi bi-arrow-right-circle ms-5" xmlns="http://www.w3.org/2000/svg" width="55" height="55" fill="currentColor" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"></path>
                    </svg></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="py-0 my-7">
        <div class="bg-holder w-50 bg-left  d-none d-lg-block" style="background-image:url(assets/img/gallery/sharee.png);background-position:top;">
        </div>
        <!--/.bg-holder-->

        <div class="container">
          <div class="row g-0">
            <div class="col-lg-4 order-1 order-lg-0"> </div>
            <div class="col-lg-8 bg-white">
              <div class="carousel slide" id="carouselShare" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active" data-bs-interval="10000">
                    <div class="row h-100">
                      <div class="col-12"><img class="w-100" src="assets/img/gallery/dubai.png" height="600" alt="..." />
                        <div class="pt-5 ps-sm-7">
                          <h4 class="mb-2 text-1000">Compartilhe uma viagem</h4>
                          <h2 class="mb-3 text-primary fs-3 fs-md-6">Dubai</h2>
                          <p class="fw-normal mb-0">Dubai, uma cidade com muitas faces, é um dos destinos turísticos mais populares do mundo. O Burj Khalifa, a torre mais alta do mundo, está localizado aqui. A beleza futurística dos novos edifícios é o cerne do turismo em Dubai.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item" data-bs-interval="2000">
                    <div class="row h-100">
                      <div class="col-12"><img class="w-100" src="assets/img/gallery/cinnamon.png" height="600" alt="..." />
                        <div class="pt-5 ps-sm-7">
                          <h4 class="mb-2 text-1000">Compartilhe uma viagem</h4>
                          <h2 class="mb-3 text-primary fs-3 fs-md-6">Maldives</h2>
                          <p class="fw-normal mb-0">Dubai, uma cidade com muitas faces, é um dos destinos turísticos mais populares do mundo. O Burj Khalifa, a torre mais alta do mundo, está localizado aqui. A beleza futurística dos novos edifícios é o cerne do turismo em Dubai.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item" data-bs-interval="1000">
                    <div class="row h-100">
                      <div class="col-12"><img class="w-100" src="assets/img/gallery/dhigu.png" height="600" alt="..." />
                        <div class="pt-5 ps-sm-7">
                          <h4 class="mb-2 text-1000">Compartilhe uma viagem</h4>
                          <h2 class="mb-3 text-primary fs-3 fs-md-6">Maldives</h2>
                          <p class="fw-normal mb-0">Dubai, uma cidade com muitas faces, é um dos destinos turísticos mais populares do mundo. O Burj Khalifa, a torre mais alta do mundo, está localizado aqui. A beleza futurística dos novos edifícios é o cerne do turismo em Dubai.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="row h-100">
                      <div class="col-12"><img class="w-100" src="assets/img/gallery/dubai.png" height="600" alt="..." />
                        <div class="pt-5 ps-sm-7">
                          <h4 class="mb-2 text-1000">Compartilhe uma viagem</h4>
                          <h2 class="mb-3 text-primary fs-3 fs-md-6">Dubai</h2>
                          <p class="fw-normal mb-0">Dubai, uma cidade com muitas faces, é um dos destinos turísticos mais populares do mundo. O Burj Khalifa, a torre mais alta do mundo, está localizado aqui. A beleza futurística dos novos edifícios é o cerne do turismo em Dubai.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row ps-sm-7 align-items-end">
                  <div class="col-4 col-sm-6 position-relative z-index-2">
                    <ol class="carousel-indicators me-xxl-7 me-xl-4 me-lg-7">
                      <li class="active" data-bs-target="#carouselShare" data-bs-slide-to="0"></li>
                      <li data-bs-target="#carouselShare" data-bs-slide-to="1"></li>
                      <li data-bs-target="#carouselShare" data-bs-slide-to="2"></li>
                      <li data-bs-target="#carouselShare" data-bs-slide-to="3"></li>
                    </ol>
                  </div>
                  <div class="col-8 col-sm-6 position-relative z-index-2 text-end"><a class="btn btn-lg text-secondary" href="#" role="button">Leia mais
                      <svg class="bi bi-arrow-right ms-2" xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                      </svg></a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="py-7 overflow-hidden">
        <div class="container bg-offcanvas-gray">
          <div class="row gx-2">
            <div class="col-sm-6 col-lg-4 order-1 order-lg-0 gy-2 gy-lg-0">
              <div class="card card-span h-100 text-white"><img class="img-fluid h-100 w-100" src="assets/img/gallery/sky-the-limit.png" height="375" alt="..." />
                <div class="card-img-overlay ps-0 d-flex flex-column justify-content-between bg-voyage-gradient">
                  <div class="mt-auto px-4">
                    <h3 class="fs-1 fs-md-2 text-white">O céu é o limite</h3>
                    <div class="d-flex align-items-center justify-content-start"><span class="text-light fs--1 me-1"><i class="fas fa-map-marker-alt"></i></span><span class="text-light me-3">Manali</span><span class="text-light fs--1 me-1"><i class="fas fa-calendar"></i></span><span class="text-light">4 days</span></div>
                    <h1 class="my-2 text-light fw-bolder fs-4"><span>R$175</span><span class="text-light fs--1 fw-normal">Por Pessoa</span></h1>
                  </div>
                </div><a class="stretched-link" href="#!"></a>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4 order-2 order-lg-0 gy-2 gy-lg-0">
              <div class="card card-span h-100 text-white"><img class="img-fluid h-100 w-100" src="assets/img/gallery/beyond-the-blues.png" height="375" alt="..." />
                <div class="card-img-overlay ps-0 d-flex flex-column justify-content-between bg-voyage-gradient">
                  <div class="mt-auto px-4">
                    <h3 class="fs-1 fs-md-2 text-white">Além dos azuis</h3>
                    <div class="d-flex align-items-center justify-content-start"><span class="text-light fs--1 me-1"><i class="fas fa-map-marker-alt"></i></span><span class="text-light me-3">Maldives</span><span class="text-light fs--1 me-1"><i class="fas fa-calendar"></i></span><span class="text-light">4 days</span></div>
                    <h1 class="my-2 text-light fw-bolder fs-4"><span>R$175</span><span class="text-light fs--1 fw-normal">Por Pessoa</span></h1>
                  </div>
                </div><a class="stretched-link" href="#!"></a>
              </div>
            </div>
            <div class="col-12 col-lg-4">
              <div class="bg-primary-gradient h-100 bg-offcanvas-right">
                <div class="row g-0 h-100">
                  <div class="col-12 h-100">
                    <div class="d-flex flex-column justify-content-center h-100 text-light ps-4 ps-xl-5 py-5 py-lg-0"><img class="mb-5" src="assets/img/icons/icon-gift-box.svg" width="58" alt="..." />
                      <h2 class="mb-2 text-light">Pacotes Popular</h2>
                      <p>Escolha os pacotes mais populares entre <br class="d-none d-xl-block" />os nossos atuais.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4 gy-2">
              <div class="card card-span h-100 text-white"><img class="img-fluid h-100 w-100" src="assets/img/gallery/green.png" height="375" alt="..." />
                <div class="card-img-overlay ps-0 d-flex flex-column justify-content-between bg-voyage-gradient">
                  <div class="mt-auto px-4">
                    <h3 class="fs-1 fs-md-2 text-white">Dentro do limite</h3>
                    <div class="d-flex align-items-center justify-content-start"><span class="text-light fs--1 me-1"><i class="fas fa-map-marker-alt"></i></span><span class="text-light me-3">Phillipines</span><span class="text-light fs--1 me-1"><i class="fas fa-calendar"></i></span><span class="text-light">4 days</span></div>
                    <h1 class="my-2 text-light fw-bolder fs-4"><span>R$175</span><span class="text-light fs--1 fw-normal">Por Pessoa</span></h1>
                  </div>
                </div><a class="stretched-link" href="#!"></a>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4 gy-2">
              <div class="card card-span h-100 text-white"><img class="img-fluid h-100 w-100" src="assets/img/gallery/queens-gambit.png" height="375" alt="..." />
                <div class="card-img-overlay ps-0 d-flex flex-column justify-content-between bg-voyage-gradient">
                  <div class="mt-auto px-4">
                    <h3 class="fs-1 fs-md-2 text-white">O Gambito da Rainha</h3>
                    <div class="d-flex align-items-center justify-content-start"><span class="text-light fs--1 me-1"><i class="fas fa-map-marker-alt"></i></span><span class="text-light me-3">London</span><span class="text-light fs--1 me-1"><i class="fas fa-calendar"></i></span><span class="text-light">4 days</span></div>
                    <h1 class="my-2 text-light fw-bolder fs-4"><span>R$175</span><span class="text-light fs--1 fw-normal">Por Pessoa</span></h1>
                  </div>
                </div><a class="stretched-link" href="#!"></a>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4 gy-2">
              <div class="card card-span h-100 text-white"><img class="img-fluid h-100 w-100" src="assets/img/gallery/canals.png" height="375" alt="..." />
                <div class="card-img-overlay ps-0 d-flex flex-column justify-content-between bg-voyage-gradient">
                  <div class="mt-auto px-4">
                    <h3 class="fs-1 fs-md-2 text-white">Cidade dos Canais</h3>
                    <div class="d-flex align-items-center justify-content-start"><span class="text-light fs--1 me-1"><i class="fas fa-map-marker-alt"></i></span><span class="text-light me-3">Maldives</span><span class="text-light fs--1 me-1"><i class="fas fa-calendar"></i></span><span class="text-light">4 days</span></div>
                    <h1 class="my-2 text-light fw-bolder fs-4"><span>R$175</span><span class="text-light fs--1 fw-normal">Por Pessoa</span></h1>
                  </div>
                </div><a class="stretched-link" href="#!"></a>
              </div>
            </div>
            <div class="col-12 col-lg-8 gy-2 order-3 order-lg-0">
              <div class="bg-secondary-gradient h-100">
                <div class="row h-100">
                  <div class="col-12">
                    <div class="d-flex flex-column flex-center h-100 text-light p-4 p-sm-6 p-md-8 p-lg-0">
                      <p class="fs-1 px-3 mb-5">Os pacotes mais exclusivos estão prontos <br class="d-none d-xl-block" />Para você. Está a apenas um clique de distância!</p><a class="btn btn-lg text-light fs-1" href="#!" role="button">Clique para ver mais
                        <svg class="bi bi-arrow-right-circle ms-7" xmlns="http://www.w3.org/2000/svg" width="55" height="55" fill="currentColor" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"></path>
                        </svg></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4 gy-2">
              <div class="card card-span h-100 text-white"><img class="img-fluid h-100 w-100" src="assets/img/gallery/mountain-venture.png" height="375" alt="..." />
                <div class="card-img-overlay ps-0 d-flex flex-column justify-content-between bg-voyage-gradient">
                  <div class="mt-auto px-4">
                    <h3 class="fs-1 fs-md-2 text-white">Aventura na Montanha</h3>
                    <div class="d-flex align-items-center justify-content-start"><span class="text-light fs--1 me-1"><i class="fas fa-map-marker-alt"></i></span><span class="text-light me-3">Maldives</span><span class="text-light fs--1 me-1"><i class="fas fa-calendar"></i></span><span class="text-light">4 days</span></div>
                    <h1 class="my-2 text-light fw-bolder fs-4"><span>R$175</span><span class="text-light fs--1 fw-normal">Por Pessoa</span></h1>
                  </div>
                </div><a class="stretched-link" href="#!"></a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="py-0 pb-8">

        <div class="container-fluid container-lg">
          <div class="row h-100 g-2 justify-content-center">
            <div class="col-sm-9 col-md-4 mb-3 mb-md-0 h-100">
              <div class="card card-span text-white h-100"><img class="img-card h-100" src="assets/img/gallery/blog-1.png" alt="..." />
                <div class="card-body px-xl-5 px-md-3 pt-0 pb-7">
                  <div class="d-flex justify-content-between align-items-center bg-100 mt-n5 me-auto"><img src="assets/img/gallery/author-1.png" width="60" alt="..." />
                    <div class="d-flex flex-1 justify-content-around"> <span class="text-900 text-center"><i class="fas fa-heart text-primary"></i><span class="text-900 ms-2">355</span></span><span class="text-900 text-center"><i class="fas fa-eye text-primary"></i><span class="text-900 ms-2">234</span></span><span class="text-900 text-center"><i class="fas fa-share text-primary"></i><span class="text-900 ms-2">14</span></span></div>
                  </div>
                  <h5 class="text-900 mt-3">John Oliver. <span class="fw-normal">5 mins Read. </span></h5>
                  <h3 class="fw-bold text-1000 mt-5 text-truncate">15 Melhores Passeios de Um Dia a partir de Portland, Oregon</h3>
                  <p class="text-900 mt-3">A estrutura do blog de viagem é apenas uma tela em branco para realçar a atmosfera e a imersão.</p><a class="btn btn-lg text-900 fs-1 px-0 hvr-icon-forward" href="#!" role="button">Leia mais
                    <svg class="bi bi-arrow-right-short hover-icon" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"> </path>
                    </svg></a>
                </div>
              </div>
            </div>
            <div class="col-sm-9 col-md-4 mb-3 mb-md-0 h-100">
              <div class="card card-span text-white h-100"><img class="img-card h-100" src="assets/img/gallery/blog-2.png" alt="..." />
                <div class="card-body px-xl-5 px-md-3 pt-0 pb-7">
                  <div class="d-flex justify-content-between align-items-center bg-100 mt-n5 me-auto"><img src="assets/img/gallery/author-2.png" width="60" alt="..." />
                    <div class="d-flex flex-1 justify-content-around"> <span class="text-900 text-center"><i class="fas fa-heart text-primary"></i><span class="text-900 ms-2">35</span></span><span class="text-900 text-center"><i class="fas fa-eye text-primary"></i><span class="text-900 ms-2">23</span></span><span class="text-900 text-center"><i class="fas fa-share text-primary"></i><span class="text-900 ms-2">14</span></span></div>
                  </div>
                  <h5 class="text-900 mt-3">Haley Wilson . <span class="fw-normal">5 mins Read. </span></h5>
                  <h3 class="fw-bold text-1000 mt-5 text-truncate">Estradas Famosas para Ótimos Passeios de Carro na Califórnia</h3>
                  <p class="text-900 mt-3">Eu descobri pela primeira vez sobre as famosas estradas na Califórnia quando voei com a KLM para a Europa em 2018.</p><a class="btn btn-lg text-900 fs-1 px-0 hvr-icon-forward" href="#!" role="button">Leia mais
                    <svg class="bi bi-arrow-right-short hover-icon" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"> </path>
                    </svg></a>
                </div>
              </div>
            </div>
            <div class="col-sm-9 col-md-4 mb-3 mb-md-0 h-100">
              <div class="card card-span text-white h-100"><img class="img-card h-100" src="assets/img/gallery/blog-3.png" alt="..." />
                <div class="card-body px-xl-5 px-md-3 pt-0 pb-7">
                  <div class="d-flex justify-content-between align-items-center bg-100 mt-n5 me-auto"><img src="assets/img/gallery/author-3.png" width="60" alt="..." />
                    <div class="d-flex flex-1 justify-content-around"> <span class="text-900 text-center"><i class="fas fa-heart text-primary"></i><span class="text-900 ms-2">35</span></span><span class="text-900 text-center"><i class="fas fa-eye text-primary"></i><span class="text-900 ms-2">23</span></span><span class="text-900 text-center"><i class="fas fa-share text-primary"></i><span class="text-900 ms-2">14</span></span></div>
                  </div>
                  <h5 class="text-900 mt-3">Jeff Baley. <span class="fw-normal">5 mins Read. </span></h5>
                  <h3 class="fw-bold text-1000 mt-5 text-truncate">7 of the Best Train Trips in Canada</h3>
                  <p class="text-900 mt-3">On this very stunning rail ride from Vancouver to Calgary, take in the stunning vistas andspectacular.</p><a class="btn btn-lg text-900 fs-1 px-0 hvr-icon-forward" href="#!" role="button">Leia mais
                    <svg class="bi bi-arrow-right-short hover-icon" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"> </path>
                    </svg></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>

      <section>
        <div class="bg-holder" style="background-image:url(assets/img/gallery/cta-bg.png);background-position:center;background-size:cover;">
        </div>
        <!--/.bg-holder-->

        <div class="container">
          <div class="row flex-center">
            <div class="col-lg-6 text-center"><img class="mb-5 mb-lg-0" src="assets/img/gallery/cta-mobile.png" alt="..." /></div>
            <div class="col-lg-6 text-center">
              <h1 class="fs-6 pe-xxl-10">Get the app</h1>
              <div class="mt-4 pe-xxl-10"><a href="https://play.google.com/store/apps" target="_blank"><img class="me-3" src="assets/img/gallery/google-play.png" width="170" alt="..." /></a><a href="https://www.apple.com/app-store/" target="_blank"> <img src="assets/img/gallery/app-store.png" width="170" alt="..." /></a></div>
            </div>
          </div>
        </div>
      </section>

@endsection

