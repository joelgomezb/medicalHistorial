<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
	{

      \DB::table('role')->insert(array(
		 'name'  => 'Admin',
	   ));

	 \DB::table('role')->insert(array(
		 'name' => 'Coordinator',
	   ));

	 \DB::table('role')->insert(array(
		 'name' => 'Entry Clerk',
	   ));

    }
}
