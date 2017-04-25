@extends('layouts.admin')
@section('content')

    <h1>Create User</h1>
<div class="row">
    <div class="col-sm-6">


    {!! Form::open(['method'=>'POST','action'=>'AdminUsersController@store']) !!}
        <div class="form-group">
            {!!Form::label('name', 'Name')!!}
            {!!Form::text('title',null, ['class'=>'form-control'])!!}
        </div>
        <div class="form-group">
            {!! Form::label('email','Email:') !!}
            {!! Form::email('email',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!!Form::submit('create', ['class'=>'btn btn-primary'])!!}
        </div>
    {!! Form::close() !!}
    </div>
</div>
    @stop