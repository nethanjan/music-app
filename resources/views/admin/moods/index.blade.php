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
                </tbody>
            </table>
        </div>
        {{ $moods->links() }}

    </div>
    
@endsection