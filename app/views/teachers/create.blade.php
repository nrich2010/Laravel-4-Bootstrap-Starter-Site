@extends('layouts.scaffold')

@section('main')

<h1>Create Teacher</h1>

{{ Form::open(array('route' => 'teachers.store')) }}
    <ul>
        <li>
            {{ Form::label('teacher_id', 'Teacher_id:') }}
            {{ Form::input('number', 'teacher_id') }}
        </li>

        <li>
            {{ Form::label('name', 'Name:') }}
            {{ Form::textarea('name') }}
        </li>

        <li>
            {{ Form::label('school', 'School:') }}
            {{ Form::input('number', 'school') }}
        </li>

        <li>
            {{ Form::label('phone_number', 'Phone_number:') }}
            {{ Form::input('number', 'phone_number') }}
        </li>

        <li>
            {{ Form::label('email', 'Email:') }}
            {{ Form::textarea('email') }}
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


