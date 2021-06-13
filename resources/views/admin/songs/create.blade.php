@extends('layouts.admin')

@section('content')

    <div>
        <div class="row">
            <div class="col-12">
                <h1 class="h3 mb-2 text-gray-800 float-left">Add New Song</h1>
            </div>
        </div>    
    </div>

    <form method="POST" action="/admin/songs" enctype="multipart/form-data">
        @csrf
        @method('POST')
        <div class="form-group col-md-6">
            <label for="name">Name</label>
            <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" id="name" name="name" 
                placeholder="Enter Song name" value="{{ old('name') ? old('name') : '' }}">
            @error('name')
                <div class="col-sm-6">
                    <small id="nameError" class="text-danger">
                        {{ $message }}
                    </small>      
                </div>
            @enderror
        </div>
        <div class="form-group col-md-6">
            <label for="recordId">Name</label>
            <input type="text" class="form-control {{ $errors->has('recordId') ? 'is-invalid' : '' }}" id="recordId" name="recordId" 
                placeholder="Enter Record Id" value="{{ old('recordId') ? old('recordId') : '' }}">
            @error('recordId')
                <div class="col-sm-6">
                    <small id="recordIdError" class="text-danger">
                        {{ $message }}
                    </small>      
                </div>
            @enderror
        </div>
        <div class="form-group col-md-6">
            <label for="file">File</label>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="file" name="file" accept=".wav,.aif,.mp3">
                <label class="custom-file-label" for="file">Choose file</label>
            </div>
        </div>

        <div class="form-group col-md-6">
            <label for="customFile">Genres</label>
            <div class="container">
            @foreach(array_chunk($genres->toArray(), 3) as $genresChunk)
                <div class="row">
                    @foreach($genresChunk as $genre)
                        <div class="col-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" 
                                    value="{{ $genre['id'] }}" name="genres[]" id="genre-{{ $genre['id'] }}">
                                <label class="form-check-label" for="genre-{{ $genre['id'] }}">
                                    {{ $genre['name'] }}
                                </label>
                            </div>
                            </div>
                    @endforeach
                </div>
            @endforeach
            </div>
            <!-- <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                <label class="form-check-label" for="flexCheckChecked">
                    Checked checkbox
                </label>
            </div> -->
        </div>

        <div class="form-group col-md-6">
            <label for="customFile">Instruments</label>
            <div class="container">
            @foreach(array_chunk($instruments->toArray(), 3) as $instrumentsChunk)
                <div class="row">
                    @foreach($instrumentsChunk as $instrument)
                        <div class="col-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" 
                                    value="{{ $instrument['id'] }}" name="instruments[]" id="instrument-{{ $instrument['id'] }}">
                                <label class="form-check-label" for="instrument-{{ $instrument['id'] }}">
                                    {{ $instrument['name'] }}
                                </label>
                            </div>
                            </div>
                    @endforeach
                </div>
            @endforeach
            </div>
        </div>

        <div class="form-group col-md-6">
            <label for="customFile">Energy Levels</label>
            <div class="container">
            @foreach(array_chunk($energyLevels->toArray(), 3) as $energyLevelsChunk)
                <div class="row">
                    @foreach($energyLevelsChunk as $energyLevel)
                        <div class="col-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" 
                                    value="{{ $energyLevel['id'] }}" name="energyLevels[]" id="energyLevel-{{ $energyLevel['id'] }}">
                                <label class="form-check-label" for="energyLevel-{{ $energyLevel['id'] }}">
                                    {{ $energyLevel['name'] }}
                                </label>
                            </div>
                            </div>
                    @endforeach
                </div>
            @endforeach
            </div>
        </div>

        <div class="form-group col-md-6">
            <label for="customFile">Moods</label>
            <div class="container">
            @foreach(array_chunk($moods->toArray(), 3) as $moodsChunk)
                <div class="row">
                    @foreach($moodsChunk as $mood)
                        <div class="col-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" 
                                    value="{{ $mood['id'] }}" name="moods[]" id="mood-{{ $mood['id'] }}">
                                <label class="form-check-label" for="mood-{{ $mood['id'] }}">
                                    {{ $mood['name'] }}
                                </label>
                            </div>
                            </div>
                    @endforeach
                </div>
            @endforeach
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Add Song</button>
    </form>  

    <script>
        $('#file').on('change',function(){
            //get the file name
            var fileName = $(this)[0].files[0].name;
            //replace the "Choose a file" label
            $(this).next('.custom-file-label').html(fileName);
        })
    </script>

@endsection