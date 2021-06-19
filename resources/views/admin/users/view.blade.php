@extends('layouts.admin')

@section('content')

    <div>
        <div class="row">
            <div class="col-12">
                <h1 class="h3 mb-2 text-gray-800 float-left">Edit User</h1>
            </div>
        </div>    
    </div>

    <form method="POST" action="/admin/users/{{ $user->id }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="fname">First Name</label>
            <input type="text" class="form-control {{ $errors->has('fname') ? 'is-invalid' : '' }}" id="fname" name="fname" 
                placeholder="Enter first name" value="{{ old('fname') ? old('fname') : $user->fname }}">
            @error('fname')
                <div class="col-sm-3">
                    <small id="passwordHelp" class="text-danger">
                        {{ $message }}
                    </small>      
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="lname">Last Name</label>
            <input type="text" class="form-control {{ $errors->has('lname') ? 'is-invalid' : '' }}" id="lname" name="lname" 
                placeholder="Enter lat name" value="{{ old('lname') ? old('lname') : $user->lname }}">
            @error('lname')
                <div class="col-sm-3">
                    <small id="passwordHelp" class="text-danger">
                        {{ $message }}
                    </small>      
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="email">Email Address</label>
            <input type="text" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" id="email" name="email" 
                placeholder="Enter email address" value="{{ old('email') ? old('email') : $user->email }}">
            @error('email')
                <div class="col-sm-3">
                    <small id="passwordHelp" class="text-danger">
                        {{ $message }}
                    </small>      
                </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>

@endsection