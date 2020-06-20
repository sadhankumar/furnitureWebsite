<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use App\CustomerInfo;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function send(Request $request) {
        // $data = array(
        //     'customer_name' => $request->customer_name,
        //     'description'   => $request->description
        // );

        // Mail::to('sadhan1296@gmail.com')->send(new SendMail($data));
        // return back()->with('success', 'Thanks');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customerInfo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'customer_name' => 'required',
            'email'         => 'required',
            'numbers'       => 'required|digits:10',
            'product_id'    => 'required',
            'description'   => 'required'
        ]);

        $customerInfo = new CustomerInfo([
            'customer_name'  => $request->get('customer_name'),
            'email'          => $request->get('email'),
            'numbers'        => $request->get('numbers'),
            'product_id'     => $request->get('product_id'),
            'description'    => $request->get('description')
        ]);


        $data = array(
            'customer_name' => $request->customer_name,
            'description'   => $request->description
        );

        $customerInfo->save();

        Mail::to($request->get('email'))->send(new SendMail($data));
        // return back()->with('success', 'Thanks');

        return redirect('/')->with('success',
        'Data Added');
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
