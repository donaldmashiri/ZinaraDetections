@extends('layouts.header')

@extends('layouts.topbar')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">


        <!-- Content Row -->

        <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-12 col-lg-12">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div
                        class="card-header bg-gradient-dark py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-white">Reports</h6>
                    </div>

                    <!-- Card Body -->
                    <div class="card-body">
                        <!-- Content Row -->
                        <div class="row">

                            <!-- Earnings (Monthly) Card Example -->
                            <div class="col-xl-2 col-md-3 mb-4">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Users</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $usersTotal }}</div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-users fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Earnings (Monthly) Card Example -->
                            <div class="col-xl-2 col-md-3 mb-4">
                                <div class="card border-left-success shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                    Vehicles</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $vehiclesTotal }}</div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-caravan fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Earnings (Monthly) Card Example -->
                            <div class="col-xl-2 col-md-3 mb-4">
                                <div class="card border-left-info shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Color Markings
                                                </div>
                                                <div class="row no-gutters align-items-center">
                                                    <div class="col-auto">
                                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ $markingsTotal }}</div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="progress progress-sm mr-2">
                                                            <div class="progress-bar bg-danger" role="progressbar"
                                                                 style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                                 aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Pending Requests Card Example -->
                            <div class="col-xl-2 col-md-3 mb-4">
                                <div class="card border-left-danger shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                                    Camera Detections</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-camera fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-2 col-md-3 mb-4">
                                <div class="card border-left-dark shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">
                                                    Video Detections</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-video fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- Camera Row -->
                        <div class="row">
                           <div class="col-md-12">
                               <div class="card">
                                   <div class="card-header bg-gradient-dark">Camera Detection Reports</div>
                                   <div class="card-body">
                                       <table class="table table-bordered table-sm">
                                           <thead class="bg-gradient-light">
                                           <tr>
                                               <th scope="col">User ID</th>
                                               <th scope="col">Plate #</th>
                                               <th scope="col">Detection Type</th>
                                               <th scope="col">Status</th>
                                               <th scope="col">Signals Type</th>
                                               <th scope="col">Lane</th>
                                               <th scope="col">Wheels Crossed</th>
                                               <th scope="col">Markings Color</th>
                                               <th scope="col">Cross Alert</th>
                                               <th scope="col">Driver tendencies</th>
                                           </tr>
                                           </thead>
                                           <tbody>
                                           @foreach($cameraDetections as $cameraDetection)
                                               <tr>
                                                   <th>00{{ $cameraDetection->user_id }}</th>
                                                   <th>{{ $cameraDetection->plate_number }}</th>
                                                   <th class="text-success">Camera Detection</th>
                                                   <th>{{ $cameraDetection->status }}</th>
                                                   <th>{{ $cameraDetection->signal_type }}</th>
                                                   <th>{{ $cameraDetection->lane_position }}</th>
                                                   <th>{{ $cameraDetection->wheel_crossed }}</th>
                                                   <th>{{ $cameraDetection->marking_color }}</th>
                                                   <th>{{ $cameraDetection->cross_alert }}</th>
                                                   <th>{{ $cameraDetection->driver_tendencies }}</th>
                                               </tr>
                                           @endforeach
                                           </tbody>
                                       </table>
                                   </div>
                               </div>
                           </div>
                        </div>

                        <!-- Video Row -->
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header bg-gradient-light">Video Detection Reports</div>
                                    <div class="card-body">
                                        <table class="table table-bordered table-sm">
                                            <thead class="bg-gradient-dark">
                                            <tr>
                                                <th scope="col">User ID</th>
                                                <th scope="col">Plate #</th>
                                                <th scope="col">Detection Type</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Signals Type</th>
                                                <th scope="col">Lane</th>
                                                <th scope="col">Wheels Crossed</th>
                                                <th scope="col">Markings Color</th>
                                                <th scope="col">Cross Alert</th>
                                                <th scope="col">Driver tendencies</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($videoDetections as $videoDetection)
                                                <tr>
                                                    <th>00{{ $videoDetection->user_id }}</th>
                                                    <th>{{ $videoDetection->plate_number }}</th>
                                                    <th class="text-danger">Video Detection</th>
                                                    <th>{{ $videoDetection->status }}</th>
                                                    <th>{{ $videoDetection->signal_type }}</th>
                                                    <th>{{ $videoDetection->lane_position }}</th>
                                                    <th>{{ $videoDetection->wheel_crossed }}</th>
                                                    <th>{{ $videoDetection->marking_color }}</th>
                                                    <th>{{ $videoDetection->cross_alert }}</th>
                                                    <th>{{ $videoDetection->driver_tendencies }}</th>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- /.container-fluid -->


@endsection
