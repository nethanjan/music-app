@extends('layouts.admin')

@section('content')
    
    <div>
        <div class="row">
            <div class="col-12">
                <h1 class="h3 mb-2 text-gray-800 float-left">Energy Levels</h1>
                <a class="btn btn-sm btn-primary float-right" href="{{ route('admin.energy-levels.create') }}" role="button">
                    Add New Energy Level
                </a>
            </div>
        </div>    
    </div>    

    <div class="card shadow mb-4">

        <div class="row ml-2 mt-2 mb-2">
            <form class="form-inline" method="GET" action="/admin/energy-levels">
                <!-- @csrf -->
                <!-- @method('GET') -->
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" value="{{ $name }}" class="form-control mx-sm-3">
                </div>
                <button type="submit" class="btn btn-primary mr-1">Search</button>
                <a class="btn btn-secondary" href="/admin/energy-levels" role="button">Reset</a>
            </form>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered" width="100%">
                <thead>
                    <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($energyLevels->total() > 0)
                        @foreach($energyLevels as $energyLevel)
                            <tr>
                                <th scope="row">{{ $energyLevel->id }}</th>
                                <td>{{ $energyLevel->name }}</td>
                                <td>
                                    <a class="btn btn-sm btn-secondary" href="{{ route('admin.energy-levels.edit', $energyLevel->id) }}" role="button">
                                        Edit
                                    </a>

                                    <button type="button" class="btn btn-sm btn-danger" 
                                        onclick="event.preventDefault(); 
                                                document.getElementById('delete-energy-level-form-{{ $energyLevel->id }}').submit()">
                                        Delete
                                    </button>
                                    <form id="delete-energy-level-form-{{ $energyLevel->id }}" action="{{ route('admin.energy-levels.destroy', $energyLevel->id) }}" method="POST" style="display: none">
                                        @csrf
                                        @method("DELETE")
                                    </form>    
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr class="no-data">
                            <td colspan="3">No data available in table</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
        {{ $energyLevels->links() }}

    </div>
    
@endsection