@extends('layouts.admin')

@section('content')
    
    <div>
        <div class="row">
            <div class="col-12">
                <h1 class="h3 mb-2 text-gray-800 float-left">Moods</h1>
                <a class="btn btn-sm btn-primary float-right" href="{{ route('admin.moods.create') }}" role="button">
                    Add New Mood
                </a>
            </div>
        </div>    
    </div>    

    <div class="card shadow mb-4">

        <div class="row ml-2 mt-2 mb-2">
            <form class="form-inline" method="GET" action="/admin/moods">
                <!-- @csrf -->
                <!-- @method('GET') -->
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" value="{{ $name }}" class="form-control mx-sm-3">
                </div>
                <button type="submit" class="btn btn-primary mr-1">Search</button>
                <a class="btn btn-secondary" href="/admin/moods" role="button">Reset</a>
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
                    @if ($moods->total() > 0)
                        @foreach($moods as $mood)
                            <tr>
                                <th scope="row">{{ $mood->id }}</th>
                                <td>{{ $mood->name }}</td>
                                <td>
                                    <a class="btn btn-sm btn-secondary" href="{{ route('admin.moods.edit', $mood->id) }}" role="button">
                                        Edit
                                    </a>

                                    <button type="button" class="btn btn-sm btn-danger" 
                                        onclick="event.preventDefault(); 
                                                document.getElementById('delete-mood-form-{{ $mood->id }}').submit()">
                                        Delete
                                    </button>
                                    <form id="delete-mood-form-{{ $mood->id }}" action="{{ route('admin.moods.destroy', $mood->id) }}" method="POST" style="display: none">
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
        {{ $moods->links() }}

    </div>
    
@endsection