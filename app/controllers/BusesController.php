<?php

class BusesController extends BaseController {

    /**
     * Bus Model
     * @var Bus
     */
    protected $bus;
	
	/**
     * The layout that should be used for responses.
     */
    protected $layout = 'layouts.scaffold';

    /**
     * Inject the models.
     * @param Bus $bus
     */
    public function __construct(Bus $bus)
    {
        parent::__construct();

        $this->bus = $bus;
    }
	
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
        
		// Get all the blog posts
		$buses = $this->bus->orderBy('created_at', 'DESC')->paginate(10);

		// Show the page
		//return View::make('default');
		$this->layout->content = View::make('buses.index');
		
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
        // Show the page
		return View::make('buses/create', compact('buses'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}