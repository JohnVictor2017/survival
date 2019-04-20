<?php

namespace App\Repositories;

use App\Models\Property;

class PropertyRepository
{
   /**
     * Cria um bem.
     *
     * @param array $attributes
     * @return mixed
     */
    public function createProperty(array $attributes)
    {
        return Property::create($attributes);
    }
}
