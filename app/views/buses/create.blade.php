{{ Form::open(array('route' => 'buses.store')) }}
    <div>
        {{ Form::label('bus_id', 'Bus id:') }}
        {{ Form::text('bus_id') }}
    </div>

    <div>
        {{ Form::label('driver', 'Driver:') }}
        {{ Form::text('driver') }}
    </div>

    <div>
        {{ Form::label('capacity', 'Capacity:') }}
        {{ Form::text('capacity') }}
    </div>

    <div>
        {{ Form::label('year', 'Year:') }}
        {{ Form::textarea('year') }}
    </div>

    <div>
        {{ Form::label('veh_make', 'Veh make:') }}
        {{ Form::textarea('veh_make') }}
    </div>

    <div>
        {{ Form::label('veh_model', 'Veh model:') }}
        {{ Form::textarea('veh_model') }}
    </div>

    <div>
        {{ Form::label('engine', 'Engine:') }}
        {{ Form::textarea('engine') }}
    </div>

    <div>
        {{ Form::label('lift', 'Lift:') }}
        {{ Form::checkbox('lift') }}
    </div>

    <div>
        {{ Form::submit() }}
    </div>
{{ Form::close() }}
