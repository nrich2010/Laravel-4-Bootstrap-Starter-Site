
{{ Form::open(array('route' => 'buses.store')) }}
    <ul>
        <li>
            {{ Form::label('bus_id', 'Bus id:') }}
            {{ Form::text('bus_id') }}
        </li>

        <li>
            {{ Form::label('driver', 'Driver:') }}
            {{ Form::text('driver') }}
        </li>

        <li>
            {{ Form::label('capacity', 'Capacity:') }}
            {{ Form::text('capacity') }}
        </li>

        <li>
            {{ Form::label('year', 'Year:') }}
            {{ Form::textarea('year') }}
        </li>

        <li>
            {{ Form::label('veh_make', 'Veh make:') }}
            {{ Form::textarea('veh_make') }}
        </li>

        <li>
            {{ Form::label('veh_model', 'Veh model:') }}
            {{ Form::textarea('veh_model') }}
        </li>

        <li>
            {{ Form::label('engine', 'Engine:') }}
            {{ Form::textarea('engine') }}
        </li>

        <li>
            {{ Form::label('lift', 'Lift:') }}
            {{ Form::checkbox('lift') }}
        </li>

        <li>
            {{ Form::submit() }}
        </li>
    </ul>
{{ Form::close() }}
