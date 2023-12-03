@extends('layouts.app')
@section('content')

    <div class="px-3">
        <div class="">
            <h2 class="fw-bold">
                Add Property
            </h2>
            <div class="card property-add-card mb-5">
                <div class="card-body">
                    <h3 class="card-title mb-3">
                        <i class="fa-solid fa-circle-info text-info"></i>
                        Basic Info
                    </h3>
                    <form>
                        <div class="form-group mb-3">
                          <label for="exampleInputEmail1">Title</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Title">
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group mb-3">
                                    <label for="exampleFormControlSelect1">Select Category</label>
                                    <select class="form-control js-example-basic-single select-2-selection" id="exampleFormControlSelect">
                                      <option>For Boys</option>
                                      <option>For Girls</option>
                                      <option>Both</option>
                                    </select>
                                  </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group mb-3">
                                    <label for="exampleFormControlSelect1">Example select</label>
                                    <select class="form-control js-example-basic-single select-2-selection" id="exampleFormControlSelect1">
                                      <option>Apartment</option>
                                      <option>House</option>
                                      <option>Hostel</option>
                                      <option>New Building</option>
                                      <option>Other</option>
                                    </select>
                                  </div>
                            </div>
                        </div>

                      </form>
                </div>
            </div>

            <div class="card property-add-card mb-5">
                <div class="card-body">
                    <h3 class="card-title mb-3">
                        <i class="fa-solid fa-location-dot text-info"></i>
                        Location
                    </h3>
                    <form>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group mb-3">
                                    <label for="exampleFormControlSelect1">Distance From Faculty</label>
                                    <select class="form-control js-example-basic-single select-2-selection" id="">
                                      <option>Under 1 Km</option>
                                      <option>1Km - 2Km</option>
                                      <option>2Km - 3Km</option>
                                      <option>3Km - 4Km</option>
                                      <option>4Km - 5Km</option>
                                      <option>Above 5Km</option>
                                    </select>
                                  </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group mb-3">
                                    <label for="exampleFormControlSelect1">Enter City</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Title">
                                  </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group mb-3">
                                    <label for="exampleFormControlSelect1">Enter Address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Title">
                                  </div>
                            </div>
                        </div>
                        <div class="container">

                            <div class="form-group row">
                                <div class="col-sm-6" hidden>
                                    <label class="control-label">Lat.:</label>
                                    <input type="text" class="form-control" id="us3-lat" />
                                </div>
                                <div class="col-sm-6 o-hidden" hidden>
                                    <label>Long.:</label>
                                    <input type="text" class="form-control" id="us3-lon" />
                                </div>
                            </div>
                            <!-- map -->
                            <label for="us3" class="control-label">Display on the map</label>
                            <div id="us3" style="height: 400px;"></div>
                        </div>
                    </div>
                      </form>
                </div>
            </div>

            <div class="card property-add-card mb-5">
                <div class="card-body">
                    <h3 class="card-title mb-3">
                        <i class="fa-solid fa-circle-info text-info"></i>
                        Property Information
                    </h3>
                    <form>
                        <div class="form-group mb-3 col-sm-6">
                          <label for="exampleInputEmail1">Total area, sq.m</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Title">
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group mb-4">
                                    <label for="exampleFormControlSelect1">Rooms</label>
                                    <br>
                                    <div class="form-check form-check-inline mt-3">
                                        <input class="form-check-input " type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                        <label class="form-check-label fs-4" for="inlineRadio1">1</label>
                                      </div>
                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                        <label class="form-check-label fs-4" for="inlineRadio2">2</label>
                                      </div>
                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" >
                                        <label class="form-check-label fs-4" for="inlineRadio3">3</label>
                                      </div>
                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" >
                                        <label class="form-check-label fs-4" for="inlineRadio3">4</label>
                                      </div>
                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" >
                                        <label class="form-check-label fs-4" for="inlineRadio3">5+</label>
                                      </div>
                                  </div>
                            </div>
                        </div>

                      </form>
                </div>
            </div>
        </div>
    </div>

@endsection
