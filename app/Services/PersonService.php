<?php

namespace App\Services;

use App\Models\Person;
use App\Repositories\PersonRepository;
use App\Repositories\PropertyRepository;
use App\Enums\PropertyType;

class PersonService
{
    protected $people;
    protected $properties;

    public function __construct(
        PersonRepository $people,
        PropertyRepository $properties)
    {
        $this->people = $people;
        $this->properties = $properties;
    }

    public function createPerson(array $attributes)
    {
        $person = $this->people->createPerson($attributes);
        return $this->defaultPersonProperties($person);
    }

    public function getPerson($person_id)
    {
        return $this->people->findPerson($person_id);
    }

    public function setInfectedPerson(Person $person)
    {
        $person->flags++;
        $person->save();
     
        $collection = collect(['message' => 'infected person successfully reported']);

        return response($collection, 200)
                  ->header('Content-Type', 'text/plain');
    }

    public function defaultPersonProperties(Person $person){
        
        for ($i=1; $i < 5; $i++) {
            $property = $this->properties->createProperty([
                'name' => PropertyType::getKey($i),
                'amount' => 10
                ]);
            $person->properties()->attach($property);
        }

        return $person;
    }
}
