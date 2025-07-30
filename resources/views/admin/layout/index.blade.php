@extends('admin.layout.main')
@section('content')
   <!-- Hero -->
   <div class="bg-image" style="background-image: url('assets/media/various/bg_dashboard.jpg');">
    <div class="bg-white-90">
        <div class="content content-full">
            <div class="row">
                <div class="col-md-6 d-md-flex align-items-md-center">
                    <div class="py-4 py-md-0 text-center text-md-left invisible" data-toggle="appear">
                        <h1 class="font-size-h2 mb-2">Dashboard</h1>
                        <h2 class="font-size-lg font-w400 text-muted mb-0">Today is a great one!</h2>
                    </div>
                </div>
                <div class="col-md-6 d-md-flex align-items-md-center">
                    <div class="row w-100 text-center">
                        <div class="col-6 col-xl-4 offset-xl-4 invisible" data-toggle="appear" data-timeout="300">
                            <p class="font-size-h3 font-w600 text-body-color-dark mb-0">
                                0
                            </p>
                            <p class="font-size-sm font-w700 text-uppercase mb-0">
                                <i class="far fa-chart-bar text-muted mr-1"></i> Sales
                            </p>
                        </div>
                        <div class="col-6 col-xl-4 invisible" data-toggle="appear" data-timeout="600">
                            <p class="font-size-h3 font-w600 text-body-color-dark mb-0">
                                $0
                            </p>
                            <p class="font-size-sm font-w700 text-uppercase mb-0">
                                <i class="far fa-chart-bar text-muted mr-1"></i> Earnings
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content">
    <!-- Quick Stats -->
    <!-- jQuery Sparkline (.js-sparkline class is initialized in Helpers.sparkline() -->
    <!-- For more info and examples you can check out http://omnipotent.net/jquery.sparkline/#s-about -->
    <div class="row">
        <div class="col-md-6 col-xl-3 invisible" data-toggle="appear">
            <a class="block block-rounded block-link-pop" href="javascript:void(0)">
                <div class="block-content block-content-full d-flex align-items-center justify-content-between">
                    <div>
                        <!-- Sparkline Dashboard Users Container -->
                        <span class="js-sparkline" data-type="line"
                              data-points="[340,330,360,340,360,350,370,360]"
                              data-width="90px"
                              data-height="40px"
                              data-line-color="#82b54b"
                              data-fill-color="transparent"
                              data-spot-color="transparent"
                              data-min-spot-color="transparent"
                              data-max-spot-color="transparent"
                              data-highlight-spot-color="#82b54b"
                              data-highlight-line-color="#82b54b"
                              data-tooltip-suffix="Users"></span>
                    </div>
                    <div class="ml-3 text-right">
                        <p class="text-muted mb-0">
                            Users
                        </p>
                        <p class="font-size-h3 font-w300 mb-0">
                            +0
                        </p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-3 invisible" data-toggle="appear" data-timeout="200">
            <a class="block block-rounded block-link-pop" href="javascript:void(0)">
                <div class="block-content block-content-full d-flex align-items-center justify-content-between">
                    <div>
                        <!-- Sparkline Dashboard Tickets Container -->
                        <span class="js-sparkline" data-type="line"
                              data-points="[21,17,19,25,24,25,18,27]"
                              data-width="90px"
                              data-height="40px"
                              data-line-color="#e04f1a"
                              data-fill-color="transparent"
                              data-spot-color="transparent"
                              data-min-spot-color="transparent"
                              data-max-spot-color="transparent"
                              data-highlight-spot-color="#e04f1a"
                              data-highlight-line-color="#e04f1a"
                              data-tooltip-suffix="Tickets"></span>
                    </div>
                    <div class="ml-3 text-right">
                        <p class="text-muted mb-0">
                            Tickets
                        </p>
                        <p class="font-size-h3 font-w300 mb-0">
                            0
                        </p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-3 invisible" data-toggle="appear" data-timeout="400">
            <a class="block block-rounded block-link-pop" href="javascript:void(0)">
                <div class="block-content block-content-full d-flex align-items-center justify-content-between">
                    <div>
                        <!-- Sparkline Dashboard Projects Container -->
                        <span class="js-sparkline" data-type="line"
                              data-points="[7,9,5,2,3,4,8,3]"
                              data-width="90px"
                              data-height="40px"
                              data-line-color="#3c90df"
                              data-fill-color="transparent"
                              data-spot-color="transparent"
                              data-min-spot-color="transparent"
                              data-max-spot-color="transparent"
                              data-highlight-spot-color="#3c90df"
                              data-highlight-line-color="#3c90df"
                              data-tooltip-suffix="Projects"></span>
                    </div>
                    <div class="ml-3 text-right">
                        <p class="text-muted mb-0">
                            Projects
                        </p>
                        <p class="font-size-h3 font-w300 mb-0">
                            0
                        </p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-3 invisible" data-toggle="appear" data-timeout="600">
            <a class="block block-rounded block-link-pop" href="javascript:void(0)">
                <div class="block-content block-content-full d-flex align-items-center justify-content-between">
                    <div>
                        <!-- Sparkline Dashboard Sales Container -->
                        <span class="js-sparkline" data-type="line"
                              data-points="[68,25,36,62,59,80,75,89]"
                              data-width="90px"
                              data-height="40px"
                              data-line-color="#343a40"
                              data-fill-color="transparent"
                              data-spot-color="transparent"
                              data-min-spot-color="transparent"
                              data-max-spot-color="transparent"
                              data-highlight-spot-color="#343a40"
                              data-highlight-line-color="#343a40"
                              data-tooltip-suffix="Sales"></span>
                    </div>
                    <div class="ml-3 text-right">
                        <p class="text-muted mb-0">
                            Sales
                        </p>
                        <p class="font-size-h3 font-w300 mb-0">
                            +0
                        </p>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <!-- END Quick Stats -->

    <!-- Main Chart -->
    <div class="block block-rounded block-mode-loading-refresh invisible" data-toggle="appear">
        <div class="block-header block-header-default">
            <h3 class="block-title">Earnings</h3>
            <div class="block-options">
                <div class="btn-group btn-group-sm btn-group-toggle mr-2" data-toggle="buttons" role="group" aria-label="Earnings Select Date Group">
                    <label class="btn btn-light" data-toggle="dashboard-chart-set-week">
                        <input type="radio" name="dashboard-chart-options" id="dashboard-chart-options-week"> Week
                    </label>
                    <label class="btn btn-light" data-toggle="dashboard-chart-set-month">
                        <input type="radio" name="dashboard-chart-options" id="dashboard-chart-options-month"> Month
                    </label>
                    <label class="btn btn-light active" data-toggle="dashboard-chart-set-year">
                        <input type="radio" name="dashboard-chart-options" id="dashboard-chart-options-year" checked> Year
                    </label>
                </div>
                <button type="button" class="btn-block-option align-middle" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                    <i class="si si-refresh"></i>
                </button>
            </div>
        </div>
        <div class="block-content block-content-full overflow-hidden">
            <div class="pull-x pull-b">
                <!-- Chart.js Dashboard Earnings Container -->
                <canvas class="js-chartjs-dashboard-earnings" style="height: 340px;"></canvas>
            </div>
        </div>
    </div>
    <!-- END Main Chart -->

 
</div>
<!-- END Page Content -->


@endsection
