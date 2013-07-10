@extends('layouts.scaffold')

@section('main')

<h1>All Addresses</h1>

<p>{{ link_to_route('addresses.create', 'Add new address') }}</p>

@if ($addresses->count())
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
            @foreach ($addresses as $address)
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
            @endforeach
        </tbody>
    </table>
@else
    There are no addresses
@endif

@stop