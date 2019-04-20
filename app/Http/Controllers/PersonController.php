<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Collection;

use Symfony\Component\HttpFoundation\Response;

use App\Models\Person;
use App\Services\PersonService;

class PersonController extends Controller
{
    protected $personService;

    public function __construct(PersonService $personService)
    {
        $this->personService = $personService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getPeople()
    {
        return Person::orderBy('id', 'ASC')->get();
    }
    
    public function getPerson(Person $person)
    {
        return [
            'person' => $person,
            'properties' => $person->properties()->get()

        ];
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function createPerson(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'age' => 'required',
            'sex' => [
                'required',
                Rule::in(['M', 'F']),
            ]
        ]);

        /*
        if($validator->fails()){
            $errors = $validation->errors();
            return $errors->toJson();
        }else{
            return Person::create([
                'name' => $request->get('name'),
                'age' => $request->get('age'),
                'sex' => $request->get('sex'),
            ]);
        }
        */
        $person = $this->personService->createPerson([
            'name' => $request->get('name'),
            'age' => $request->get('age'),
            'sex' => $request->get('sex'),
        ]);
        
        /*
        $location = $this->locations->createLocation([
            'latitude' => $request->get('latitude'),
            'longitude' => $request->get('longitude'),
        ]);
        */

        // TODO Adicionar a localização da pessoa
        // $person->location()->apend($location);

        return $person;

    }

    /**
     * Report an infected person.
     *
     * @return \Illuminate\Http\Response
     */
    public function reportInfected(Person $person)
    {
        $this->personService->setInfectedPerson($person);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
