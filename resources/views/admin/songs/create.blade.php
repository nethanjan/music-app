@extends('layouts.admin')

@section('content')

    <div>
        <div class="row">
            <div class="col-12">
                <h1 class="h3 mb-2 text-gray-800 float-left">Add New Song</h1>
                <a class="btn btn-sm btn-primary float-right" href="/admin/songs/multiple/upload" role="button">
                    Upload Multiple Songs
                </a>
            </div>
        </div>    
    </div>

    <form method="POST" action="/admin/songs" enctype="multipart/form-data" class="mb-3">
        @csrf
        @method('POST')
        <div class="form-group col-md-6">
            <label for="recordId">Record Id</label>
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
            <label for="file">Song File *</label>
            <div class="custom-file">
                <input type="file" class="custom-file-input {{ $errors->has('file') ? 'is-invalid' : '' }}" id="file" name="file" accept=".wav,.aif,.mp3">
                <label class="custom-file-label" for="file">Choose file</label>
                @error('file')
                    <div class="col-sm-6">
                        <small id="fileError" class="text-danger">
                            {{ $message }}
                        </small>      
                    </div>
                @enderror
            </div>
        </div>

        <div class="form-group col-md-8 border">
            <label for="customFile">Genres</label>
            <div class="container p-3 my-3 border">
            @foreach(array_chunk($genres->toArray(), 4) as $genresChunk)
                <div class="row">
                    @foreach($genresChunk as $genre)
                        <div class="col-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" 
                                    value="{{ $genre['id'] }}" name="genres[]" id="genre-{{ $genre['id'] }}" 
                                    {{ (is_array(old('genres')) && in_array($genre['id'], old('genres'))) ? ' checked' : '' }}
                                >
                                <label class="form-check-label" for="genre-{{ $genre['id'] }}">
                                    {{ $genre['name'] }}
                                </label>
                            </div>
                            </div>
                    @endforeach
                </div>
            @endforeach
            </div>
        </div>

        <div class="form-group col-md-8 border">
            <label for="customFile">Instruments</label>
            <div class="container p-3 my-3 border">
            @foreach(array_chunk($instruments->toArray(), 4) as $instrumentsChunk)
                <div class="row">
                    @foreach($instrumentsChunk as $instrument)
                        <div class="col-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" 
                                    value="{{ $instrument['id'] }}" name="instruments[]" id="instrument-{{ $instrument['id'] }}"
                                    {{ (is_array(old('instruments')) && in_array($instrument['id'], old('instruments'))) ? ' checked' : '' }}    
                                >
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

        <div class="form-group col-md-8 border">
            <label for="customFile">Energy Levels</label>
            <div class="container p-3 my-3 border">
            @foreach(array_chunk($energyLevels->toArray(), 4) as $energyLevelsChunk)
                <div class="row">
                    @foreach($energyLevelsChunk as $energyLevel)
                        <div class="col-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" 
                                    value="{{ $energyLevel['id'] }}" name="energyLevels[]" id="energyLevel-{{ $energyLevel['id'] }}"
                                    {{ (is_array(old('energyLevels')) && in_array($energyLevel['id'], old('energyLevels'))) ? ' checked' : '' }}    
                                >
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

        <div class="form-group col-md-8 border">
            <label for="customFile">Moods</label>
            <div class="container p-3 my-3 border">
            @foreach(array_chunk($moods->toArray(), 4) as $moodsChunk)
                <div class="row">
                    @foreach($moodsChunk as $mood)
                        <div class="col-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" 
                                    value="{{ $mood['id'] }}" name="moods[]" id="mood-{{ $mood['id'] }}"
                                    {{ (is_array(old('moods')) && in_array($mood['id'], old('moods'))) ? ' checked' : '' }}    
                                >
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