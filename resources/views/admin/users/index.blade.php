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
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" id="dataTable">
                    <thead>
                        <tr>
                        <th scope="col">#Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                            <tr>
                                <th scope="row">{{ $user->id }}</th>
                                <td>{{ $user->fname .' '. $user->lname }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
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