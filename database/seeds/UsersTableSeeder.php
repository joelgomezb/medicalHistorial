<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      \DB::table('users')->insert(array(
		 'name'         => 'Joel Gomez',
		 'email'        => 'joelgomezb@gmail.com',
		 'password'     => bcrypt('123321...'),
		 'rol_id'     =>   '1',
		 'created_at'   => date('Y-m-d H:m:s'),
		 'updated_at'   => date('Y-m-d H:m:s')
	 ));
    }
}
