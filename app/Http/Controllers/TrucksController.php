<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Truck;
use App\Rules\OwnerName;
use Kris\LaravelFormBuilder\FormBuilder;

class TrucksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trucks = Truck::with('manufacturer')->paginate(8);
        return view('trucks.index')->with('trucks', $trucks);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(FormBuilder $formBuilder)
    {
        $form = $formBuilder->create(\App\Forms\TruckForm::class, [
            'method' => 'POST',
            'url' => route('trucks.store')
        ]);

        return view('trucks.create', compact('form'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FormBuilder $formBuilder, Request $request)
    {
        $form = $formBuilder->create(\App\Forms\TruckForm::class);

        if (!$form->isValid()) {
            return redirect()->back()->withErrors($form->getErrors())->withInput();
        }

        $this->validate($request, [
            'make_id' => 'required',
            'year'    => 'required|integer|min:1900|max:'.date('Y'),
            'owner'   =>  new OwnerName,
            'owner_number' => 'integer|min:0|max:99',
            'comments'=> 'min:3|max:1000'
        ]);

        $form = new Truck;
        $form->make_id = $request->input('make_id');
        $form->year = $request->input('year');
        $form->owner = $request->input('owner');
        $form->owner_number = $request->input('owner_number');
        $form->comments = $request->input('comments');
        $form->save();
        // Do saving and other things...

        return redirect()->route('trucks.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
