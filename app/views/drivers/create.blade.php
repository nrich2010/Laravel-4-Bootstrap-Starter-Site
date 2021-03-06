@extends('layouts.scaffold')

@section('main')

<h1>Create Driver</h1>

{{ Form::open(array('route' => 'drivers.store')) }}
    <ul>
        <li>
            {{ Form::label('driver_id', 'Driver_id:') }}
            {{ Form::input('number', 'driver_id') }}
        </li>

        <li>
            {{ Form::label('first_name', 'First_name:') }}
            {{ Form::textarea('first_name') }}
        </li>

        <li>
            {{ Form::label('last_name', 'Last_name:') }}
            {{ Form::textarea('last_name') }}
        </li>

        <li>
            {{ Form::label('phone1', 'Phone1:') }}
            {{ Form::input('number', 'phone1') }}
        </li>

        <li>
            {{ Form::label('phone2', 'Phone2:') }}
            {{ Form::input('number', 'phone2') }}
        </li>

        <li>
            {{ Form::label('wheelchairs', 'Wheelchairs:') }}
            {{ Form::checkbox('wheelchairs') }}
        </li>

        <li>
            {{ Form::submit('Submit', array('class' => 'btn')) }}
        </li>
    </ul>
{{ Form::close() }}

@if ($errors->any())
    <ul>
        {{ implode('', $errors->all('<li class="error">:message</li>')) }}
    </ul>
@endif

@stop


