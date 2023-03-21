<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\crud;
use Carbon\Carbon;


class Crud_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $values = [
        //     ["id"=>"1","first_name"=>"Bianca","last_name"=>"Bianca","email"=>"Bianca","deleted_at"=>"","Created_at"=>""],
        //     ["id"=>"2","first_name"=>"Ady","last_name"=>"Ady","email"=>"ady@gmail.com","deleted_at"=>"12.08.2022","Created_at"=>""],
        //     ["id"=>"3","first_name"=>"Rebeca","last_name"=>"Rebeca","email"=>"rebeca@gmail.com","deleted_at"=>"12.08.2022","Created_at"=>"09.06.2022"]
        // ];

        $values = crud::all();
        return view('index', ['values' => $values] );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {

        $crud = new crud();

        $crud->Firstname = request('Firstname');
        $crud->Lastname = request('Lastname');
        $crud->email = request('email');
        $crud->deleted_at= "-";

        // now()->toDateTimeString()

        $crud->save();

        request("Firstname");
        request("Lastname");
        request("email");



        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {

        $showId = crud::find($id);

        return view('show', ['showId' => $showId]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

        $editID = crud::find($id);

        return view('edit',["editID" => $editID]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id)
    {

        $editID = crud::find($id);

        $update1 = request('firstname');
        $update2 = request('lastname');
        $update3 = request('email');
        $date = Carbon::now();

        crud::where('id', $id)->update(["Firstname" => $update1, "Lastname" => $update2, "email"=> $update3, "updated_at"=>$date]);

//---------------------------------------------
        // $stock = Stock::find($id);
        // // Getting values from the blade template form
        // $stock->stock_name =  $request->get('stock_name');
        // $stock->ticket = $request->get('ticket');
        // $stock->value = $request->get('value');
        // $stock->save();
//---------------------------------------------

        // $update = crud::find($id);

        // $update->Firstname = request('firstname');
        // $update->Lastname = request('lastname');
        // $update->email = request('email');

        // request("Firstname");
        // request("Lastname");
        // request("email");

        return redirect("/");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $crud = crud::findOrFail($id);
        $crud -> delete();
        $increments = crud::all();
        crud::where('id', $id)->update(['id'=>count($increments)]);

        return redirect("/");
    }

    public function delete($id) {

        $crud = Carbon::now();
        crud::where('id', $id)->update(["deleted_at" => $crud]);

            //     Schema::create('crud', function(Blueprint $table)
            // {
            //     $crud->increments('id');
            //     $crud->softDeletes();
            //     $crud->timeStamps();
            // });

        return redirect("/");
    }

}
