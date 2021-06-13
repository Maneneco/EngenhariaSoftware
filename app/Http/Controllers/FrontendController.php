<?php

namespace App\Http\Controllers;

use App\Contact;
use App\House;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return view('welcome');

    }
    public function vercasa(House $house)
    {
        return view('casa')
            ->with('house',$house);

    }
    public function comprar()
    {

        $houses = House::all();

        return view('comprar')
                ->with('houses',$houses);

    }

      public function arrendar()
    {
        $houses = House::all();
        return view('arrendar')
                ->with('houses',$houses);
    }

    public function welcome()
    {
        return view('welcome');

    }
       public function ambos()
    {
        return view('ambos');

    }

    public function contactenos()
    {
        return view('contactenos');
    }

   public function filterByCity($city){
        $houses = House::where('adress',$city)->get();


       return view('comprar')
           ->with('houses',$houses);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function contact()
    {
        return view('contact');
    }

    /** * Show the application dashboard. * * @return \Illuminate\Http\Response */
    public function contactPost(Request $request)
    {
        $this->validate($request, ['name' => 'required', 'email' => 'required|email', 'city' => 'required', 'zip' => 'required', 'matter' => 'required','assunto' => 'required']);
        Contact::create($request->all());

        return back()->with('success', 'Entraremos em conctato o mais brevemente possivel!');
    }
}
