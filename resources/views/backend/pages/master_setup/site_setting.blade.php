@extends('backend.master')

@section('title','home page')

@section('content')
<div class="content-wrapper">

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    {{-- <h1 class="m-0">Dashboard Page</h1> --}}
                    <h4 class="mb-0 font-size-18"><small>Dashboard Page</small></h4>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>


    <div class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-body">
                            <div class="card card-color">
                                <div class="card-header">
                                    <h3 class="card-title">New Record</h3>
                                </div>

                                <div class="form-container table-container">
                                    <form>
                                        <div class="card-body">
                                            <div class="form-group row">
                                                <label for="exampleInputFile" class="col-sm-3">Site Logo</label>
                                                <div class="input-group col-sm-9">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">Upload</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="exampleInputFile" class="col-sm-3">Banner Img</label>
                                                <div class="input-group col-sm-9">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">Upload</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="sitename" class="col-sm-3">
                                                    Site Name
                                                    <span class="required">*</span>
                                                </label>
                                                <input type="text" class="form-control col-sm-9" id="sitename">
                                            </div>
                                            <div class="form-group row">
                                                <label for="exampleInputEmail1" class="col-sm-3">
                                                    Email
                                                    <span class="required">*</span>
                                                </label>
                                                <input type="email" class="form-control col-sm-9"
                                                    id="exampleInputEmail1">
                                            </div>
                                            <div class="form-group row">
                                                <label for="address" class="col-sm-3">
                                                    Address
                                                    <span class="required">*</span>
                                                </label>
                                                <input type="text" class="form-control col-sm-9" id="address">
                                            </div>
                                            <div class="form-group row">
                                                <label for="address" class="col-sm-3">
                                                    Opening details
                                                    <span class="required">*</span>
                                                </label>
                                                <input type="text" class="form-control col-sm-9" id="address">
                                            </div>
                                            <div class="form-group row">
                                                <label for="address" class="col-sm-3">
                                                    Mobile
                                                    <span class="required">*</span>
                                                </label>
                                                <input type="text" class="form-control col-sm-9" id="address">
                                            </div>



                                        </div>

                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-secondary btn-success">
                                                <i class="fa fa-check" aria-hidden="true"></i>
                                                Insert New Data
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>
</div>
@endsection
