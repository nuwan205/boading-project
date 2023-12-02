@extends('layouts.client')
@section('content')
  <main>
    <div class="main-container pt-5">
        <div class="row g-0">
            <div class="slide-bar col-3 pb-4">
                <div class="card w-100 container custom-card pt-4">
                    <div class="card-body d-flex flex-column align-items-center justify-content-center">
                        <div class="button-group">
                            <input type="radio" class="btn-check" name="options" id="option1" autocomplete="off">
                            <label class="btn btn-secondary custom-button me-2 px-3 py-2 rounded-3" for="option1"><i class="fa-solid fa-venus me-2"></i>For Girls</label>
                            <input type="radio" class="btn-check" name="options" id="option2" autocomplete="off">
                            <label class="btn btn-secondary custom-button px-3 py-2 rounded-3" for="option2"><i class="fa-solid fa-mars me-2"></i>For Boys</label>
                        </div>
                        <div class="border-top border-3 mt-4 w-100">
                        </div>
                        <div class="distance align-self-start mt-4 d-flex flex-column w-100">
                            <h3 class="fs-6 fw-bold filter-text text-start">Distance From Faculty</h3>
                            <select class="js-example-basic-single select-2-selection w-100" name="state">
                                <option value="AL">under 1 Km</option>
                                <option value="WY">1Km - 2km</option>
                                <option value="WY">2Km - 3km</option>
                                <option value="WY">3Km - 4km</option>
                                <option value="WY">4Km - 5km</option>
                                <option value="WY">Above 5km</option>
                            </select>
                        </div>
                        <div class="border-top border-3 mt-4 w-100">
                        </div>
                        <div class="w-100 pb-3">
                            <div class="distance align-self-start mt-4 d-flex flex-column w-100">
                                <h3 class="fs-6 fw-bold filter-text text-start">Property Type</h3>
                            </div>
                            <div id="scrollable-content" style="min-height: 200px; overflow-y: auto;" class="d-flex flex-column w-100">
                                <div class="pretty p-default p-curve p-fill pt-3">
                                    <input type="checkbox" />
                                    <div class="state ps-3">
                                      <label>House</label>
                                    </div>
                                </div>
                                <div class="pretty p-default p-curve p-fill pt-3">
                                    <input type="checkbox" />
                                    <div class="state ps-3">
                                      <label>Apartment</label>
                                    </div>
                                </div>
                                <div class="pretty p-default p-curve p-fill pt-3">
                                    <input type="checkbox" />
                                    <div class="state ps-3">
                                      <label>Room</label>
                                    </div>
                                </div>
                                <div class="pretty p-default p-curve p-fill pt-3">
                                    <input type="checkbox" />
                                    <div class="state ps-3">
                                      <label>Daily rental</label>
                                    </div>
                                </div>
                                <div class="pretty p-default p-curve p-fill pt-3">
                                    <input type="checkbox" />
                                    <div class="state ps-3">
                                      <label>Anex</label>
                                    </div>
                                </div>
                                <div class="pretty p-default p-curve p-fill pt-3">
                                    <input type="checkbox" />
                                    <div class="state ps-3">
                                      <label>Fill</label>
                                    </div>
                                </div>
                                <div class="pretty p-default p-curve p-fill pt-3">
                                    <input type="checkbox" />
                                    <div class="state ps-3">
                                      <label>Fill</label>
                                    </div>
                                </div>
                                <div class="pretty p-default p-curve p-fill pt-3">
                                    <input type="checkbox" />
                                    <div class="state ps-3">
                                      <label>Fill</label>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="border-top border-3 mt-4 w-100">
                        </div>
                        <div class="w-100 pb-5">
                            <div class="distance align-self-start mt-4 d-flex flex-column w-100 pb-4">
                                <h3 class="fs-6 fw-bold filter-text text-start">Monthly Price</h3>
                            </div>
                            <input type="text" class="js-range-slider" name="my_range" value="" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="boading-container col-8 container">
                <div class="sort-by d-flex align-items-center pb-4">
                    <div class="border-top border-3 mt-4 w-100 pb-4 text-black">
                    </div>
                    <select name="" id="" class="form-select" style="width: 20%">
                        <option value="">Sort by</option>
                    </select>
                </div>
                <div class="row row-cols-1 row-cols-md-3 g-4 pb-5">
                    <div class="col">
                      <div class="card h-100 rounded-4 custom-card-2">
                        <img src="{{asset('assest/img/fot.jpg')}}" class="card-img-top img-fluid rounded-top-4" alt="...">
                        <div class="card-body">
                          <span class="card-info-text">For girls</span>
                          <p class="fs-6 card-title boading-title">Kasun's Apartment</p>
                          <p class="card-text boad-address">130/3, Kandy Rd, Temple Ny, 110</p>
                          <p class="card-text boad-address"><i class="fa-solid fa-money-bill me-2"></i> <span class="fw-bold">Rs.6000/monthly</span></p>
                        </div>
                        <div class="d-flex justify-content-center">
                            <div class="border-top border-3 w-100">
                            </div>
                        </div>
                        <div class="card-footer text-muted d-flex justify-content-center bg-light rounded-4">
                            <div class="bedroom me-2 fs-6 fw-bold">
                                4 <i class="fa-solid fa-bed"></i>
                            </div>
                            <div class="bathrooms ms-2 fs-6 fw-bold">
                                2 <i class="fa-solid fa-bath"></i>
                            </div>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 rounded-4 custom-card-2">
                            <img src="{{asset('assest/img/fot.jpg')}}" class="card-img-top img-fluid rounded-top-4" alt="...">
                            <div class="card-body">
                              <span class="card-info-text">For girls</span>
                              <p class="fs-6 card-title boading-title">Kasun's Apartment</p>
                              <p class="card-text boad-address">130/3, Kandy Rd, Temple Ny, 110</p>
                              <p class="card-text boad-address"><i class="fa-solid fa-money-bill me-2"></i> <span class="fw-bold">Rs.6000/monthly</span></p>
                            </div>
                            <div class="d-flex justify-content-center">
                                <div class="border-top border-3 w-100">
                                </div>
                            </div>
                            <div class="card-footer text-muted d-flex justify-content-center bg-light rounded-4">
                                <div class="bedroom me-2 fs-6 fw-bold">
                                    4 <i class="fa-solid fa-bed"></i>
                                </div>
                                <div class="bathrooms ms-2 fs-6 fw-bold">
                                    2 <i class="fa-solid fa-bath"></i>
                                </div>
                            </div>
                          </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 rounded-4 custom-card-2">
                            <img src="{{asset('assest/img/fot.jpg')}}" class="card-img-top img-fluid rounded-top-4" alt="...">
                            <div class="card-body">
                              <span class="card-info-text">For girls</span>
                              <p class="fs-6 card-title boading-title">Kasun's Apartment</p>
                              <p class="card-text boad-address">130/3, Kandy Rd, Temple Ny, 110</p>
                              <p class="card-text boad-address"><i class="fa-solid fa-money-bill me-2"></i> <span class="fw-bold">Rs.6000/monthly</span></p>
                            </div>
                            <div class="d-flex justify-content-center">
                                <div class="border-top border-3 w-100">
                                </div>
                            </div>
                            <div class="card-footer text-muted d-flex justify-content-center bg-light rounded-4">
                                <div class="bedroom me-2 fs-6 fw-bold">
                                    4 <i class="fa-solid fa-bed"></i>
                                </div>
                                <div class="bathrooms ms-2 fs-6 fw-bold">
                                    2 <i class="fa-solid fa-bath"></i>
                                </div>
                            </div>
                          </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 rounded-4 custom-card-2">
                            <img src="{{asset('assest/img/fot.jpg')}}" class="card-img-top img-fluid rounded-top-4" alt="...">
                            <div class="card-body">
                              <span class="card-info-text">For girls</span>
                              <p class="fs-6 card-title boading-title">Kasun's Apartment</p>
                              <p class="card-text boad-address">130/3, Kandy Rd, Temple Ny, 110</p>
                              <p class="card-text boad-address"><i class="fa-solid fa-money-bill me-2"></i> <span class="fw-bold">Rs.6000/monthly</span></p>
                            </div>
                            <div class="d-flex justify-content-center">
                                <div class="border-top border-3 w-100">
                                </div>
                            </div>
                            <div class="card-footer text-muted d-flex justify-content-center bg-light rounded-4">
                                <div class="bedroom me-2 fs-6 fw-bold">
                                    4 <i class="fa-solid fa-bed"></i>
                                </div>
                                <div class="bathrooms ms-2 fs-6 fw-bold">
                                    2 <i class="fa-solid fa-bath"></i>
                                </div>
                            </div>
                          </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
  </main>
@endsection