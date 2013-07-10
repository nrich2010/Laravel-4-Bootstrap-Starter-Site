@extends('layouts.scaffold')

@section('main')

<h1>Create School</h1>

{{ Form::open(array('route' => 'schools.store')) }}
    <ul>
        <li>
            {{ Form::label('school_id', 'School_id:') }}
            {{ Form::input('number', 'school_id') }}
        </li>

        <li>
            {{ Form::label('name', 'Name:') }}
            {{ Form::textarea('name') }}
        </li>

        <li>
            {{ Form::label('session_times', 'Session_times:') }}
            {{ Form::textarea('session_times') }}
        </li>

        <li>
            {{ Form::label('office_number', 'Office_number:') }}
            {{ Form::input('number', 'office_number') }}
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


