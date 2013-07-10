@extends('layouts.scaffold')

@section('main')

<h1>All Schools</h1>

<p>{{ link_to_route('schools.create', 'Add new school') }}</p>

@if ($schools->count())
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>School_id</th>
				<th>Name</th>
				<th>Session_times</th>
				<th>Office_number</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($schools as $school)
                <tr>
                    <td>{{{ $school->school_id }}}</td>
					<td>{{{ $school->name }}}</td>
					<td>{{{ $school->session_times }}}</td>
					<td>{{{ $school->office_number }}}</td>
                    <td>{{ link_to_route('schools.edit', 'Edit', array($school->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('schools.destroy', $school->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@else
    There are no schools
@endif

@stop