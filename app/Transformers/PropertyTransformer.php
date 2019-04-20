<?php

namespace App\Transformers;

use App\Models\Property;
use League\Fractal\TransformerAbstract;

class PropertyTransformer extends TransformerAbstract
{
    public function transform(Property $property)
    {
        return [
            'id' => (int) $property->id,
            'name' => $property->name,
            'amount' => (int) $property->amount,
        ];
    }
}
