<?php

namespace Database\Seeders;

use App\Models\Entity;
use Illuminate\Database\Seeder;

class EntitySeeder extends Seeder
{
    public function run()
    {
        Entity::create([
            'name' => 'John Doe',
            'email' => 'john.doe@example.com',
        ]);
    }
}
