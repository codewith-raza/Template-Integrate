@extends('layouts.admin')
@section('mainsection')
<!--main contents start-->
<main class="main-content">
        <!--page title start-->
    <div class="page-title">
        <div class="container-fluid p-0">
            <div class="row">
                    <div class="col-8">
                        <h4 class="mb-0"> Countries
                        </h4>
                        <ol class="breadcrumb mb-0 pl-0 pt-1 pb-0">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}" class="default-color">Home</a></li>
                            <li class="breadcrumb-item active">Country</li>
                        </ol>
                    </div>
                    <div class="col-4">
                        <div class="btn-group float-right ml-2">
                        <a class="btn btn-info" href="{{ url('countries') }}"> Back</a>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <!--page title end-->
@section('content')
<div class="card">
    <div class="card-body">
        <form method="POST" action="{{ route('countries.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="name">Name</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', '') }}" required>
                @if($errors->has(''))
                    <div class="invalid-feedback">
                        {{ $errors->first('') }}
                    </div>
                @endif 
            </div>
            <div class="form-group">
                <label class="required" for="short_code">Short Code</label>
                <input class="form-control {{ $errors->has('short_code') ? 'is-invalid' : '' }}" type="text" name="short_code" id="short_code" value="{{ old('short_code', '') }}" required>
                @if($errors->has(''))
                    <div class="invalid-feedback">
                        {{ $errors->first('') }}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    Save
                </button>
            </div>
        </form>
    </div>
</div>
</main>
<!--main contents end-->
@endsection
@endsection

@push('script')

<!-- Placed js at the end of the page so the pages load faster -->
    <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/vendor/jquery-ui-1.12.1/jquery-ui.min.js')}}"></script>
    <script src="{{asset('assets/vendor/popper.min.js')}}"></script>
    <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/vendor/jquery-ui-touch/jquery.ui.touch-punch-improved.js')}}"></script>
    <script class="include" type="text/javascript" src="{{asset('assets/vendor/jquery.dcjqaccordion.2.7.js')}}"></script>
    <script src="{{asset('assets/vendor/lobicard/js/lobicard.js')}}"></script>
    <script src="{{asset('assets/vendor/jquery.scrollTo.min.js')}}"></script>

    <!--chartjs-->
    <script src="{{asset('assets/vendor/chartjs/Chart.min.js')}}"></script>
    <!--chartjs initialization-->
    <script src="{{asset('assets/vendor/index-chartjs-init.js')}}"></script>


    <!--custom chart-->
    <script src="{{asset('assets/vendor/custom-chart/Chart.min.js')}}"></script>
    <script src="{{asset('assets/vendor/custom-chart/underscore-min.js')}}"></script>
    <script src="{{asset('assets/vendor/custom-chart/moment.min.js')}}"></script>
    <script src="{{asset('assets/vendor/custom-chart/accounting.min.js')}}"></script>
    <!--custom chart init-->
    <script src="{{asset('assets/vendor/custom-chart/custom-chart-init.js')}}"></script>


    <!--easy pie chart-->
    <script src="{{asset('assets/vendor/jquery-easy-pie-chart/jquery.easy-pie-chart.js')}}"></script>
    <script src="{{asset('assets/vendor/jquery-easy-pie-chart/easy-pie-chart-init.js')}}"></script>

    <!--vectormap-->
    <script src="{{asset('assets/vendor/vector-map/jquery-jvectormap-1.2.2.min.js')}}"></script>
    <script src="{{asset('assets/vendor/vector-map/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="{{asset('assets/vendor/vmap-init.js')}}"></script>


    <!--[if lt IE 9]>
    <script src="assets/vendor/modernizr.js"></script>
    <![endif]-->

    <!--init scripts-->
    <script src="{{asset('assets/js/scripts.js')}}"></script>

@endpush
