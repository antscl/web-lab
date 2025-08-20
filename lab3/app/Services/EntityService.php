<?php

namespace App\Services;

use App\Models\Entity;

class EntityService
{
    public function getAllEntities()
    {
        return Entity::orderBy('name', 'asc')->paginate(10);
    }

    public function createEntity($data)
    {
        return Entity::create($data);
    }
}
