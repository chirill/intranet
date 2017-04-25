@extends('layouts.admin')
@section('content')

    @if(Session::has('deleted_user'))


        <p class="bg-danger">{{session('deleted_user')}}</p>


    @endif


    <h1>Admin Users</h1>

    <table class="table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Active</th>
            <th>Created_at</th>
            <th>Updated_at</th>
        </tr>
        </thead>
        <tbody>
        @if($users)
            @foreach($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td><a href="">{{$user->name}}</a></td>
                <td>{{$user->email}}</td>
                <td>{{$user->role->name}}</td>
                <td>{{$user->is_active==1 ? 'Active': 'Not Active'}}</td>
                <td>{{$user->created_at}} ({{$user->created_at->diffForHumans()}} )</td>
                <td>{{$user->updated_at}} ({{$user->updated_at->diffForHumans()}} )</td>

            </tr>
            @endforeach
        @endif
        </tbody>
    </table>
@stop