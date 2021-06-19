@extends('layouts.admin')

@section('content')
    <div class="dashboardDiv">
        <div class="row col-md-7" style="margin:auto; padding: 20px 0px;">
            <div class="col-md-12">
                <h1 class="h1 mb-2 text-gray-800 float-left">Welcome back {{ $user->fname . ' ' . $user->lname }}</h1>
            </div>
        </div>  
        <div class="row col-md-7" style="margin:auto;padding: 20px 0px;">
            <div class="container">
            <div class="card-columns d-flex justify-content-center">
                <div class="col-md-3" style="padding: 0 20px;">
                    <div class="icon-card">
                        <a class="card-link" href="/admin/users">
                            <span class="icon-element" style="text-align: center;display: inline-block;width: 100%;padding-top: 5px;">
                            <i aria-hidden="true" class="fa fa-users fa-7x"><div></div></i>
                            <span class="link-name" style="text-align: center;display: inline-block;width: 100%; font-size: 18px;">Users</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-3" style="padding: 0 20px;">
                    <div class="icon-card">
                        <a class="card-link" href="/admin/songs">
                            <span class="icon-element" style="text-align: center;display: inline-block;width: 100%;padding-top: 5px;">
                            <i aria-hidden="true" class="fa fa-music fa-7x"><div></div></i>
                            <span class="link-name" style="text-align: center;display: inline-block;width: 100%;font-size: 18px;">Songs</span>
                        </a>
                    </div>
                </div>
            </div>
            </div>    
        </div>  
        <div class="row col-md-7" style="margin:auto;padding: 20px 0px;">            
            <div class="col-md-3" style="padding: 0 20px;">
                <div class="icon-card">
                    <a class="card-link" href="/admin/genres">
                        <span class="icon-element" style="text-align: center;display: inline-block;width: 100%;padding-top: 5px;">
                        <i aria-hidden="true" class="fa fa-compact-disc fa-7x"><div></div></i>
                        <span class="link-name" style="text-align: center;display: inline-block;width: 100%;font-size: 18px;">Genre</span>
                    </a>
                </div>
            </div>
            <div class="col-md-3" style="padding: 0 20px;">
                <div class="icon-card">
                    <a class="card-link" href="/admin/instruments">
                        <span class="icon-element" style="text-align: center;display: inline-block;width: 100%;padding-top: 5px;">
                        <i aria-hidden="true" class="fa fa-guitar fa-7x"><div></div></i>
                        <span class="link-name" style="text-align: center;display: inline-block;width: 100%;font-size: 18px;">Instruments</span>
                    </a>
                </div>
            </div>
            <div class="col-md-3" style="padding: 0 20px;">
                <div class="icon-card">
                    <a class="card-link" href="/admin/energy-levels">
                        <span class="icon-element" style="text-align: center;display: inline-block;width: 100%;padding-top: 5px;">
                        <i aria-hidden="true" class="fa fa-battery-half fa-7x"><div></div></i>
                        <span class="link-name" style="text-align: center;display: inline-block;width: 100%;font-size: 18px;">Enery Levels</span>
                    </a>
                </div>
            </div>
            <div class="col-md-3" style="padding: 0 20px;">
                <div class="icon-card">
                    <a class="card-link" href="/admin/moods">
                        <span class="icon-element" style="text-align: center;display: inline-block;width: 100%;padding-top: 5px;">
                        <i aria-hidden="true" class="fa fa-theater-masks fa-7x"><div></div></i>
                        <span class="link-name" style="text-align: center;display: inline-block;width: 100%;font-size: 18px;">Moods</span>
                    </a>
                </div>
            </div>
        </div>  
    </div>
        

@endsection