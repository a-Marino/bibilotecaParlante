<?php

namespace Database\Seeders;

use App\Models\Editorial;
use Illuminate\Database\Seeder;

class EditorialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Editorial::create([
            'nombre_editorial' => 'Editorial 1' 
        ]);
    }
}
