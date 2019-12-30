@extends('voyager::master')

@section('content')
<div class="page-content">
    @include('voyager::alerts')
    @include('voyager::dimmers')
    <div class="analytics-container">
        <div class="row">

            <!-- Icon Cards-->
            <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-2 mt-4">
                <div class="inforide">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-sm-4 col-4 rideone ride">
                            <span class="icon voyager-people"></span>
                        </div>
                        <div class="col-lg-9 col-md-8 col-sm-8 col-8 fontsty">
                            <h4>Student</h4>
                            <h2>{{\App\User::where('role_id', 2)->count()}}</h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-2 mt-4">
                <div class="inforide">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-sm-4 col-4 ridetwo ride">
                            <span class="icon voyager-study"></span>
                        </div>
                        <div class="col-lg-9 col-md-8 col-sm-8 col-8 fontsty">
                            <h4>Class</h4>
                            <h2>{{\App\ClassStudy::count()}}</h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-2 mt-4">
                <div class="inforide">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-sm-4 col-4 ridethree ride">
                            <span class="icon voyager-chat"></span>
                        </div>
                        <div class="col-lg-9 col-md-8 col-sm-8 col-8 fontsty">
                            <h4>Session</h4>
                            <h2>{{\App\ClassSession::count()}}</h2>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<style>
    .inforide {
        box-shadow: 1px 2px 8px 0px #f1f1f1;
        background-color: white;
        border-radius: 8px;
        height: 125px;
    }

    .ride span {
        color: white;
        font-size: 4em;
    }

    .rideone {
        background-color: #6CC785;
        padding-top: 25px;
        border-radius: 8px 0px 0px 8px;
        text-align: center;
        height: 125px;
        margin-left: 15px;
    }

    .ridetwo {
        background-color: #9A75FE;
        padding-top: 30px;
        border-radius: 8px 0px 0px 8px;
        text-align: center;
        height: 125px;
        margin-left: 15px;
    }

    .ridethree {
        background-color: #4EBCE5;
        padding-top: 35px;
        border-radius: 8px 0px 0px 8px;
        text-align: center;
        height: 125px;
        margin-left: 15px;
    }

    .fontsty {
        margin-right: -15px;
    }

    .fontsty h2 {
        color: #6E6E6E;
        font-size: 35px;
        margin-top: 15px;
        text-align: right;
        margin-right: 30px;
    }

    .fontsty h4 {
        color: #6E6E6E;
        font-size: 25px;
        margin-top: 20px;
        text-align: right;
        margin-right: 30px;
    }
</style>
@endsection