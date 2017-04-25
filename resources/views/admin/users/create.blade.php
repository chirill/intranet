@extends('layouts.admin')
@section('content')

    <h1>Create User</h1>
<div class="row">
    <div class="col-sm-6">


    {!! Form::open(['method'=>'POST','action'=>'AdminUsersController@store']) !!}
        <div class="form-group">
            {!!Form::label('name', 'Name')!!}
            {!!Form::text('name',null, ['class'=>'form-control'])!!}
        </div>
        <div class="form-group">
            {!! Form::label('email','Email:') !!}
            {!! Form::email('email',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('password','Password:') !!}
            {!! Form::password('password',['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('role_id','Choose user Role:') !!}
            {!! Form::select('role_id', $roles,2,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('is_active','Active:') !!}
            {!! Form::select('is_active',[1=>'active',0=>'not active'],0,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!!Form::submit('create', ['class'=>'btn btn-primary'])!!}
        </div>
    {!! Form::close() !!}
    </div>
</div>
    @include('includes.errors')

    @stop