<?php

namespace App\Repositories;

use App\Models\Person;

class PersonRepository
{
    /**
     * Recupera uma pessoa.
     *
     * @param $user_id
     * @return mixed
     */
    public function findPerson($person_id)
    {
        return Person::find($person_id);
    }

    /**
     * Cria uma pessoa.
     *
     * @param array $attributes
     * @return mixed
     */
    public function createPerson(array $attributes)
    {
        return Person::create($attributes);
    }
}
