<?php

class DatabaseSeeder extends Seeder {

    public function run()
    {
        Eloquent::unguard();

        // Add calls to Seeders here
        $this->call('UsersTableSeeder');
        $this->call('PostsTableSeeder');
        $this->call('CommentsTableSeeder');
        $this->call('RolesTableSeeder');
        $this->call('PermissionsTableSeeder');
    	$this->call('RidersTableSeeder');
		$this->call('BusesTableSeeder');
		$this->call('DriversTableSeeder');
		$this->call('SchoolsTableSeeder');
		$this->call('TeachersTableSeeder');
		$this->call('AddressesTableSeeder');
		$this->call('RidersTableSeeder');
		$this->call('RidersTableSeeder');
		$this->call('BusesTableSeeder');
		$this->call('BusesTableSeeder');
		$this->call('DriversTableSeeder');
		$this->call('SchoolsTableSeeder');
		$this->call('TeachersTableSeeder');
		$this->call('AddressesTableSeeder');
		$this->call('BusesTableSeeder');
	}

}