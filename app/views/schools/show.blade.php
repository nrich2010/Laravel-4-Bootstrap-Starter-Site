@extends('layouts.scaffold')

@section('main')

<h1>Show School</h1>

<p>{{ link_to_route('schools.index', 'Return to all schools') }}</p>

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
    </tbody>
</table>

@stop