@extends('layouts.scaffold')

@section('main')

<h1>All Drivers</h1>

<p>{{ link_to_route('drivers.create', 'Add new driver') }}</p>

@if ($drivers->count())
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Driver_id</th>
				<th>First_name</th>
				<th>Last_name</th>
				<th>Phone1</th>
				<th>Phone2</th>
				<th>Wheelchairs</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($drivers as $driver)
                <tr>
                    <td>{{{ $driver->driver_id }}}</td>
					<td>{{{ $driver->first_name }}}</td>
					<td>{{{ $driver->last_name }}}</td>
					<td>{{{ $driver->phone1 }}}</td>
					<td>{{{ $driver->phone2 }}}</td>
					<td>{{{ $driver->wheelchairs }}}</td>
                    <td>{{ link_to_route('drivers.edit', 'Edit', array($driver->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('drivers.destroy', $driver->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@else
    There are no drivers
@endif

@stop