<?php

namespace App\Repositories;

use App\Models\Location;

class LocationRepository
{
    /**
     * Cria uma localização.
     *
     * @param array $attributes
     * @return mixed
     */
    public function createLocation(array $attributes)
    {
        return Location::create($attributes);
    }
}
