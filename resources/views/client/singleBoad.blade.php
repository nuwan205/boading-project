@extends('layouts.client')
@section('content')
  <main>
    <nav style="--bs-breadcrumb-divider: '>';" class="container fs-6 pt-5" aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item "><a href="#">Home</a></li>
        <li class="breadcrumb-item "><a href="#">Catalogue</a></li>
        <li class="breadcrumb-item active " aria-current="page"><span class="active-breadcrumb">Library</span> </li>
      </ol>
    </nav>
    <div class="about-us pb-5 pt-1">
      <div class="container">
        <div class="fs-2  fw-bolder pb-1 single-title text-black">
            Samadi's Anex
        </div>
        <div class="fs-5 home-address  pb-2">
            28 Pansala Para Suwapubudugama
        </div>
        <div class="icon-box d-flex gap-4 pb-3">
          <div class="user-ic d-flex align-items-center">
            <span class="fw-normal icon-padding fs-6 ">Female</span><i class="fa-solid fa-mars fs-5 text-secondary"></i>
          </div>
          <div class="user-ic d-flex align-items-center">
            <span class="fw-normal icon-padding fs-6 ">7</span><i class="fa-solid fa-users fs-6 text-secondary"></i>
          </div>
          <div class="user-ic">
            <span class="fw-normal icon-padding fs-6">2.4</span> <span class="fs-6 text-secondary fw-bold">KM</span>
          </div>
        </div>
      </div>
        <section class="overflow-auto mb-4 pb-3 container" data-simplebar>
            <div class="row g-2 g-md-3 gallery " data-thumbnails="true" style="min-width: 30rem;">
              <div class="col-8 ">
                <div class="owl-carousel ">
                    <div class="item"><a class="gallery-item " href="javascript:void(0);" >
                        <img src="{{ asset('assest/img/fot.jpg') }}" class="img-fluid " alt="Gallery thumbnail">
                      </a></div>
                    <div class="item"><a class="gallery-item rounded rounded-md-3" href="javascript:void(0);" >
                        <img src="{{ asset('assest/img/fot.jpg') }}" class="img-fluid " alt="Gallery thumbnail">
                      </a></div>
                    <!-- Add more items (slides) as needed -->
                </div>
                {{-- <a class="gallery-item rounded rounded-md-3" href="javascript:void(0);" >
                  <img src="{{ asset('assest/img/fot.jpg') }}" class="img-fluid " alt="Gallery thumbnail">
                </a> --}}
              </div>
              <div class="col-4">
                <a class="gallery-item rounded rounded-md-3 mb-2 mb-md-3" href="javascript:void(0);" >
                  <img src="{{ asset('assest/img/fot.jpg') }}" class="img-fluid" alt="Gallery thumbnail">
                </a>
                <a class="gallery-item rounded rounded-md-3" href="javascript:void(0);">
                  <img src="{{ asset('assest/img/fot.jpg') }}"  class="img-fluid" alt="Gallery thumbnail">
                </a>
              </div>
              {{-- <div class="col-12">
                <div class="row g-2 g-md-3">
                  <div class="col" *ngFor="let image of _album; let i=index">
                    <a class="gallery-item rounded-1 rounded-md-2" href="javascript:void(0);" >
                      <img src="{{ asset('assest/img/fot.jpg') }}" class="img-fluid" alt="Gallery thumbnail">
                    </a>
                  </div>
                </div>
              </div> --}}
            </div>
        </section>

        <section class="container mb-5 pb-1">
          <div class="row">
            <div class="col-md-7 mb-md-0 mb-4">
              <h2 class="h3 mb-4 pb-4 border-bottom fw-bold anex-price ">Rs. 6,000<span class="d-inline-block ms-1 fs-6 text-secondary fw-normal">/month</span></h2>
              <!-- Overview-->
              <div class="mb-4 pb-md-3">
                <h3 class="h4 head-title">Overview</h3>
                <p class="mb-1 overview-text">Lorem tincidunt lectus vitae id vulputate diam quam. Imperdiet non scelerisque turpis sed etiam ultrices. Blandit mollis dignissim egestas consectetur porttitor. Vulputate dolor pretium, dignissim eu augue sit ut convallis. Lectus est, magna urna feugiat sed ultricies sed in lacinia. Fusce potenti sit id pharetra vel ornare. Vestibulum sed tellus ullamcorper arcu.</p>
              </div>
              <!-- Property Details-->
              <div class="mb-4 pb-md-3">
                <h3 class="h4 head-title">Property Details</h3>
                <ul class="list-unstyled mb-0 text-secondary">
                  <li><b>Type: </b>apartment</li>
                  <li><b>Apartment area: </b>56 sq.m</li>
                  <li><b>Built: </b>2015</li>
                  <li><b>Bedrooms: </b>4</li>
                  <li><b>Bathrooms: </b>2</li>
                  <li><b>Parking places: </b>2</li>
                  <li><b>Pets allowed: </b>cats only</li>
                </ul>
              </div>
              <!-- Amenities-->
              <div class="mb-4 pb-md-3">
                <h3 class="h4 head-title">Amenities</h3>
                <ul class="list-unstyled row row-cols-lg-3 row-cols-md-2 row-cols-1 gy-1 mb-1 text-nowrap">
                  <li class="col"><i class="fa-solid fa-wifi mt-n1 me-2 fs-lg align-middle" style="padding-right: 4px"></i>WiFi</li>
                  <li class="col"><i class="fa-solid fa-temperature-three-quarters mt-n1 me-2 fs-lg align-middle"></i>Heating</li>
                </ul>
              </div>
            </div>
            <!-- Sidebar-->
            <aside class="col-lg-4 col-md-5 ms-lg-auto pb-1">
              <!-- Contact card-->
              <div class="card shadow-sm mb-4 d-none">
                <div class="card-body">
                  <div class="d-flex align-items-start justify-content-between"><a class="text-decoration-none" routerLink="/vendor/properties"><img class="rounded-circle mb-2" src="assets/img/avatars/22.jpg" width="60" alt="Avatar">
                      <h5 class="mb-1">Floyd Miles</h5>
                      <div class="mb-1"><span class="star-rating"><i class="star-rating-icon fi-star-filled active"></i><i class="star-rating-icon fi-star-filled active"></i><i class="star-rating-icon fi-star-filled active"></i><i class="star-rating-icon fi-star-filled active"></i><i class="star-rating-icon fi-star-filled active"></i></span><span class="ms-1 fs-sm text-muted">(45 reviews)</span>
                      </div>
                      <p class="text-body">Imperial Property Group Agent</p></a>
                    <div class="ms-4 flex-shrink-0"><a class="btn btn-icon btn-light-primary btn-xs shadow-sm rounded-circle ms-2 mb-2" href="javascript:void(0);"><i class="fi-facebook"></i></a><a class="btn btn-icon btn-light-primary btn-xs shadow-sm rounded-circle ms-2 mb-2" href="javascript:void(0);"><i class="fi-linkedin"></i></a></div>
                  </div>
                  <ul class="list-unstyled border-bottom mb-4 pb-4">
                    <li><a class="nav-link fw-normal p-0" href="tel:3025550107"><i class="fi-phone mt-n1 me-2 align-middle opacity-60"></i>(302) 555-0107</a></li>
                    <li><a class="nav-link fw-normal p-0" href="mailto:floyd_miles@email.com"><i class="fi-mail mt-n1 me-2 align-middle opacity-60"></i>floyd_miles@email.com</a></li>
                  </ul>
                  <!-- Contact form-->
                  <form class="needs-validation" novalidate (ngSubmit)="validSubmit()" [formGroup]="validationform">
                    <div class="mb-3">
                      <input class="form-control" type="text" placeholder="Your name*" required formControlName="name" [ngClass]="{'is-invalid': submit && form['name'].errors}">
                      <div class="invalid-feedback">Please enter your name!</div>
                    </div>
                    <div class="mb-3">
                      <input class="form-control" type="email" placeholder="Email*" required formControlName="email" [ngClass]="{'is-invalid': submit && form['email'].errors}">
                      <div class="invalid-feedback">Please provide valid email address!</div>
                    </div>
                    <input class="form-control mb-3" type="tel" placeholder="Phone">
                    <div class="input-group mb-3">
                      <input class="form-control date-picker rounded pe-5 flatpickr-input" type="text" mwlFlatpickr [altInput]="true" [convertModelValue]="true" placeholder="Choose date">
                      <i class="fi-calendar position-absolute top-50 end-0 translate-middle-y me-3"></i>
                    </div>
                    <textarea class="form-control mb-3" rows="3" placeholder="Message" style="resize: none;"></textarea>
                    <div class="form-check mb-4">
                      <input class="form-check-input" id="form-submit" type="checkbox" checked>
                      <label class="form-check-label fs-sm" for="form-submit">Send news, tips and promos from Finder to my email.</label>
                    </div>
                    <button class="btn btn-lg btn-primary d-block w-100" type="submit">Send request</button>
                  </form>
                </div>
              </div>
            </aside>
          </div>
        </section>
    </div>
   
  </main>
@endsection