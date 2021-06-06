@extends('layouts.admin')

@section('content')

    <div>
        <div class="row">
            <div class="col-12">
                <h1 class="h3 mb-2 text-gray-800 float-left">Edit Genre</h1>
            </div>
        </div>    
    </div>

    <form method="POST" action="/admin/genres/{{ $genre->id }}">
        @csrf
        @method('PUT')
        <div class="form-group col-md-6">
            <label for="name">Name</label>
            <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" id="name" name="name" 
                placeholder="Enter genre name" value="{{ old('name') ? old('name') : $genre->name }}">
            @error('name')
                <div class="col-sm-3">
                    <small id="nameError" class="text-danger">
                        {{ $message }}
                    </small>      
                </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>

@endsection