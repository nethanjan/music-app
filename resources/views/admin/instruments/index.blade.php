@extends('layouts.admin')

@section('content')
    
    <div>
        <div class="row">
            <div class="col-12">
                <h1 class="h3 mb-2 text-gray-800 float-left">Instruments</h1>
                <a class="btn btn-sm btn-primary float-right" href="{{ route('admin.instruments.create') }}" role="button">
                    Add New Instrument
                </a>
            </div>
        </div>    
    </div>    

    <div class="card shadow mb-4">

        <div class="row ml-2 mt-2 mb-2">
            <form class="form-inline" method="GET" action="/admin/instruments">
                <!-- @csrf -->
                <!-- @method('GET') -->
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" value="{{ $name }}" class="form-control mx-sm-3">
                </div>
                <button type="submit" class="btn btn-primary mr-1">Search</button>
                <a class="btn btn-secondary" href="/admin/instruments" role="button">Reset</a>
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
                    @if ($instruments->total() > 0)
                        @foreach($instruments as $instrument)
                            <tr>
                                <th scope="row">{{ $instrument->id }}</th>
                                <td>{{ $instrument->name }}</td>
                                <td>
                                    <a class="btn btn-sm btn-secondary" href="{{ route('admin.instruments.edit', $instrument->id) }}" role="button">
                                        Edit
                                    </a>

                                    <button type="button" class="btn btn-sm btn-danger" 
                                        onclick="event.preventDefault(); 
                                                document.getElementById('delete-instrument-form-{{ $instrument->id }}').submit()">
                                        Delete
                                    </button>
                                    <form id="delete-instrument-form-{{ $instrument->id }}" action="{{ route('admin.instruments.destroy', $instrument->id) }}" method="POST" style="display: none">
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
        {{ $instruments->links() }}

    </div>
    
@endsection