@extends('layouts.admin')

@section('content')

    <div>
        <div class="row">
            <div class="col-12">
                <h1 class="h3 mb-2 text-gray-800 float-left">View User</h1>
            </div>
        </div>    
    </div>

    <dl class="row mt-4">
        <dt class="col-sm-3 mb-3">First Name</dt>
        <dd class="col-sm-9">{{ $user->fname }}</dd>

        <dt class="col-sm-3 mb-3">Last Name</dt>
        <dd class="col-sm-9">{{ $user->lname }}</dd>

        <dt class="col-sm-3 mb-3">Email Address</dt>
        <dd class="col-sm-9">{{ $user->email }}</dd>
    </dl>

    <div class="card shadow mb-4">
        <div class="row ml-2 mt-2 mb-2">
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" id="dataTable">
                    <thead>
                        <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Record Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($user_favourites->total() > 0)
                            @foreach($user_favourites as $user_favourite)
                                <tr>
                                    <th scope="row">{{ $user_favourite->id }}</th>
                                    <td>{{ $user_favourite->recordId }}</td>
                                    <td>{{ $user_favourite->name }}</td>
                                    <td>
                                        Player    
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
        {{ $user_favourites->links() }}
    </div>

@endsection