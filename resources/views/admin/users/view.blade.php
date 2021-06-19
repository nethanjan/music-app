@extends('layouts.admin')

@section('content')

    <div>
        <div class="row">
            <div class="col-12">
                <h1 class="h3 mb-2 text-gray-800 float-left">View User</h1>
            </div>
        </div>    
    </div>

    <dl class="row mt-4">
        <dt class="col-sm-3 mb-3">First Name</dt>
        <dd class="col-sm-9">{{ $user->fname }}</dd>

        <dt class="col-sm-3 mb-3">Last Name</dt>
        <dd class="col-sm-9">{{ $user->lname }}</dd>

        <dt class="col-sm-3 mb-3">Email Address</dt>
        <dd class="col-sm-9">{{ $user->email }}</dd>
    </dl>

    

@endsection