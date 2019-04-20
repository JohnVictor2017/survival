<?php

namespace App\Services;

use App\Models\Person;
use App\Repositories\PersonRepository;

class PersonService
{
    protected $people;

    public function __construct(PersonRepository $people)
    {
        $this->people = $people;
    }

    public function createPerson(array $attributes)
    {
        $user = $this->people->createPerson($attributes);
        return $user;
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
}
