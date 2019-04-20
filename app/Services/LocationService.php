<?php

namespace App\Services;

use App\Models\Location;
use App\Repositories\LocationRepository;

class LocationService
{
    protected $locations;

    public function __construct(LocationRepository $locations)
    {
        $this->locations = $locations;
    }

    public function createLocation(array $attributes)
    {
        $location = $this->locations->createLocation($attributes);

        return $location;
    }

}