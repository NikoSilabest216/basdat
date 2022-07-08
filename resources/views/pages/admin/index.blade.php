@extends('layouts.admin.master')
@section('content')
    <div class="main-panel">
        <div class="content">
            <div class="page-inner">
                <div class="page-header">
                    <h4 class="page-title">NikoPlay</h4>
                    <ul class="breadcrumbs">
                        <li class="nav-home">
                            <a href="#">
                                <i class="flaticon-home"></i>
                            </a>
                        </li>
                        {{-- <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li> --}}
                        {{-- <li class="nav-item">
                        <a href="#">Upload Review</a>
                    </li> --}}
                    </ul>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">Admin Page</div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 col-lg-4">

                                        {{-- <div class="form-group">
                                        <label for="pictureTitle">Picture Title</label>
                                        <input type="text" class="form-control form-control" id="titleInput" placeholder="Picture title..">
                                    </div>
                                    <div class="form-group">
                                        <label for="photographerName">Photographer Name</label>
                                        <input type="text" class="form-control form-control" id="photographerInput" placeholder="Photographer name..">
                                    </div>
                                    <div class="form-group">
                                        <label for="countryName">Photographer Country</label>
                                        <input type="text" class="form-control form-control" id="countryInput" placeholder="Country name..">
                                    </div> --}}
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div style="text-align: center;font-size: 40px"><h3>This is Tempat ngesad dan review game kesayangan anda<br></h3></div>
                                        <div><img src="{{asset('images/ak.png')}}" alt=""
                                                style="width: 500px; height: 500px;border-radius: 50px;"></div>
                                                <div style="text-align: center;"><label for="Description"><br>Contact Us : <br>
                                                    +6285158774527
                                                    <br>
                                                    niko_silabest
                                                    <br>
                                                    silabestniko@gmail.com
                                                </label></div>
                                        {{-- <div class="form-group">
                                        <label for="basic-url">Picture URL</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon3">URL</span>
                                            </div>
                                            <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                                        </div>
                                    </div> --}}
                                        <!-- <div class="form-group">
                                                <label for="exampleFormControlFile1">Example file input</label>
                                                <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                            </div> -->
                                        {{-- <div class="form-group">
                                        <label for="review">Review</label>
                                        <textarea class="form-control" id="review" rows="10">

												</textarea>
                                    </div> --}}
                                    </div>
                                    <div class="col-md-6 col-lg-4">

                                        {{-- <div class="form-group">
                                        <label class="form-label">Picture Tag</label>
                                        <div class="selectgroup selectgroup-pills">
                                            <label class="selectgroup-item">
                                                <input type="checkbox" name="value" value="Nature" class="selectgroup-input" checked="">
                                                <span class="selectgroup-button">Nature</span>
                                            </label>
                                            <label class="selectgroup-item">
                                                <input type="checkbox" name="value" value="Animal" class="selectgroup-input">
                                                <span class="selectgroup-button">Animal</span>
                                            </label>
                                            <label class="selectgroup-item">
                                                <input type="checkbox" name="value" value="Architecture" class="selectgroup-input">
                                                <span class="selectgroup-button">Architecture</span>
                                            </label>
                                            <label class="selectgroup-item">
                                                <input type="checkbox" name="value" value="Automotive" class="selectgroup-input">
                                                <span class="selectgroup-button">Automotive</span>
                                            </label>
                                            <label class="selectgroup-item">
                                                <input type="checkbox" name="value" value="Food" class="selectgroup-input">
                                                <span class="selectgroup-button">Food</span>
                                            </label>
                                            <label class="selectgroup-item">
                                                <input type="checkbox" name="value" value="Urban" class="selectgroup-input">
                                                <span class="selectgroup-button">Urban</span>
                                            </label>
                                            <label class="selectgroup-item">
                                                <input type="checkbox" name="value" value="People" class="selectgroup-input">
                                                <span class="selectgroup-button">People</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Picture Score</label>
                                        <div class="selectgroup w-100">
                                            <label class="selectgroup-item">
                                                <input type="radio" name="value" value="Very Bad" class="selectgroup-input" checked="">
                                                <span class="selectgroup-button">Very Bad</span>
                                            </label>
                                            <label class="selectgroup-item">
                                                <input type="radio" name="value" value="Bad" class="selectgroup-input">
                                                <span class="selectgroup-button">Bad</span>
                                            </label>
                                            <label class="selectgroup-item">
                                                <input type="radio" name="value" value="Good" class="selectgroup-input">
                                                <span class="selectgroup-button">Good</span>
                                            </label>
                                            <label class="selectgroup-item">
                                                <input type="radio" name="value" value="Very Good" class="selectgroup-input">
                                                <span class="selectgroup-button">Very Good</span>
                                            </label>
                                        </div>
                                    </div> --}}
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="card-action">
                            <button class="btn btn-success">Submit</button>
                            <button class="btn btn-danger">Cancel</button>
                        </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
