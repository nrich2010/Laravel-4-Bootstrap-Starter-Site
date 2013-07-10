@extends('layouts.scaffold')

@section('main')

<h1>Show Address</h1>

<p>{{ link_to_route('addresses.index', 'Return to all addresses') }}</p>

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>Address_id</th>
				<th>Name</th>
				<th>Street_address</th>
				<th>Apt-door</th>
				<th>City</th>
				<th>Zip_code</th>
				<th>Phone</th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td>{{{ $address->address_id }}}</td>
					<td>{{{ $address->name }}}</td>
					<td>{{{ $address->street_address }}}</td>
					<td>{{{ $address->apt-door }}}</td>
					<td>{{{ $address->city }}}</td>
					<td>{{{ $address->zip_code }}}</td>
					<td>{{{ $address->phone }}}</td>
                    <td>{{ link_to_route('addresses.edit', 'Edit', array($address->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('addresses.destroy', $address->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
        </tr>
    </tbody>
</table>

@stop