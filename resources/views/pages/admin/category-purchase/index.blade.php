@extends('layouts.admin')


@section('title', 'Category Purchase')
    

@section('content')


<div class="container-fluid">
<div class="row">

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Yogyakarta</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">Membatik Yogyakarta</div>
                </div>
                <a href={{route('categoryPurchase-detail')}} class="btn btn-primary btn-icon-split">
                    {{-- <span class="icon text-white-50">
                      <i class="fas fa-flag"></i> --}}
                    </span>
                    <span class="text">Detail</span>
                  </a>
            </div>
        </div>
    </div>
    </div>
<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Jakarta</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">Keliling Jakarta</div>
                </div>
                <a href={{route('categoryPurchase-detail')}} class="btn btn-primary btn-icon-split">
                    {{-- <span class="icon text-white-50">
                      <i class="fas fa-flag"></i> --}}
                    </span>
                    <span class="text">Detail</span>
                  </a>
            </div>
        </div>
    </div>
    </div>
<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Surabaya</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">Buat Olahan Sate</div>
                </div>
                <a href={{route('categoryPurchase-detail')}} class="btn btn-primary btn-icon-split">
                    {{-- <span class="icon text-white-50">
                      <i class="fas fa-flag"></i> --}}
                    </span>
                    <span class="text">Detail</span>
                  </a>
            </div>
        </div>
    </div>
    </div>
<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Nusa Penida</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">Telusuri Pantai Indah</div>
                </div>
                <a href={{route('categoryPurchase-detail')}} class="btn btn-primary btn-icon-split">
                    {{-- <span class="icon text-white-50">
                      <i class="fas fa-flag"></i> --}}
                    </span>
                    <span class="text">Detail</span>
                  </a>
            </div>
        </div>
    </div>
    </div>
    




    </div>
    </div>
    </div>

@endsection