<?php

namespace App\Transformers;

use App\Models\Person;
use League\Fractal\TransformerAbstract;

class PersonTransformer extends TransformerAbstract
{
    protected $availableIncludes = [
        'properties'
    ];

    public function transform(Person $person)
    {
        return [
            'id' => (int) $person->id,
            'name' => $person->name,
            'age' => $person->age,
            'sex' => $person->sex,
            'flags' => (int) $person->flags,
            'created_at' => $person->created_at,
            'updated_at' => $person->updated_at,
        ];
    }

    /**
     * @param Person $person
     * @return \League\Fractal\Resource\collection
     */
    public function includeProperties(Person $person)
    {
        $properties = $person->properties();
        return $this->collection($roles, new RoleTransformer);
    }
}
