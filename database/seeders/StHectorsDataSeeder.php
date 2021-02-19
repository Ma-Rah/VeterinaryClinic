<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StHectorsDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json_string = file_get_contents('./storage/clients.json'); // replace path with a real path
		$data = json_decode($json_string); // decode the string into data

	
		
    }
}
