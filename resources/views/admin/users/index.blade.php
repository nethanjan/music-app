@extends('layouts.admin')

@section('content')
    
    <div>
        <div class="row">
            <div class="col-12">
                <h1 class="h3 mb-2 text-gray-800 float-left">Users</h1>
                <a class="btn btn-sm btn-primary float-right" href="{{ route('admin.users.create') }}" role="button">
                    Create
                </a>
            </div>
        </div>    
    </div>    

    <div class="card shadow mb-4">

        <div class="row ml-2 mt-2 mb-2">
            <form class="form-inline" method="GET" action="/admin/users">
                <!-- @csrf -->
                <!-- @method('GET') -->
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" value="{{ $name }}" class="form-control mx-sm-3">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email" value="{{ $email }}" class="form-control mx-sm-3">
                </div>
                <button type="submit" class="btn btn-primary mr-1">Search</button>
                <a class="btn btn-secondary" href="/admin/users" role="button">Reset</a>
            </form>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" id="dataTable">
                    <thead>
                        <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($users->total() > 0)
                            @foreach($users as $user)
                                <tr>
                                    <th scope="row">{{ $user->id }}</th>
                                    <td>{{ $user->fname .' '. $user->lname }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        <a class="btn btn-sm btn-primary" href="{{ route('admin.users.show', $user->id) }}" role="button">
                                            View
                                        </a>
                                        <a class="btn btn-sm btn-secondary" href="{{ route('admin.users.edit', $user->id) }}" role="button">
                                            Edit
                                        </a>

                                        <button type="button" class="btn btn-sm btn-danger" 
                                            onclick="event.preventDefault(); 
                                                    document.getElementById('delete-user-form-{{ $user->id }}').submit()">
                                            Delete
                                        </button>
                                        <form id="delete-user-form-{{ $user->id }}" action="{{ route('admin.users.destroy', $user->id) }}" method="POST" style="display: none">
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
        </div>    
        {{ $users->links() }}

    </div>

    <!-- <script>
        $(document).ready( function () {
            $('#dataTable').DataTable();
        } );
    </script>   -->
    
@endsection