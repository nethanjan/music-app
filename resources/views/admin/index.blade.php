@extends('layouts.admin')

@section('content')
    <div class="dashboardDiv">
        <div class="row col-md-7" style="margin:auto; padding: 20px 0px;">
            <div class="col-md-12">
                <h1 class="h1 mb-2 text-gray-800 float-left">Welcome back Neth</h1>
            </div>
        </div>  
        <div class="row col-md-7" style="margin:auto;padding: 20px 0px;">
            <div class="col-md-3" style="padding: 0 20px;">
                <div class="icon-card" style="border: 1px solid;border-radius: 5px;height: 150px;width: 200px;">
                    <a class="card-link" href="/product-information-management/categories">
                        <span class="icon-element" style="text-align: center;display: inline-block;width: 100%;padding-top: 5px;">
                        <i aria-hidden="true" class="fa fa-users fa-7x"><div></div></i>
                        <span class="link-name" style="text-align: center;display: inline-block;width: 100%; font-size: 18px;">Users</span>
                    </a>
                </div>
            </div>
            <div class="col-md-3" style="padding: 0 20px;">
                <div class="icon-card" style="border: 1px solid;border-radius: 5px;height: 150px;width: 200px;">
                    <a class="card-link" href="/product-information-management/categories">
                        <span class="icon-element" style="text-align: center;display: inline-block;width: 100%;padding-top: 5px;">
                        <i aria-hidden="true" class="fa fa-music fa-7x"><div></div></i>
                        <span class="link-name" style="text-align: center;display: inline-block;width: 100%;font-size: 18px;">Songs</span>
                    </a>
                </div>
            </div>           
        </div>  
        <div class="row col-md-7" style="margin:auto;padding: 20px 0px;">            
            <div class="col-md-3" style="padding: 0 20px;">
                <div class="icon-card" style="border: 1px solid;border-radius: 5px;height: 150px;width: 200px;">
                    <a class="card-link" href="/product-information-management/categories">
                        <span class="icon-element" style="text-align: center;display: inline-block;width: 100%;padding-top: 5px;">
                        <i aria-hidden="true" class="fa fa-compact-disc fa-7x"><div></div></i>
                        <span class="link-name" style="text-align: center;display: inline-block;width: 100%;font-size: 18px;">Genre</span>
                    </a>
                </div>
            </div>
            <div class="col-md-3" style="padding: 0 20px;">
                <div class="icon-card" style="border: 1px solid;border-radius: 5px;height: 150px;width: 200px;">
                    <a class="card-link" href="/product-information-management/categories">
                        <span class="icon-element" style="text-align: center;display: inline-block;width: 100%;padding-top: 5px;">
                        <i aria-hidden="true" class="fa fa-guitar fa-7x"><div></div></i>
                        <span class="link-name" style="text-align: center;display: inline-block;width: 100%;font-size: 18px;">Instruments</span>
                    </a>
                </div>
            </div>
            <div class="col-md-3" style="padding: 0 20px;">
                <div class="icon-card" style="border: 1px solid;border-radius: 5px;height: 150px;width: 200px;">
                    <a class="card-link" href="/product-information-management/categories">
                        <span class="icon-element" style="text-align: center;display: inline-block;width: 100%;padding-top: 5px;">
                        <i aria-hidden="true" class="fa fa-battery-half fa-7x"><div></div></i>
                        <span class="link-name" style="text-align: center;display: inline-block;width: 100%;font-size: 18px;">Enery Levels</span>
                    </a>
                </div>
            </div>
            <div class="col-md-3" style="padding: 0 20px;">
                <div class="icon-card" style="border: 1px solid;border-radius: 5px;height: 150px;width: 200px;">
                    <a class="card-link" href="/product-information-management/categories">
                        <span class="icon-element" style="text-align: center;display: inline-block;width: 100%;padding-top: 5px;">
                        <i aria-hidden="true" class="fa fa-theater-masks fa-7x"><div></div></i>
                        <span class="link-name" style="text-align: center;display: inline-block;width: 100%;font-size: 18px;">Moods</span>
                    </a>
                </div>
            </div>
        </div>  
    </div>
        

@endsection