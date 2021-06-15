@extends('layouts.admin')

@section('content')

    <div>
        <div class="row">
            <div class="col-12">
                <h1 class="h3 mb-2 text-gray-800 float-left">Add New Songs</h1>
                <a class="btn btn-sm btn-primary float-right" href="/admin/songs/create" role="button">
                    Upload A Song
                </a>
            </div>
        </div>    
    </div>

    <form method="POST" action="/admin/songs/multiple/upload" enctype="multipart/form-data" class="mb-3">
        @csrf
        @method('POST')
        
        <div class="form-group col-md-8">
            <label for="file">Files</label>
            <div class="custom-file">
                <input type="file" class="custom-file-input {{ $errors->has('file') ? 'is-invalid' : '' }}" id="file" name="file[]" accept=".wav,.aif,.mp3" multiple>
                <label class="custom-file-label" for="file">Choose files</label>
                @error('file')
                    <div class="col-sm-6">
                        <small id="fileError" class="text-danger">
                            {{ $message }}
                        </small>      
                    </div>
                @enderror
                @if (count($errors) > 0)
                    @php
                        $errorArray = $errors->default->toArray();
                    @endphp
                        @foreach ($errorArray as $key => $value)
                            @if ($key != 'file')
                                <div class="col-sm-6">
                                    <small id="fileError" class="text-danger">
                                        {{ $value[0] }}
                                    </small>      
                                </div>
                                @break
                            @endif
                        @endforeach
                @endif 
            </div>
            <div class="row">
            <div class="col-sm-6 mb-3 mt-3">
                <ul class="list-group" id="song-list">
                </ul>
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

        <div class="form-group col-md-8 border">
            <label for="customFile">Instruments</label>
            <div class="container p-3 my-3 border">
            @foreach(array_chunk($instruments->toArray(), 4) as $instrumentsChunk)
                <div class="row">
                    @foreach($instrumentsChunk as $instrument)
                        <div class="col-3">
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

        <div class="form-group col-md-8 border">
            <label for="customFile">Energy Levels</label>
            <div class="container p-3 my-3 border">
            @foreach(array_chunk($energyLevels->toArray(), 4) as $energyLevelsChunk)
                <div class="row">
                    @foreach($energyLevelsChunk as $energyLevel)
                        <div class="col-3">
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

        <div class="form-group col-md-8 border">
            <label for="customFile">Moods</label>
            <div class="container p-3 my-3 border">
            @foreach(array_chunk($moods->toArray(), 4) as $moodsChunk)
                <div class="row">
                    @foreach($moodsChunk as $mood)
                        <div class="col-3">
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
            // let fileName = '';
            const fileOjb = $(this)[0].files;

            for (var key of Object.keys(fileOjb)) {
                // fileName += fileOjb[key].name + ', ';
                const ul = document.getElementById("song-list");
                const li = document.createElement("li");
                li.appendChild(document.createTextNode(fileOjb[key].name));
                li.setAttribute("class", "list-group-item");
                ul.appendChild(li);
            }

            // fileName = fileName.slice(0, -2);
            // //replace the "Choose a file" label
            // $(this).next('.custom-file-label').html(fileName);
        })
    </script>

@endsection