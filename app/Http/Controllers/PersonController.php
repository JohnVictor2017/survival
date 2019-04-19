<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

use Symfony\Component\HttpFoundation\Response;

use App\Person;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getPeople()
    {
        return Person::orderBy('id', 'ASC')->get();
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

        return Person::create($request->all());
    }

    /**
     * Report a infected person.
     *
     * @return \Illuminate\Http\Response
     */
    public function reportInfected(Person $person)
    {
        $person->flags++;
        $person->save();
     
        return response('', 204)
                  ->header('Content-Type', 'text/plain');
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
