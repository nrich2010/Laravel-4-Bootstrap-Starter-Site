<?php

class DriversController extends BaseController {

    /**
     * Driver Repository
     *
     * @var Driver
     */
    protected $driver;

    public function __construct(Driver $driver)
    {
        $this->driver = $driver;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $drivers = $this->driver->all();

        return View::make('drivers.index', compact('drivers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return View::make('drivers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $input = Input::all();
        $validation = Validator::make($input, Driver::$rules);

        if ($validation->passes())
        {
            $this->driver->create($input);

            return Redirect::route('drivers.index');
        }

        return Redirect::route('drivers.create')
            ->withInput()
            ->withErrors($validation)
            ->with('message', 'There were validation errors.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $driver = $this->driver->findOrFail($id);

        return View::make('drivers.show', compact('driver'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $driver = $this->driver->find($id);

        if (is_null($driver))
        {
            return Redirect::route('drivers.index');
        }

        return View::make('drivers.edit', compact('driver'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $input = array_except(Input::all(), '_method');
        $validation = Validator::make($input, Driver::$rules);

        if ($validation->passes())
        {
            $driver = $this->driver->find($id);
            $driver->update($input);

            return Redirect::route('drivers.show', $id);
        }

        return Redirect::route('drivers.edit', $id)
            ->withInput()
            ->withErrors($validation)
            ->with('message', 'There were validation errors.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $this->driver->find($id)->delete();

        return Redirect::route('drivers.index');
    }

}