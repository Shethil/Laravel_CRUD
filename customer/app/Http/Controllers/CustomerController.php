<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index(){
        
        $customers = Customer::all();
        return view('customer.index', compact('customers'));
    }

    public function  create(){
        return view('customer.create');
    }

    public function store(){

        $data = request()->validate([
            'name'=>'required',
            'email' => 'required|email'
        ]);

        Customer::create($data);
        return redirect()->route('customer.index');
    }

    public function show($customerID){
        $customer = Customer::findOrfail($customerID);
        return view('customer.show', compact("customer"));
    }

    public function edit($customerID){
        $customer = Customer::findOrfail($customerID);
        return view('customer.edit', compact("customer"));
    }

    public function update(Request $request, $customerID){

        $data = Customer::find($customerID); 
        $data->name = $request->name;
        $data->email = $request->email;
        $data->update();

        return redirect()-> route('customer.index');
    }

    public function destroy($customerID){
        
        $data = Customer::find($customerID);
        $data->delete();

        return redirect()-> route('customer.index');

    }
}
