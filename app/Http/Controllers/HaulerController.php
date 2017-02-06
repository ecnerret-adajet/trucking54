<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Collection;
use Carbon\Carbon;
use App\Hauler;
use Alert;
use App\Customer;
use App\Truck;

class HaulerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $haulers = Hauler::where('availablity',1)->get();
        return view('haulers.index', compact(
            'haulers'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $trucks = Truck::pluck('plate_number','id');
        $customers = Customer::pluck('name','id');
        return view('haulers.create',compact(
            'trucks',
            'customers'
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $hauler = new Hauler;
        $hauler->user()->associate(Auth::user());
        $hauler->dispatch_time = Carbon::now();
        $hauler->save();

        $hauler->trucks()->attach($request->input('truck_list'));
        $hauler->customers()->attach($request->input('customer_list'));

        alert()->success('Success Messsage','Successfully Dispatch a hauler');
        return redirect('haulers');
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
