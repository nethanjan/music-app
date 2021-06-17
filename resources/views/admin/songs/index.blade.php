@extends('layouts.admin')

@section('content')
    
    <div>
        <div class="row">
            <div class="col-12">
                <h1 class="h3 mb-2 text-gray-800 float-left">Songs</h1>
                <a class="btn btn-sm btn-primary float-right" href="{{ route('admin.songs.create') }}" role="button">
                    Upload New Song
                </a>
            </div>
        </div>    
    </div>    

    <div class="card shadow mb-4">

        <div class="row ml-2 mt-2 mb-2">
            <form class="form-inline" method="GET" action="/admin/songs">
                <!-- @csrf -->
                <!-- @method('GET') -->
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" value="" class="form-control mx-sm-3">
                </div>
                <div class="form-group mr-2">
                    <select class="custom-select" name="genre">
                        <option value="">Genres</option>
                        @foreach($genres as $genre)
                            <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group mr-2">
                    <select class="custom-select" name="instrument">
                        <option value="">Instruments</option>
                        @foreach($instruments as $instrument)
                            <option value="{{ $instrument->id }}">{{ $instrument->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group mr-2">
                    <select class="custom-select" name="energyLevel">
                        <option value="">Energy Levels</option>
                        @foreach($energyLevels as $energyLevel)
                            <option value="{{ $energyLevel->id }}">{{ $energyLevel->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group mr-2">
                    <select class="custom-select" name="mood">
                        <option value="">Moods</option>
                        @foreach($moods as $mood)
                            <option value="{{ $mood->id }}">{{ $mood->name }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary mr-1 ml-3">Search</button>
                <a class="btn btn-secondary" href="/admin/songs" role="button">Reset</a>
            </form>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered" width="100%">
                <thead>
                    <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Record Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">length</th>
                    <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($songs as $song)
                        <tr>
                            <th scope="row">{{ $song->id }}</th>
                            <td>{{ $song->recordId }}</td>
                            <td>{{ $song->name }}</td>
                            <td>{{ $song->length }}</td>
                            <td>
                                <a class="btn btn-sm btn-secondary" href="{{ route('admin.songs.edit', $song->id) }}" role="button">
                                    Edit
                                </a>

                                <button type="button" class="btn btn-sm btn-danger" 
                                    onclick="event.preventDefault(); 
                                            document.getElementById('delete-song-form-{{ $song->id }}').submit()">
                                    Delete
                                </button>
                                <form id="delete-song-form-{{ $song->id }}" action="{{ route('admin.songs.destroy', $song->id) }}" method="POST" style="display: none">
                                    @csrf
                                    @method("DELETE")
                                </form>    
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{ $songs->links() }}

    </div>
    
@endsection