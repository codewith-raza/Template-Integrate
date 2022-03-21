@extends('layouts.app')

@section('mainsection')
<!--main contents start-->
<main class="main-content">
        <!--page title start-->
        <div class="page-title">
            <div class="container-fluid p-0">
                <div class="row">
                    <div class="col-8">
                        <h4 class="mb-0"> User Crud
                        </h4>
                        <ol class="breadcrumb mb-0 pl-0 pt-1 pb-0">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}" class="default-color">Home</a></li>
                            <li class="breadcrumb-item active">User</li>
                        </ol>
                    </div>
                    <div class="col-4">
                        <div class="btn-group float-right ml-2">
                        <a class="btn btn-info" href="{{ route('user.create') }}">Add</a> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--page title end-->
    @section('content')
    <div class="container-fluid">
        <div class="row">
            <div class=" col-sm-12">
                <div class="card card-shadow mb-4">
                    <div class="card-header">
                            @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                            @endif
                            <table class="table table-bordered">
                                        <tr>
                                            <th>No</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <!-- <th>Password</th> -->
                                            <th width="280px">Action</th>
                                        </tr>
                                        @php
                                            $i = 0;
                                        @endphp
                                        @foreach ($users as $user)
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <!-- <td>{{ $user->password }}</td> -->
                                                <td>
                                                    <form action="{{ route('user.destroy',$user->id) }}" method="POST">
                                                        <a class="btn btn-info" href="{{ route('user.show',$user->id) }}">Show</a>
                                                        <a class="btn btn-primary" href="{{ route('user.edit',$user->id) }}">Edit</a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button onclick="return confirm('Are you sure to delete this?')" type="submit" class="btn btn-danger">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                            </table>
                    </div>
                </div>
            </div>
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

