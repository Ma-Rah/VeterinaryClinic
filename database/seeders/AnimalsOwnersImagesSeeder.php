<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;

use DB;
use App\Models\Pet;
use App\Models\Owner;


class AnimalsOwnersImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('owners')->truncate();
        DB::table('pets')->truncate();
     

        $data = json_decode(file_get_contents(storage_path('clients.json')));

        foreach ($data as $owner_data) {
            $owner = new Owner;
            $owner->first_name = $owner_data->first_name;
            $owner->surname = $owner_data->surname;
            $owner->save();

            if (!empty($owner_data->pets)) {
                foreach ($owner_data->pets as $pet_data) {

                   
                    $animal = new Pet;
             
                    $animal->owner_id = $owner->id;
                  
            
                    $animal->breed = $pet_data->breed;
                    $animal->weight = $pet_data->weight ?? 0;
                    $animal->age = $pet_data->age ?? 0;
                    $animal->name = $pet_data->name;
					$animal->photo = $pet_data->photo;
                    $animal->save();
                }
            }
        }
    }
}
