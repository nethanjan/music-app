@extends('layouts.admin')

@section('content')
    
    <div>
        <div class="row">
            <div class="col-12">
                <h1 class="h3 mb-2 text-gray-800 float-left">Genres</h1>
                <a class="btn btn-sm btn-primary float-right" href="{{ route('admin.genres.create') }}" role="button">
                    Add New Genre
                </a>
            </div>
        </div>    
    </div>    

    <div class="card shadow mb-4">

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
                    @foreach($genres as $genre)
                        <tr>
                            <th scope="row">{{ $genre->id }}</th>
                            <td>{{ $genre->name }}</td>
                            <td>
                                <a class="btn btn-sm btn-secondary" href="{{ route('admin.genres.edit', $genre->id) }}" role="button">
                                    Edit
                                </a>

                                <button type="button" class="btn btn-sm btn-danger" 
                                    onclick="event.preventDefault(); 
                                            document.getElementById('delete-genre-form-{{ $genre->id }}').submit()">
                                    Delete
                                </button>
                                <form id="delete-genre-form-{{ $genre->id }}" action="{{ route('admin.genres.destroy', $genre->id) }}" method="POST" style="display: none">
                                    @csrf
                                    @method("DELETE")
                                </form>    
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{ $genres->links() }}

    </div>
    
@endsection