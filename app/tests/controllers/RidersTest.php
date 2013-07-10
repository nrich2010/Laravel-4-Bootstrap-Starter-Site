<?php

use Mockery as m;
use Way\Tests\Factory;

class RidersTest extends TestCase {

    public function __construct()
    {
        $this->mock = m::mock('Eloquent', 'Rider');
        $this->collection = m::mock('Illuminate\Database\Eloquent\Collection')->shouldDeferMissing();
    }

    public function setUp()
    {
        parent::setUp();

        $this->attributes = Factory::rider(['id' => 1]);
        $this->app->instance('Rider', $this->mock);
    }

    public function tearDown()
    {
        m::close();
    }

    public function testIndex()
    {
        $this->mock->shouldReceive('all')->once()->andReturn($this->collection);
        $this->call('GET', 'riders');

        $this->assertViewHas('riders');
    }

    public function testCreate()
    {
        $this->call('GET', 'riders/create');

        $this->assertResponseOk();
    }

    public function testStore()
    {
        $this->mock->shouldReceive('create')->once();
        $this->validate(true);
        $this->call('POST', 'riders');

        $this->assertRedirectedToRoute('riders.index');
    }

    public function testStoreFails()
    {
        $this->mock->shouldReceive('create')->once();
        $this->validate(false);
        $this->call('POST', 'riders');

        $this->assertRedirectedToRoute('riders.create');
        $this->assertSessionHasErrors();
        $this->assertSessionHas('message');
    }

    public function testShow()
    {
        $this->mock->shouldReceive('findOrFail')
                   ->with(1)
                   ->once()
                   ->andReturn($this->attributes);

        $this->call('GET', 'riders/1');

        $this->assertViewHas('rider');
    }

    public function testEdit()
    {
        $this->collection->id = 1;
        $this->mock->shouldReceive('find')
                   ->with(1)
                   ->once()
                   ->andReturn($this->collection);

        $this->call('GET', 'riders/1/edit');

        $this->assertViewHas('rider');
    }

    public function testUpdate()
    {
        $this->mock->shouldReceive('find')
                   ->with(1)
                   ->andReturn(m::mock(['update' => true]));

        $this->validate(true);
        $this->call('PATCH', 'riders/1');

        $this->assertRedirectedTo('riders/1');
    }

    public function testUpdateFails()
    {
        $this->mock->shouldReceive('find')->with(1)->andReturn(m::mock(['update' => true]));
        $this->validate(false);
        $this->call('PATCH', 'riders/1');

        $this->assertRedirectedTo('riders/1/edit');
        $this->assertSessionHasErrors();
        $this->assertSessionHas('message');
    }

    public function testDestroy()
    {
        $this->mock->shouldReceive('find')->with(1)->andReturn(m::mock(['delete' => true]));

        $this->call('DELETE', 'riders/1');
    }

    protected function validate($bool)
    {
        Validator::shouldReceive('make')
                ->once()
                ->andReturn(m::mock(['passes' => $bool]));
    }
}