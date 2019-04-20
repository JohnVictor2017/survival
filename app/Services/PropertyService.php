<?php

namespace App\Services;

use App\Models\Property;
use App\Repositories\PropertyRepository;

class PropertyService
{
    protected $properties;

    public function __construct(PropertyRepository $properties)
    {
        $this->properties = $properties;
    }

    public function createProperty(array $attributes)
    {
        $property = $this->properties->createProperty($attributes);

        return $property;
    }

}
