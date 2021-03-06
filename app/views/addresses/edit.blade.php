@extends('layouts.scaffold')

@section('main')

<h1>Edit Address</h1>
{{ Form::model($address, array('method' => 'PATCH', 'route' => array('addresses.update', $address->id))) }}
    <ul>
        <li>
            {{ Form::label('address_id', 'Address_id:') }}
            {{ Form::input('number', 'address_id') }}
        </li>

        <li>
            {{ Form::label('name', 'Name:') }}
            {{ Form::textarea('name') }}
        </li>

        <li>
            {{ Form::label('street_address', 'Street_address:') }}
            {{ Form::textarea('street_address') }}
        </li>

        <li>
            {{ Form::label('apt-door', 'Apt-door:') }}
            {{ Form::textarea('apt-door') }}
        </li>

        <li>
            {{ Form::label('city', 'City:') }}
            {{ Form::textarea('city') }}
        </li>

        <li>
            {{ Form::label('zip_code', 'Zip_code:') }}
            {{ Form::input('number', 'zip_code') }}
        </li>

        <li>
            {{ Form::label('phone', 'Phone:') }}
            {{ Form::input('number', 'phone') }}
        </li>

        <li>
            {{ Form::submit('Update', array('class' => 'btn btn-info')) }}
            {{ link_to_route('addresses.show', 'Cancel', $address->id, array('class' => 'btn')) }}
        </li>
    </ul>
{{ Form::close() }}

@if ($errors->any())
    <ul>
        {{ implode('', $errors->all('<li class="error">:message</li>')) }}
    </ul>
@endif

@stop